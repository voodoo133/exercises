<?php 

$text = 'Обозначение г. Апатиты было на рис. 1. Как видно из табл. 2 данные отчетливо соответствуют тому, что на рис. 1.';
$notReplacedWords = ['г.', 'рис.', 'табл.'];

$replacedText = preg_replace_callback('/([0-9а-яА-Я]+)\./u', function ($matches) use ($notReplacedWords) {
  [$full_match, $word] = $matches;

  if (in_array($full_match, $notReplacedWords)) return $full_match;
  else return $word . str_repeat('.', 3);
}, $text);

echo $replacedText . PHP_EOL;

?>