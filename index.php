<?php ## Вывод содержимого таблицы catalogs
  require_once("connect_db.php");
  $query = "SELECT * FROM systree";
  $cat = $pdo->query($query);
  try {
    while($catalog = $cat->fetch())
      echo $catalog['name']."<br />";
  } catch (PDOException $e) {
    echo "Ошибка выполнения запроса: " . $e->getMessage();
  }
?>
