<?php
ob_start();

$pageStart = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MY WEBSITE PAGE</title>
</head>
<body>
<h1>Rozwijane Menu</h1>

<nav class="nav">
	<ul>
		<li><a href="#">Start</a>
    <li><a href="#">O nas</a>
		<li class="drop"><a href="#">Oferta</a>
			<ul class="dropdown">
				<li><a href="#">Oferta 01</a></li>
				<li><a href="#">Oferta 02</a></li>
				<li><a href="#">Oferta 03</a></li>
			</ul>
		</li>
		<li><a href="#">Aktualności</a>
		<li><a href="#">Kontakt</a>
	</ul>
</nav>

<footer>
    <p class="main">
        2017 © nayma.pl | Wszystkie prawa zastrzeżone | Design by <a href="https://nayma.pl" target="_blank">nayma.pl</a>
    </p>
</footer>
</body>
</html>
';

echo $pageStart;
exit;
?>
