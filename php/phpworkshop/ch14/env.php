<?php 

if (!empty($_ENV['ENVIRONМENT'])) {
  define('ENVIRONМENT', $_ENV['ENVIRONМENT']);
}

if (empty($_ENV['ENVIRONМENT'])) {
  echo 'Режим разработки' . PHP_EOL;
} else {
  if (stripos($_ENV['ENVIRONМENT'], 'test') !== FALSE) {
    echo 'Режим тестирования' . PHP_EOL;
  } elseif ($_ENV['ENVIRONМENT'] === 'production') {
    echo 'Режим эксплуатации' . PHP_EOL;
  }
}

?>