<?php
namespace EuroMessage\Auth;

class LoginResponse extends \EuroMessage\EmResult {
    public $LoginResult; // EmAuthResult

    /**
     * @return \EuroMessage\Auth\EmAuthResult
     */
    public function getLoginResult()
    {
        return $this->LoginResult;
    }


}