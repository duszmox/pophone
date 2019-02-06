<?php
require_once("system.php");

?>
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script>

<script type="text/javascript">
    function hide(type){
            if(document.getElementById(type).classList.contains('invisible')){

                document.getElementById(type).classList.remove('invisible');
            }else{
                document.getElementById(type).classList.add('invisible');
            }

        
    }
</script>
<html>
<nav class="nav">
	<ul>
		<li class="drop"><a href="#">Beszerzési rendszer</a>
			<ul class="dropdown">
				<li><a class="lista-master">Partner beszerzés</a></li>
				<li><a href="#" class="lista-elem">Új készülék</a></li>
				<li><a href="http://andrasdev.com/pophone/table.php?table=tablet">Tablet</a></li>
				<li><a href="http://andrasdev.com/pophone/table.php?table=orakkiegeszitok">Órák + kiegészítők</a></li>
				<li><a href="#" class="lista-elem" >Beszerzések</a></li>
				<li><a href="http://andrasdev.com/pophone/table.php?table=beszerzesekirodaszerek">Irodaszerek</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=beszerzesekkeszlet">Készlet</a></li>
                <li class="lista-master"><a href="#" class="lista-master">Használt beszerzés</a></li>
                <li class="lista-elem"><a href="#" class="lista-elem">Szervíz Tábla</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=szervizkeszlet">Szervízkészlet</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=szerviznaplo">Szervíznapló</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=alkatreszkeszlet">Alkatrész készlet</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=alkatreszlista">Alkatrész lista</a></li>
                <li class="lista-elem"><a href="#" class="lista-elem">Hunting list</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=keresesilista">Keresési lista</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=aktualisarak">Aktuális árak</a></li>
                <li><a href="#" class="lista-elem">Flipping</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=forgalom">Forgalom</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=keszlet">Készlet</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=principles">Principles</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=termek">Termék</a></li>
                <li class="lista-elem"><a href="#">Beszerzési partner tábla</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=potencialis">Poteniális Partner</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=bevalt">Bevált Partner</a></li>

			</ul>
		</li>
		<li class="drop-2"><a href="#">Disztribúciós rendszer</a>
			<ul class="dropdown-2">
				<li><a href="http://andrasdev.com/pophone/table.php?table=disztribucois_kiegeszito">Kiegészítő</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=disztribucois_hasznalt">Használt</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=disztribucois_partnerkeszulek">Partner Készülék</a></li>
			</ul>
		</li>
		<li class="drop-3"><a href="#">Értékesítési rendszer</a>
			<ul class="dropdown-3">
				<li class="lista-elem"><a href="#">Marketing</a></li>
                <li><a href="http://andrasdev.com/pophone/table.php?table=social">Social</a></li>
			</ul>
		</li>

		<li class="drop-4"><a href="#">Logisztikai Rendszer</a>
			<ul class="dropdown-4">
				
			</ul>
		</li>

	</ul>
</nav>
 
<script src="header.js"></script>
</html>

