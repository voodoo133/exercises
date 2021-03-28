<?php 


if (!empty($_POST)) {
  $x1 = floatval($_POST['x1']);
  $y1 = floatval($_POST['y1']);

  $x2 = floatval($_POST['x2']);
  $y2 = floatval($_POST['y2']);

  $distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
}

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <form method="post">
    <fieldset>
      <legend>Координаты 1-ой точки</legend>
      <p><label>x <input type="number" name="x1"></label></p>
      <p><label>y <input type="number" name="y1"></label></p>
    </fieldset>
    <fieldset>
      <legend>Координаты 2-ой точки</legend>
      <p><label>x <input type="number" name="x2"></label></p>
      <p><label>y <input type="number" name="y2"></label></p>
    </fieldset>
    <p>
      <button type="submit">Вычислить</button>
    </p>
    <? if (isset($distance)): ?>
    <p>Дистанция: <?=$distance;?></p>
    <? endif; ?>
  </form>
</body>
</html>