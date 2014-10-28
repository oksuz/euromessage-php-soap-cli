<?php
namespace EuroMessage;

class Mail
{
    private $subject;
    private $to;
    private $body;
    private $attachments = array();

    /**
     * @param array $attachments
     */
    public function addAttachment(\EuroMessage\Post\EmAttachment $attachment)
    {
        $this->attachments[] = $attachment;
        return $this;
    }

    /**
     * @return array
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $to
     */
    public function to($to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }


}