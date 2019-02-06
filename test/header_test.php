<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>header_text</title>
</head>
<body>
<h1>Rozwijane Menu</h1>

<nav class="nav">
	<ul>
		<li><a href="#">Start</a>
    <li><a href="#">O nas</a>
		<li class="drop"><a href="#">Oferta</a>
			<ul class="dropdown">
				<li><a href="#">Vmi</a></li>
				<li><a href="#">Oferta 02</a></li>
				<li><a href="#">Oferta 03</a></li>
			</ul>
		</li>
		<li><a href="#">Aktualności</a>
		<li><a href="#">Kontakt</a>
	</ul>
</nav>


</body>
<style>

@import url(https://fonts.googleapis.com/css?family=Montserrat:300&subset=latin-ext);

body {
-moz-osx-font-smoothing:grayscale;
-ms-flex-direction:column;
-webkit-box-direction:normal;
-webkit-box-orient:vertical;
-webkit-font-smoothing:antialiased;
background:#f5f5f5;
color:#777;
display:flex;
flex-direction:column;
font-family:Montserrat, sans-serif;
font-size: 1em;
font-weight:300;
margin:0;
min-height:100vh;
padding:5%;
}

h1 {
	font-weight: 200;
	font-size: 2.2rem;
	color: #222;
	text-align: center;
}

nav {
	margin: 0 auto;
	max-width: 800px;
	background: #008FEA;
	box-shadow:0 3px 15px rgba(0,0,0,.15);
}

nav::after {
	display: block;
	content: '';
	clear: both;
}

nav ul {
	padding: 0;
	margin: 0;
	list-style: none;
}

nav ul li {
	float: left;
	position: relative;
}

nav ul li a {
	display: block;
	color: rgba(255, 255, 255, .9);
	text-decoration: none;
	padding: 1rem 2rem;
	border-top: 2px solid transparent;
	border-bottom: 2px solid transparent;
	transition: all .3s ease-in-out;
}

nav ul li a:hover,
nav ul li a:focus {
	background: rgba(0, 0, 0, .15);
}

nav ul li a:focus {
	color: white;
}

nav ul li a:not(:only-child)::after {
	padding-left: 4px;
	content: ' ▾';
}

nav ul li ul li {
	min-width: 190px;
}

nav ul li ul li a {
	background: transparent;
	color: #555;
	border-bottom: 1px solid #DDE0E7;
}

nav ul li ul li a:hover,
nav ul li ul li a:focus {
	background: #eee;
	color: #111;
}

.dropdown {
	display: none;
	position: absolute;
	background: #fff;
	box-shadow: 0 4px 10px rgba(10, 20, 30, .4);
}


footer {
color: #555;
font-size:12px;
margin-top:5em;
text-align:center;
}

footer a {
color:#008FEA;
text-decoration:none;
}</style>

</html>

 ?>