<?php

$list_content = file_get_contents("list.txt");

$list_arr = preg_split("/(\r)?\n/", $list_content);

if (!empty($_POST['remove'])) {
  $remove = $_POST['remove'];

  $list_arr = array_filter($list_arr, function ($e) use ($remove) {
    return !in_array($e, $remove);
  });

  file_put_contents("list.txt", join("\n", $list_arr));
}


?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <form method="post">
    <? foreach($list_arr as $list_item): ?>
    <p>
      <label><input type="checkbox" name="remove[]" value="<?=$list_item;?>"><?=$list_item;?></label>
    </p>
    <? endforeach; ?>
    <button type="submit">Save</button>
  </form>
</body>
</html>