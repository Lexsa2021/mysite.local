<!DOCTYPE html!>
<html lang="ru">
	<head>
		<meta charset='utf-8'>
		<title>Результат</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
	<header class="top">
		<h1 class="logo">My first site</h1>
	</header>
	<nav>
		<a href="index.php">Home</a> | <a href="https://github.com/Lexsa2021/mysite.local.git">GitHub</a> | <a href="lesson1.php">Lesson 1</a> | <a href="lesson2.php">Lesson 2 </a> | <a href="lesson3.php">Lesson 3</a>
	</nav>
	<section class="main">
	<h1 align="center">Введите любой текст</h1>
<?php
	$word = $_POST['word'];
	echo strrev($word);
?>
	</section>
<footer>
&copy2021
</footer>
</body>
</html>

