<?php  

$html = file_get_contents("http://php.net");

preg_match("/<title>(.+)<\/title>/", $html, $matches);

echo $matches[1] . PHP_EOL;

?>