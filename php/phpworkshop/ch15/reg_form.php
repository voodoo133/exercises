<?php 

DEFINE("USERS_FILE", "users.txt");

function fromCSVToArr($str)
{
  return array_map(fn($u) => explode(";", $u) ,explode("\n", $str));
}

function fromArrToCSV($arr)
{
  return join("\n", array_map(fn($u) => join(";", $u) , $arr));
}

function getUsersData($fileName)
{
  $usersFile = null;

  if (file_exists(USERS_FILE))
    $usersFile = file_get_contents(USERS_FILE);

  return !is_null($usersFile) ? fromCSVToArr($usersFile) : [];
}

function saveUsersData($users)
{
  file_put_contents(USERS_FILE, fromArrToCSV($users));
}

function filterNotCyrillicChars($str)
{
  return preg_replace("/[^а-яА-Я]/u", "", $str);
}

function postHandler()
{
  $firstName = filter_input(INPUT_POST, 'firstName', FILTER_CALLBACK, ['options' => 'filterNotCyrillicChars']);
  $lastName = filter_input(INPUT_POST, 'lastName', FILTER_CALLBACK, ['options' => 'filterNotCyrillicChars']);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

  if (empty($firstName))
    return "Некорректное имя";

  if (empty($lastName))
    return "Некорректная фамилия";

  if (empty($email))
    return "Некорректный адрес эл. почты";

  $users = getUsersData(USERS_FILE);

  if (!empty($users)) {
    $emails = array_column($users, 2);

    if (in_array($email, $emails))
      return "Такой пользователь уже существует";
  }

  $users[] = [$firstName, $lastName, $email];

  saveUsersData($users);

  return null;
}

$errorMsg = null;

if (!empty($_POST)) 
  $errorMsg = postHandler();

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    label {
      display: block;
    }

    .error-msg {
      color: red;
    }
  </style>
</head>
<body>
  <form method="post">
    <p>
      <label for="first-name">Имя</label>
      <input type="text" id="first-name" name="firstName" pattern="[а-яА-Я]{2,20}" required />
    </p>
    <p>
      <label for="last-name">Фамилия</label>
      <input type="text" id="last-name" name="lastName" pattern="[а-яА-Я]{2,20}" required />
    </p>
    <p>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required />
    </p>
    <p>
      <button type="submit">Сохранить</button>
    </p>
    <? if (!is_null($errorMsg)): ?>
    <p class="error-msg"><?=$errorMsg;?></p>
    <? endif; ?>
  </form>
</body>
</html>