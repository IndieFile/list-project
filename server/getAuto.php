<?php // Получить массив Автомарок
$mysqli = new mysqli('127.0.0.1', 'root', '', 'related_list');
$result = $mysqli->query("SELECT * FROM auto "); // получить все авто

while ($row = $result->fetch_array())
{
  echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
}
$mysqli->close();
?>
