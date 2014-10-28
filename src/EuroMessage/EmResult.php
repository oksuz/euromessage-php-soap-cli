<?php
namespace EuroMessage;

class EmResult {

    public $Code; // string
    public $Message; // string
    public $DetailedMessage; // string

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @return mixed
     */
    public function getDetailedMessage()
    {
        return $this->DetailedMessage;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->Message;
    }
}