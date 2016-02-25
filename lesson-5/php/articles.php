<?php
require_once("functions/check.php");
require_once("functions/mysql_db_service.php");
    session_start();
	is_login("articles");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<meta charset="utf-8"/>
	<meta name="description" content="This is the main page of my site"/>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="stylesheet" href="../css/articles.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Comfortaa:400,300,700&subset=latin,cyrillic,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'/>
</head>
<body>
	<div class="content">
	<ul class="main-menu">
		<li>
			<h1><a href="index.php">Home</a></h1>
		</li>
		<li class="here"><a href="articles.php">Статьи</a></li>
		<li><a href="catalog.php">Каталог</a></li>
		<li><a href="gallery.php">Галерея изображений</a></li>
		<li><a href="register.php">Регистрация</a></li>
		<li><a href="contacts.php">Контакты</a></li>
		Hello,<span style="color: #ff7f50;">
			<?php
				$data = get_user_by_id($_COOKIE['user_id']);
				echo $data['user_login'];
			?>
		</span>
	</ul>
	<section class="articles">
		<article>
			<header>
				<h1><a href="../articles/article_1.html" target="_blank">Из жизни людоедов</a></h1>
			</header>
			<div class="short-description">
				<p>
					Такова цена жизни человека в России. Так её оценивает нынешний президент...
					<br/>
					<a href="../articles/article_1.html" target="_blank">&gt;&gt;&gt; читать далее</a>
				</p>
			</div>	
			<a href="../articles/article_1.html#comments">Перейти к комментариям</a>
		</article>
		<hr/>
		<article>
			<header>
				<h1><a href="../articles/article_2.html" target="_blank">&laquo;Все цели, представляющие для нас потенциальную опасность, будут уничтожаться&raquo;</a></h1>
			</header>
			<div class="short-description">
				<p>
					Заявление начальника Главного оперативного управдения Генштаба ВС РФ генерал-лейтенанта Сергея Рудского...
					<br/>
					<a href="../articles/article_2.html" target="_blank">&gt;&gt;&gt; читать далее</a>
				</p>
			</div>	
			<a href="../articles/article_2.html#comments">Перейти к комментариям</a>
		</article>
	</section>
	</div>
	<footer>
		All rights reserved &copy; 2015
	</footer>
</body>
</html>