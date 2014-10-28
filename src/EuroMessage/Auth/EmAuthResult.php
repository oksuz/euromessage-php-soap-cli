<?php
namespace EuroMessage\Auth;

class EmAuthResult extends \EuroMessage\EmResult {
    public $ServiceTicket; // string

    /**
     * @return String
     */
    public function getServiceTicket()
    {
        return $this->ServiceTicket;
    }
}