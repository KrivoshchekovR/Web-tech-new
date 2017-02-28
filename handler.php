<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<style>
			* { font-family:Calibri }
		</style>
	</head>
<body>
<?php
// Получить данные из суперглобального массива $_POST и обработать их
	$phone = $_POST['phone'];
	$listbase = $_POST['listbase'];
	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_table = "test";
	
	$db = mysql_connect($db_host,$db_user,$db_password) OR DIE ("НЕ могу");
	
	mysql_select_db("TEST2", $db);
	mysql_query("SET NAMES 'utf-8", $db);
	
	$result = mysql_query("INSERT INTO".$db_table." VALUES ('$phone','$listbase')", $db);
	if ($result = 'true')
	{
		echo "В ближайшее время с вами свяжется наш специалист. ";
	}
	else
	{
		echo "Не получилось";
	}
?>
</body>
</html>
