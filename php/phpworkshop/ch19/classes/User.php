<?php

class User
{
    public $first_name;
    public $last_name;
    public $email;
    private $password;

    public function __construct($email, $password, $first_name = null, $last_name = null)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function __clone()
    {
        $this->password = md5(time());
    }

}

?>
