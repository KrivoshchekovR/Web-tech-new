<!DOCTYPE html>
<html>
<head>
	<title>БД</title>
	<style type="text/css">
		td
		{
			border-radius: 4px;
			border:1px;
		}
		tr
		{
			background-color: #ffccff;
		}
	</style>
</head>
<body>
<?php 
//соединение с базой данных при помощи функции mysql_connect()
  //в аргументах функции укажите имя сервера, логин и пароль. 
  $db = mysql_connect("127.0.0.1","Navai","78769113");
  //функция mysql_select_db() выбирает текущую 
  //базу данных с именем "test"
  mysql_select_db("usersite" ,$db);
  //функция mysql_query() выполняет запрос на выборку данных 
  //результирующий набор данных хранится в переменной $sql
  $sql = mysql_query("SELECT * FROM User" ,$db);
  //после получения данных начнём формирование HTML-таблицы 
  echo ("<table>");
  //выводим строку заголовков 
  echo ("<tr><td>Логин</td><td>Пароль</td><td>E-mail</td><td>Группа</td></tr>");
  //функция mysql_fetch_row() извлекает одну строку из результата 
  //и сохраняет её в массиве $tablerows
  while ($tablerows = mysql_fetch_row($sql))
  {
  echo("<tr><td><a href='$tablerows[0]'>$tablerows[0]</a></td><td>$tablerows[1]</td><td>$tablerows[2]</td><td>$tablerows[3]</td></tr>  ");
  }
  echo "</table>";
  //закрытие соединение (рекомендуется)
  mysql_close($db);
 ?>
</body>
</html>


