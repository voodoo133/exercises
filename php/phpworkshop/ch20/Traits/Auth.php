<?php 

trait Auth 
{
    private $methods = [];

    public function __call($name, $arguments) 
    {
        if (isset($this->email) && isset($this->password)) {
            if (!isset($this->methods['auth'])) {
                $this->methods['auth'] = function ($email, $password) {
                    if ($this->email === $email && $this->password === md5($password)) {
                        $_SESSION['is_auth'] = true;
                        $_SESSION['email'] = $this->email;
                    }
                };
            }

            if (!isset($this->methods['is_auth'])) {
                $this->methods['is_auth'] = function () {
                    return isset($_SESSION['is_auth']) && $_SESSION['is_auth'] === true;
                };
            }
        }

        if (!isset($this->methods[$name])) {
            throw new BadMethodCallException("Instance method " . __CLASS__ . "->{$name}() doesn't exist");
        }

        return $this->methods[$name](...$arguments);
    }
}

?>