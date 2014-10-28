<?php
namespace EuroMessage;

class EuroMessageClient
{
    /**
     * @param String $userName
     * @param String $password
     * @return String ServiceTicket
     * @throws Exceptions\LoginException
     */
    public function login($userName, $password)
    {
        $auth = new \EuroMessage\Auth\Auth();
        $login = new \EuroMessage\Auth\Login();
        $login->setPassword($password)->setUsername($userName);

        /** @var $loginResponse \EuroMessage\Auth\LoginResponse */
        $loginResponse = $auth->Login($login);
        $ticket = $loginResponse->getLoginResult()->getServiceTicket();

        if (null === $ticket) {
            throw new \EuroMessage\Exceptions\LoginException($loginResponse->getLoginResult()->getMessage(), $loginResponse->getLoginResult()->getCode());
        }

        return $ticket;
    }

    /**
     * @param \EuroMessage\Post\EmPostRequest $req
     * @param \EuroMessage\Mail $m
     * @return \EuroMessage\Post\EmPostResult
     * @throws \EuroMessage\Exceptions\MailSendException
     */
    public function sendSingleHtmlMail(\EuroMessage\Post\EmPostRequest $req, \EuroMessage\Mail $m)
    {
        $mailSender = new \EuroMessage\Post\Post();
        $mail = new \EuroMessage\Post\PostHtml();
        $mail->setServiceTicket($req->getServiceTicket());
        $mail->setCharset($req->getCharset());
        $mail->setFromName($req->getFromName());
        $mail->setFromAddress($req->getFromAddress());
        $mail->setReplyAddress($req->getReplyAddress());

        $mail->setSubject($m->getSubject());
        $mail->setToEmailAddress($m->getTo());
        $mail->setHtmlBody($m->getBody());
        $mail->setAttachments($m->getAttachments());
        $this->_log("New Mail Created", $mail);

        /** @var \EuroMessage\Post\PostHtmlResponse $response */
        $response = $mailSender->PostHtml($mail);

        if (null === $response->getPostHtmlResult()->getPostID()) {
            $this->_log("Mail Sending Failed", array($mail));
            throw new \EuroMessage\Exceptions\MailSendException($response->getPostHtmlResult()->getMessage(), $response->getPostHtmlResult()->getCode());
        }

        return $response->getPostHtmlResult();
    }

    public function logout(\EuroMessage\Post\EmPostRequest $req)
    {
        $logout = new \EuroMessage\Auth\Logout();
        $logout->setServiceTicket($req->getServiceTicket());
        $auth = new \EuroMessage\Auth\Auth();
        $logoutResponse = $auth->Logout($logout);
        $this->_log("EuroMessage Logged Out", $logoutResponse->getLogoutResult());
    }

    protected function _log($message, $data)
    {
        error_log($message . "\n" . print_r($data, true));
    }

}