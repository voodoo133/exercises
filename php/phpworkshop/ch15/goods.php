<?php 

function filterMoney($m)
{
  return filter_var($m, FILTER_VALIDATE_FLOAT) !== false && preg_match("/\d{1,3}\.\d{1,2}/", $m);
}

filterMoney("1.sfs2");

function postHandler()
{
  $result = [
    'error_msg' => null,
    'data' => null
  ];

  $amountFilterResult = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_INT, ['options' => 'filterNotCyrillicChars']);
  $priceFilterResult = filter_input(INPUT_POST, 'price', FILTER_CALLBACK, ['options' => 'filterMoney']);

  if ($amountFilterResult === false)
    $result['error_msg'] = "Введено неверное кол-во";

  if ($priceFilterResult === false)
    $result['error_msg'] = "Введена неверная цена";

  if ($amountFilterResult !== false && $priceFilterResult !== false) {
    $result['data'] = floatval($_POST['amount']) * floatval($_POST['price']);
  }

  return $result;
}

$errorMsg = null;
$data = null;

if (!empty($_POST)) 
  ['error_msg' => $errorMsg, 'data' => $data] = postHandler();

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    label {
      display: block;
    }
  </style>
</head>
<body>
  <form method="POST">
    <p>
      <label for="amount">Кол-во</label>
      <input type="number" id="amount" name="amount" required />
    </p>
    <p>
      <label for="price">Цена</label>
      <input type="number" id="price" name="price" step="any" required />
    </p>
    <p>
      <button type="submit">Сохранить</button>
    </p>
    <? if (!is_null($errorMsg)): ?>
    <p class="error-msg"><?=$errorMsg;?></p>
    <? endif; ?>
    <? if (!is_null($data)): ?>
    <p>Результат - <?=$data;?></p>
    <? endif; ?>
  </form>
</body>
</html>