<?php 

date_default_timezone_set("Europe/Moscow");

session_start();

$msg = "";

if (!empty($_POST['first_name']) && !empty($_POST['last_name'])) {
  $_SESSION['first_name'] = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
  $_SESSION['last_name'] = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
}

if (!empty($_SESSION['first_name']) && !empty($_SESSION['last_name'])) {
  $curr_hour = date("H", time());
  
  switch (true) {
    case ($curr_hour >=5 && $curr_hour < 11):
      $msg = 'Доброе утро, ';
      break;
    
    case ($curr_hour >=11 && $curr_hour < 16):
      $msg = 'Добрый день, ';
      break;

    case ($curr_hour >=16 && $curr_hour <= 23):
      $msg = 'Добрый вечер, ';
      break;

    case ($curr_hour >=0 && $curr_hour < 5):
      $msg = 'Доброй ночи, ';
      break;
  }

  $msg .= $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
}

?>

<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    label {
      display: block;
    }
  </style>
</head>
<body>
  <? if (!empty($msg)): ?>
  <p><?=$msg?></p>
  <? else: ?>
  <form method="POST">
    <p><label>Ваше имя</label><input type="text" name="first_name"></p>
    <p><label>Ваша фамилия</label><input type="text" name="last_name"></p>
    <button type="submit">Отправить</button>
  </form>
  <? endif; ?>
</body>
</html>