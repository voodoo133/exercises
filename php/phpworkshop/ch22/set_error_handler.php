<?php  

date_default_timezone_set("Europe/Moscow");

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    $errMsg = date('Y-m-d H:i:s', time()) . " - {$errfile}:{$errline} {$errstr}({$errno})" . PHP_EOL;
    file_put_contents("errors.txt", $errMsg, FILE_APPEND);
});

$a = 5;
$b = $a / 0;

?>