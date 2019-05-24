<?php // Получить массив моделей
$rest_json = file_get_contents("php://input");
$_POST = simplexml_load_string(json_decode($rest_json, true));
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') { // проверка заголовка запроса
  $mysqli = new mysqli('127.0.0.1', 'root', '', 'related_list');
  $result = $mysqli->query("SELECT * FROM models WHERE `auto_id`='".$_REQUEST["auto_id"]."' "); // выбрать данные по совпадащим ключам
  $arr =[];
  while ($row = $result->fetch_array())
  {
    array_push($arr,$row["name"]); // добавление данных в масив
  }
  echo json_encode($arr);
}
$mysqli->close(); // отключение от бд
?>