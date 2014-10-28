<?php
namespace EuroMessage\Post;

class PostHtml {
    public $ServiceTicket; // string
    public $FromName; // string
    public $FromAddress; // string
    public $ReplyAddress; // string
    public $Subject; // string
    public $HtmlBody; // string
    public $Charset; // string
    public $ToName = ""; // string
    public $ToEmailAddress; // string
    public $Attachments; // ArrayOfEmAttachment

    /**
     * @param mixed $Attachments
     */
    public function setAttachments($Attachments)
    {
        $this->Attachments = $Attachments;
    }

    /**
     * @param mixed $Charset
     */
    public function setCharset($Charset)
    {
        $this->Charset = $Charset;
    }

    /**
     * @param mixed $FromAddress
     */
    public function setFromAddress($FromAddress)
    {
        $this->FromAddress = $FromAddress;
    }

    /**
     * @param mixed $FromName
     */
    public function setFromName($FromName)
    {
        $this->FromName = $FromName;
    }

    /**
     * @param mixed $HtmlBody
     */
    public function setHtmlBody($HtmlBody)
    {
        $this->HtmlBody = $HtmlBody;
    }

    /**
     * @param mixed $ReplyAddress
     */
    public function setReplyAddress($ReplyAddress)
    {
        $this->ReplyAddress = $ReplyAddress;
    }

    /**
     * @param mixed $ServiceTicket
     */
    public function setServiceTicket($ServiceTicket)
    {
        $this->ServiceTicket = $ServiceTicket;
    }

    /**
     * @param mixed $Subject
     */
    public function setSubject($Subject)
    {
        $this->Subject = $Subject;
    }

    /**
     * @param mixed $ToEmailAddress
     */
    public function setToEmailAddress($ToEmailAddress)
    {
        $this->ToEmailAddress = $ToEmailAddress;
    }

    /**
     * @param mixed $ToName
     */
    public function setToName($ToName)
    {
        $this->ToName = $ToName;
    }



}