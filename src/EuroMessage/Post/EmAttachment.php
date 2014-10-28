<?php
namespace EuroMessage\Post;

class EmAttachment {
    public $Name; // string
    public $Type; // string
    public $Content;// base64Binary

    /**
     * @param String $Content
     * binary file content. soapClient will be encode data with base64 algo.
     */
    public function setContent($Content)
    {
        $this->Content = $Content;
        return $this;
    }

    /**
     * @param mixed $Name
     * file name like "awesome picture"
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @param mixed $Type
     * file extension like "jpg,png,pdf,doc,docx"
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }





}