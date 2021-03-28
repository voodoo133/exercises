<?php

date_default_timezone_set('Europe/Moscow');

class User
{
    private $email;
    private $password;
    private $firstName;
    private $lastName;

    public function __construct($email, $password, $firstName = null, $lastName = null)
    {
        $this->email     = $email;
        $this->password  = $password;
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public function __get($index)
    {
        if (isset($this->$index)) {
            return $this->$index;
        } else {
            throw new Exception("Атрибут {$index} не существует");
        }
    }

    public function __set($index, $value)
    {
        if (isset($this->$index)) {
            $this->$index = $value;
        } else {
            throw new Exception("Атрибут {$index} не существует");
        }
    }
}

try {
    $user = new User('aa@aa.ru', 'pass', 'Uncle', 'Vasya');

    $user->var = 100;
} catch (Exception $e) {
    $errorMsg = date("Y-m-d H:i:s", time()) . ': message - ' . $e->getMessage() . PHP_EOL;
    $errorMsg .= "\t\t\t\t\t trace\t - " . str_replace("\n", "\n\t\t\t\t\t\t\t   ", $e->getTraceAsString()) . PHP_EOL;
    $errorMsg .= PHP_EOL;

    file_put_contents('exceptions.log', $errorMsg, FILE_APPEND);
}
