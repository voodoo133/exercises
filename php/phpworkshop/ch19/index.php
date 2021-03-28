<?php 

require_once('classes/User.php');

$user1 = new User('user1@example.com', 'password1');

$user2 = clone $user1;

var_dump($user1->getPassword());
var_dump($user2->getPassword());

?>