<?php
require_once("system.php");
?>
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
<div class="header-div">
    <div>
	   <div class='' id='main-div'>
            <ul>
                <li class="">Beszerzési rendszer</li><button onclick="hide('beszerzes')">HIDE</button>
                <div class="invisible plus-div" id='beszerzes'>
                <li class="">\\\Partner beszerzés</li>
                <li class="">\\\\\\\Új készülék</li>
                    <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=tablet">Tablet</a></li>
                    <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=telefon">Telefon</a></li>
                    <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=orakkiegeszitok">Órák + kiegészítők</a></li>
                <li class="">\\\\\\\Beszerzések</li>
                    <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=beszerzesekirodaszerek">Irodaszerek</a></li>
                    <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=beszerzesekkeszlet">Készlet</a></li>
                <li class="">\\\Használt beszerzés</li>
                <li class="">\\\\\\Szervíz Tábla</li>
                    <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=szervizkeszlet">Szervízkészlet</a></li>
                    <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=szerviznaplo">Szervíznapló</a></li>
                    <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=alkatreszkeszlet">Alkatrész készlet</a></li>
                    <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=alkatreszlista">Alkatrész lista</a></li>
                <li class="">\\\\\\Hunting list</li>
                    <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=keresesilista">Keresési lista</a></li>
                    <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=aktualisarak">Aktuális árak</a></li>
                <li class="">\\\\\\Flipping</li>
                <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=forgalom">Forgalom</a></li>
                
                <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=keszlet">Készlet</a></li>
                <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=principles">Principles</a></li>
                
                <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=termek">Termék</a></li>
                <li class="">\\\\\\Beszerzési partner tábla</li>
                <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=potencialis">Poteniális Partner</a></li>
                <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=bevalt">Bevált Partner</a></li>
                </div>
                <li class="">Disztribúciós rendszer</li><button onclick="hide('disztribucios')">HIDE</button>
                <div class="invisible plus-div" id='disztribucios'>
                <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=disztribucois_kiegeszito">Kiegészítő</a></li>
                <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=disztribucois_hasznalt">Használt</a></li>
                <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=disztribucois_partnerkeszulek">Partner Készülék</a></li>
                </div>

                <li class="">Értékesítési rendszer</li><button onclick="hide('ertekesitesi')">HIDE</button>
                <div class="invisible plus-div" id='ertekesitesi'>
                    <li class="">\\\\\\Marketing</li>
                    <li class="right"><a href="http://andrasdev.com/pophone/table.php?table=social">Social</a></li>

                </div>

                <li class="">Logisztikai rendszer</li><button onclick="hide('logisztikai')">HIDE</button>
                <div class="invisible plus-div" id='logisztikai'>
                </div>
                
            </ul>
	   </div>
    </div>
</div>
</html>