<?php 

require_once 'Classes/Buffer.php';
require_once 'Classes/BufferInfo.php';
require_once 'Classes/BufferSettings.php';

use Buffer\Classes\Buffer;
use Buffer\Classes\BufferInfo;
use Buffer\Classes\BufferSettings;

$bufferSettings = new BufferSettings();
$buffer = new Buffer($bufferSettings->getGZHandler());
$bufferInfo = new BufferInfo();


echo 'Some information. ';

$out1 = $buffer->get();
$length1 = $bufferInfo->getLength();

echo 'Some information 2. ';

$out2 = $buffer->get();
$length2 = $bufferInfo->getLength();

$buffer->clean();

var_dump($out1, $out2);

echo "{$length1}, {$length2}" . PHP_EOL;

?>