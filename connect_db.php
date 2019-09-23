<?php ##Соединение с БД
try {
  $pdo = new PDO ('mysql:host=127.0.0.1;dbname=mirad1n', 'mx123', 'Qq123456');
}
catch (PDOException $e) {
  echo "Невозможно соеденится с БД";
}
