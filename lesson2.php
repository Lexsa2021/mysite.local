<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Урок 2. Таблица умножение в цвете</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
	<header class="top">
		<h1 class="logo">My first site</h1>
	</header>
	<nav>
		<a href="index.php">Home</a> | <a href="https://github.com/Lexsa2021/mysite.local.git">GitHub</a> | <a href="lesson1.php">Lesson 1</a> | <a href="lesson2.php">Lesson 2 </a>
	</nav>
	<section class="main">
	<h1 align="center">Цветная Таблица Умножений</h1>
<?php

echo "<table border=\"1\">\n";
echo "<tr><td> 
<span class = 'one'>1</span>*<span class = 'one'>1</span>=<span class = 'one'>1</span><br>
<span class = 'one'>1</span>*<span class = 'two'>2</span>=<span class = 'two'>2</span><br>
<span class = 'one'>1</span>*<span class = 'three'>3</span>=<span class = 'three'>3</span><br>
<span class = 'one'>1</span>*<span class = 'four'>4</span>=<span class = 'four'>4</span><br>
<span class = 'one'>1</span>*<span class = 'five'>5</span>=<span class = 'five'>5</span><br>
<span class = 'one'>1</span>*<span class = 'six'>6</span>=<span class = 'six'>6</span><br>
<span class = 'one'>1</span>*<span class = 'seven'>7</span>=<span class = 'seven'>7</span><br>
<span class = 'one'>1</span>*<span class = 'eight'>8</span>=<span class = 'eight'>8</span><br>
<span class = 'one'>1</span>*<span class = 'nine'>9</span>=<span class = 'nine'>9</span><br>
<span class = 'one'>1</span>*<span class = 'one'>1</span><span class = 'zero'>0</span>=<span class = 'one'>1</span><span class = 'zero'>0</span><br></td>
<td>
<span class = 'two'>2</span>*<span class = 'one'>1</span>=<span class = 'two'>2</span><br>
<span class = 'two'>2</span>*<span class = 'two'>2</span>=<span class = 'four'>2</span><br>
<span class = 'two'>2</span>*<span class = 'three'>3</span>=<span class = 'six'>6</span><br>
<span class = 'two'>2</span>*<span class = 'four'>4</span>=<span class = 'eight'>8</span><br>
<span class = 'two'>2</span>*<span class = 'five'>5</span>=<span class = 'one'>1</span><span class = 'zero'>0</span><br>
<span class = 'two'>2</span>*<span class = 'six'>6</span>=<span class = 'one'>1</span><span class = 'two'>2</span><br>
<span class = 'two'>2</span>*<span class = 'seven'>7</span>=<span class = 'one'>1</span><span class = 'four'>4</span><br>
<span class = 'two'>2</span>*<span class = 'eight'>8</span>=<span class = 'one'>1</span><span class = 'six'>6</span><br>
<span class = 'two'>2</span>*<span class = 'nine'>9</span>=<span class = 'one'>1</span><span class = 'eight'>8</span><br>
<span class = 'two'>2</span>*<span class = 'one'>1</span><span class = 'zero'>0</span>=<span class = 'two'>2</span><span class = 'zero'>0</span><br></td>
<td>
<span class = 'three'>3</span>*<span class = 'one'>1</span>=<span class = 'three'>3</span><br>
<span class = 'three'>3</span>*<span class = 'two'>2</span>=<span class = 'six'>6</span><br>
<span class = 'three'>3</span>*<span class = 'three'>3</span>=<span class = 'nine'>9</span><br>
<span class = 'three'>3</span>*<span class = 'four'>4</span>=<span class = 'one'>1</span><span class = 'two'>2</span><br>
<span class = 'three'>3</span>*<span class = 'five'>5</span>=<span class = 'one'>1</span><span class = 'five'>5</span><br>
<span class = 'three'>3</span>*<span class = 'six'>6</span>=<span class = 'one'>1</span><span class = 'eight'>8</span><br>
<span class = 'three'>3</span>*<span class = 'seven'>7</span>=<span class = 'two'>2</span><span class = 'one'>1</span><br>
<span class = 'three'>3</span>*<span class = 'eight'>8</span>=<span class = 'two'>2</span><span class = 'four'>4</span><br>
<span class = 'three'>3</span>*<span class = 'nine'>9</span>=<span class = 'two'>2</span><span class = 'seven'>7</span><br>
<span class = 'three'>3</span>*<span class = 'one'>1</span><span class = 'zero'>0</span>=<span class = 'three'>3</span><span class = 'zero'>0</span><br></td>
</td>
<td>
<span class = 'four'>4</span>*<span class = 'one'>1</span>=<span class = 'four'>4</span><br>
<span class = 'four'>4</span>*<span class = 'two'>2</span>=<span class = 'eight'>8</span><br>
<span class = 'four'>4</span>*<span class = 'three'>3</span>=<span class = 'one'>1</span><span class = 'zero'>0</span><br>
<span class = 'four'>4</span>*<span class = 'four'>4</span>=<span class = 'one'>1</span><span class = 'six'>6</span><br>
<span class = 'four'>4</span>*<span class = 'five'>5</span>=<span class = 'two'>2</span><span class = 'zero'>0</span><br>
<span class = 'four'>4</span>*<span class = 'six'>6</span>=<span class = 'two'>2</span><span class = 'four'>4</span><br>
<span class = 'four'>4</span>*<span class = 'seven'>7</span>=<span class = 'two'>2</span><span class = 'eight'>8</span><br>
<span class = 'four'>4</span>*<span class = 'eight'>8</span>=<span class = 'three'>3</span><span class = 'two'>2</span><br>
<span class = 'four'>4</span>*<span class = 'nine'>9</span>=<span class = 'three'>3</span><span class = 'six'>6</span><br>
<span class = 'four'>4</span>*<span class = 'one'>1</span><span class = 'zero'>0</span>=<span class = 'four'>4</span><span class = 'zero'>0</span><br></td>
</td>
<td>
<span class = 'five'>5</span>*<span class = 'one'>1</span>=<span class = 'five'>5</span><br>
<span class = 'five'>5</span>*<span class = 'two'>2</span>=<span class = 'one'>1</span><span class = 'zero'>0</span><br>
<span class = 'five'>5</span>*<span class = 'three'>3</span>=<span class = 'one'>1</span><span class = 'five'>5</span><br>
<span class = 'five'>5</span>*<span class = 'four'>4</span>=<span class = 'two'>2</span><span class = 'zero'>0</span><br>
<span class = 'five'>5</span>*<span class = 'five'>5</span>=<span class = 'two'>2</span><span class = 'five'>5</span><br>
<span class = 'five'>5</span>*<span class = 'six'>6</span>=<span class = 'three'>3</span><span class = 'zero'>0</span><br>
<span class = 'five'>5</span>*<span class = 'seven'>7</span>=<span class = 'three'>3</span><span class = 'five'>5</span><br>
<span class = 'five'>5</span>*<span class = 'eight'>8</span>=<span class = 'four'>4</span><span class = 'zero'>0</span><br>
<span class = 'five'>5</span>*<span class = 'nine'>9</span>=<span class = 'four'>4</span><span class = 'five'>5</span><br>
<span class = 'five'>5</span>*<span class = 'one'>1</span><span class = 'zero'>0</span>=<span class = 'five'>5</span><span class = 'zero'>0</span><br></td>
</td>
</tr>
<tr>
<td>
<span class = 'six'>6</span>*<span class = 'one'>1</span>=<span class = 'six'>6</span><br>
<span class = 'six'>6</span>*<span class = 'two'>2</span>=<span class = 'one'>1</span><span class = 'two'>2</span><br>
<span class = 'six'>6</span>*<span class = 'three'>3</span>=<span class = 'one'>1</span><span class = 'eight'>8</span><br>
<span class = 'six'>6</span>*<span class = 'four'>4</span>=<span class = 'two'>2</span><span class = 'four'>4</span><br>
<span class = 'six'>6</span>*<span class = 'five'>5</span>=<span class = 'three'>3</span><span class = 'zero'>0</span><br>
<span class = 'six'>6</span>*<span class = 'six'>6</span>=<span class = 'three'>3</span><span class = 'six'>6</span><br>
<span class = 'six'>6</span>*<span class = 'seven'>7</span>=<span class = 'four'>4</span><span class = 'two'>2</span><br>
<span class = 'six'>6</span>*<span class = 'eight'>8</span>=<span class = 'four'>4</span><span class = 'eight'>8</span><br>
<span class = 'six'>6</span>*<span class = 'nine'>9</span>=<span class = 'five'>5</span><span class = 'four'>4</span><br>
<span class = 'six'>6</span>*<span class = 'one'>1</span><span class = 'zero'>0</span>=<span class = 'six'>6</span><span class = 'zero'>0</span><br></td>
</td>
<td>
<span class = 'seven'>7</span>*<span class = 'one'>1</span>=<span class = 'seven'>7</span><br>
<span class = 'seven'>7</span>*<span class = 'two'>2</span>=<span class = 'one'>1</span><span class = 'four'>4</span><br>
<span class = 'seven'>7</span>*<span class = 'three'>3</span>=<span class = 'two'>2</span><span class = 'one'>1</span><br>
<span class = 'seven'>7</span>*<span class = 'four'>4</span>=<span class = 'two'>2</span><span class = 'eight'>8</span><br>
<span class = 'seven'>7</span>*<span class = 'five'>5</span>=<span class = 'three'>3</span><span class = 'five'>5</span><br>
<span class = 'seven'>7</span>*<span class = 'six'>6</span>=<span class = 'four'>4</span><span class = 'two'>2</span><br>
<span class = 'seven'>7</span>*<span class = 'seven'>7</span>=<span class = 'four'>4</span><span class = 'nine'>9</span><br>
<span class = 'seven'>7</span>*<span class = 'eight'>8</span>=<span class = 'five'>5</span><span class = 'four'>4</span><br>
<span class = 'seven'>7</span>*<span class = 'nine'>9</span>=<span class = 'six'>6</span><span class = 'three'>3</span><br>
<span class = 'seven'>7</span>*<span class = 'one'>1</span><span class = 'zero'>0</span>=<span class = 'seven'>7</span><span class = 'zero'>0</span><br></td>
</td>
<td>
<span class = 'eight'>8</span>*<span class = 'one'>1</span>=<span class = 'eight'>8</span><br>
<span class = 'eight'>8</span>*<span class = 'two'>2</span>=<span class = 'one'>1</span><span class = 'six'>6</span><br>
<span class = 'eight'>8</span>*<span class = 'three'>3</span>=<span class = 'two'>2</span><span class = 'four'>4</span><br>
<span class = 'eight'>8</span>*<span class = 'four'>4</span>=<span class = 'three'>3</span><span class = 'two'>2</span><br>
<span class = 'eight'>8</span>*<span class = 'five'>5</span>=<span class = 'four'>4</span><span class = 'zero'>0</span><br>
<span class = 'eight'>8</span>*<span class = 'six'>6</span>=<span class = 'four'>4</span><span class = 'eight'>8</span><br>
<span class = 'eight'>8</span>*<span class = 'seven'>7</span>=<span class = 'five'>5</span><span class = 'six'>6</span><br>
<span class = 'eight'>8</span>*<span class = 'eight'>8</span>=<span class = 'six'>6</span><span class = 'four'>4</span><br>
<span class = 'eight'>8</span>*<span class = 'nine'>9</span>=<span class = 'seven'>7</span><span class = 'two'>2</span><br>
<span class = 'eight'>8</span>*<span class = 'one'>1</span><span class = 'zero'>0</span>=<span class = 'eight'>8</span><span class = 'zero'>0</span><br></td>
</td>
<td>
<span class = 'nine'>9</span>*<span class = 'one'>1</span>=<span class = 'nine'>9</span><br>
<span class = 'nine'>9</span>*<span class = 'two'>2</span>=<span class = 'one'>1</span><span class = 'eight'>8</span><br>
<span class = 'nine'>9</span>*<span class = 'three'>3</span>=<span class = 'two'>2</span><span class = 'seven'>7</span><br>
<span class = 'nine'>9</span>*<span class = 'four'>4</span>=<span class = 'three'>3</span><span class = 'six'>6</span><br>
<span class = 'nine'>9</span>*<span class = 'five'>5</span>=<span class = 'four'>4</span><span class = 'five'>5</span><br>
<span class = 'nine'>9</span>*<span class = 'six'>6</span>=<span class = 'five'>5</span><span class = 'four'>6</span><br>
<span class = 'nine'>9</span>*<span class = 'seven'>7</span>=<span class = 'six'>6</span><span class = 'three'>3</span><br>
<span class = 'nine'>9</span>*<span class = 'eight'>8</span>=<span class = 'seven'>7</span><span class = 'two'>2</span><br>
<span class = 'nine'>9</span>*<span class = 'nine'>9</span>=<span class = 'eight'>8</span><span class = 'one'>1</span><br>
<span class = 'nine'>9</span>*<span class = 'one'>1</span><span class = 'zero'>0</span>=<span class = 'nine'>9</span><span class = 'zero'>0</span><br></td>
</td>
<td>
<span class = 'one'>1</span><span class = 'zero'>0</span>*<span class = 'one'>1</span>=<span class = 'one'>1</span><span class = 'zero'>0</span><br>
<span class = 'one'>1</span><span class = 'zero'>0</span>*<span class = 'two'>2</span>=<span class = 'two'>2</span><span class = 'zero'>0</span><br>
<span class = 'one'>1</span><span class = 'zero'>0</span>*<span class = 'three'>3</span>=<span class = 'three'>3</span><span class = 'zero'>0</span><br>
<span class = 'one'>1</span><span class = 'zero'>0</span>*<span class = 'four'>4</span>=<span class = 'four'>4</span><span class = 'zero'>0</span><br>
<span class = 'one'>1</span><span class = 'zero'>0</span>*<span class = 'five'>5</span>=<span class = 'five'>5</span><span class = 'zero'>0</span><br>
<span class = 'one'>1</span><span class = 'zero'>0</span>*<span class = 'six'>6</span>=<span class = 'six'>6</span><span class = 'zero'>0</span><br>
<span class = 'one'>1</span><span class = 'zero'>0</span>*<span class = 'seven'>7</span>=<span class = 'seven'>7</span><span class = 'zero'>0</span><br>
<span class = 'one'>1</span><span class = 'zero'>0</span>*<span class = 'eight'>8</span>=<span class = 'eight'>8</span><span class = 'zero'>0</span><br>
<span class = 'one'>1</span><span class = 'zero'>0</span>*<span class = 'nine'>9</span>=<span class = 'nine'>9</span><span class = 'zero'>0</span><br>
<span class = 'one'>1</span><span class = 'zero'>0</span>*<span class = 'one'>1</span><span class = 'zero'>0</span>=<span class = 'one'>1</span><span class = 'zero'>0</span><span class='zero'>0</span><br></td>
</td>
</tr>
";
echo "</table>"
?>
	</section>
<footer>
&copy2021
</footer>
</body>
</html>