<?php 

class F
{
  public static function find($funcName)
  {
    $urlFunctionName = str_replace('_', '-', $funcName); 
    $url = "https://www.php.net/manual/ru/function.{$urlFunctionName}.php";

    if (!empty($urlFunctionName)) {
      include_once 'simplehtmldom/simple_html_dom.php';

      $html = file_get_html($url);

      $ret = $html->find('.description', 0);

      return $ret->innertext;
    }
  }
}

echo F::find('strval') . PHP_EOL . PHP_EOL;
echo F::find('is_bool') . PHP_EOL . PHP_EOL;
echo F::find('intval') . PHP_EOL . PHP_EOL;

?>