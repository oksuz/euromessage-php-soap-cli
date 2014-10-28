<?php
namespace EuroMessage\Auth;
class Login {
    public $Username; // string
    public $Password; // string

    /**
     * @param String $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @param String $Username
     */
    public function setUsername($Username)
    {
        $this->Username = $Username;
        return $this;
    }





}