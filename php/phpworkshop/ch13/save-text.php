<?php
  
  if (!empty($_POST)) {
    $text = filter_var($_POST['text'], FILTER_SANITIZE_STRING);

    file_put_contents("content.txt", $text);
  } else {
    if (file_exists("content.txt")) {
      $text = file_get_contents("content.txt");
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    form {
      width: 300px;
    }

    textarea {
      width: 100%;
      height: 100px;
      resize: none;
    }
  </style>
</head>
<body>
  <form method="post">
    <textarea name="text"><?=(isset($text)) ? $text : '';?></textarea>
    <button type="submit">Save</button>
  </form>
</body>
</html>