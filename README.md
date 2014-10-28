### EuroMessage Soap Api Php Client

#### Usage:

```php
$client = new \EuroMessage\EuroMessageClient();
$serviceTicket = $client->login(YOUR_EM_USER_NAME, YOUR_EM_PASSWORD); // throws \EuroMessage\Exceptions\LoginException

$postRequest = new \EuroMessage\Post\EmPostRequest();
$postRequest->setServiceTicket($serviceTicket)
    ->setFromAddress(FROM_ADDRES)
    ->setReplyAddress(REPLY_ADDRESS)
    ->setFromName(FROM_NAME);

$mail = new \EuroMessage\Mail();
$mail->setBody(MAIL_BODY)
    ->setSubject(MAIL_SUBJECT);
    ->to("someone@example.com");

/** @var \EuroMessage\Post\EmPostResult $result */
$result = $client->sendSingleHtmlMail($postRequest, $mail); // throws \EuroMessage\Exceptions\MailSendException

```

