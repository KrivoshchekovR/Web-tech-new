<html>
	<head>
		<title>Оформить заказ</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" type="text/css" href="zakaz.css">
	</head>

	<body>
		<nav align=center>
			<ul><a href="index.php">Главная страница</a></ul>
			<ul><a href="contact.php">Контакты</a></ul>
			<ul><a href="zakaz.php">Заказать услугу</a></ul>
		</nav>
		<div align=center>
			<p></p>
			<table align=center>
				<tr><th>Наименование услуги</th><th>Стоимость</th></tr>
				<tr><td>Услуга 1</td><td>100 $</td></tr>
				<tr><td>Услуга 2</td><td>100 $</td></tr>
				<tr><td>Услуга 3</td><td>100 $</td></tr>
				<tr><td>Услуга 4</td><td>50 $</td></tr>
				<tr><td>Услуга 5</td><td>100 $</td></tr>
				<tr><td>Услуга 6</td><td>1000 $</td></tr>
			</table>
		</div>
			<form action="handler.php" method="post">
			<input type="text" name="phone" placeholder="Телефон">
			<input list="lis" name="listbase" placeholder = "Выберите проблему">
			<input type="submit" value="Отправить">
		
			<datalist id="lis">
				<option>Серьезная проблема</option>
				<option>Не очень</option>
			</datalist> 
	</body>
</html>
