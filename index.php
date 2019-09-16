<?php

$mysqli = new mysqli("127.0.0.1", "mx123", "Qq123456", "mirad1n");

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();

}
else echo ("Connection DONE!");

$result = $mysqli->query("SELECT * FROM bages WHERE id='1'");
$row = $result->fetch_assoc();
$t = $row["img_lk"];
echo $t;

?>
<p><img src="1.png" alt="Письма мастера дзен"></p>
<h1>TEST</h1>

<?php

$mysqli->close();
?>
