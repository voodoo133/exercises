<?php 

require_once 'Traits/Auth.php';
require_once 'Classes/User.php';
require_once 'Classes/Point.php';

session_start();

$email = 'aaa@aaa.ru';
$password = '12345';

$user = new User($email, $password);

var_dump($user->is_auth());
$user->auth($email, $password);
var_dump($user->is_auth());

$point = new Point(1, 2);
var_dump($point->is_auth());

?>