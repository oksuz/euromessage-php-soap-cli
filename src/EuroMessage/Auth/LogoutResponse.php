<?php
namespace EuroMessage\Auth;

class LogoutResponse extends \EuroMessage\EmResult {
    public $LogoutResult; // EmAuthResult

    /**
     * @return \EuroMessage\Auth\EmAuthResult
     */
    public function getLogoutResult()
    {
        return $this->LogoutResult;
    }

}