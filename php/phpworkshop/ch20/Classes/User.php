<?php 

class User
{
    use Auth;

    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = md5($password);
    }
}

?>