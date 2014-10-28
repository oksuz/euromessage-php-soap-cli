<?php
namespace EuroMessage\Auth;

class Logout {
    public $ServiceTicket; // string

    /**
     * @param mixed $ServiceTicket
     */
    public function setServiceTicket($ServiceTicket)
    {
        $this->ServiceTicket = $ServiceTicket;
    }


}