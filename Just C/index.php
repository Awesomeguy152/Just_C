<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Определение ПВК</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="style.css">
	<script src="/js/jquery-3.7.1.min.js"></script>
	<script src="/js/scripts.js"></script>
</head>
<body>

	<?php include "header.php"; ?>

	<?php include "connect_db.php"; ?>

	<main>
		<div class="container">
			<h1>Список экспертов</h1>
			<?php include "mysql_select.php"; ?>

			<?php include "form.php"; ?>

			<div class="insert-block">
				<?php include "mysql_insert.php"; ?>
			</div>
			
		</div>
	</main>

	<footer class="footer">
		<div class="container">
			<a href=""><img src="images/logo.png" alt=""></a>
			<div class="title-group">
				<span>Just C</span>
				<p>Основы Профессиональной деятельности</p>
			</div>
			<div class="adress-group">
				<span>г. Санкт-Петербург, Кронверский проспект,&nbsp;49</span>
				<p>Основы Профессиональной деятельности</p>
			</div>
			
			<ul class="developmer">
				<li><a href="">Владимир</a></li>
				<li><a href="">Максим</a></li>
				<li><a href="">Назар</a></li>
				<li><a href="">Всеволод</a></li>
				<li><a href="">Амир</a></li>
				<li><a href="">Степан</a></li>
			</ul>
		</div>
	</footer>

	<div class="dark"></div>
	
</body>
</html>