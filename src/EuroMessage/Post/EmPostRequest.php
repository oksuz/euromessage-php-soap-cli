<?php
namespace EuroMessage\Post;

class EmPostRequest
{
    /**
     * @var String $serviceTicket
     */
    private $serviceTicket;

    /**
     * @var String $FromName
     */
    private $FromName;

    /**
     * FromAddress
     *
     * @var string
     **/
    private $FromAddress;
    /**
     * ReplyAddress
     *
     * @var string
     **/
    private $ReplyAddress;
    /**
     * Charset
     *
     * @var string
     **/
    private $Charset = "UTF-8";

    /**
     * @return string
     */
    public function getCharset()
    {
        return $this->Charset;
    }

    /**
     * @return string
     */
    public function getFromAddress()
    {
        return $this->FromAddress;
    }

    /**
     * @return string
     */
    public function getFromName()
    {
        return $this->FromName;
    }

    /**
     * @return string
     */
    public function getReplyAddress()
    {
        return $this->ReplyAddress;
    }

    /**
     * @param string $Charset
     */
    public function setCharset($Charset)
    {
        $this->Charset = $Charset;
        return $this;
    }

    /**
     * @param string $FromAddress
     */
    public function setFromAddress($FromAddress)
    {
        $this->FromAddress = $FromAddress;
        return $this;
    }

    /**
     * @param string $FromName
     */
    public function setFromName($FromName)
    {
        $this->FromName = $FromName;
        return $this;
    }

    /**
     * @param string $ReplyAddress
     */
    public function setReplyAddress($ReplyAddress)
    {
        $this->ReplyAddress = $ReplyAddress;
        return $this;
    }

    /**
     * @param String $serviceTicket
     */
    public function setServiceTicket($serviceTicket)
    {
        $this->serviceTicket = $serviceTicket;
        return $this;
    }

    /**
     * @return String
     */
    public function getServiceTicket()
    {
        return $this->serviceTicket;
    }


}