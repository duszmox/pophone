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
        <?php
        echo $_SESSION[SESSION_NAME_PREFIX."username"];
            if($_SESSION[SESSION_NAME_PREFIX."username"] == "username" && $_SESSION[SESSION_NAME_PREFIX."username"] == "admin"){
               echo '<li><a href="http://andrasdev.com/pophone/table.php?table=beszerzesekirodaszerek">JOGOSULTSÁGOK</a></li>
                ';

            }
        ?>
                
                </li>
                 <li class="lista-master"><a href="#">/Partner Beszerzés</a></li>
                 <li><a href="#" class="lista-elem">Új készülék</a></li>
                 <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"keresesilista")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=tablet">Tablet</a></li>';}?>
                 <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"keresesilista")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=orakkiegeszitok">Órák + kiegészítők</a></li>';}?>
                 <li><a href="#" class="lista-elem" >Beszerzések</a></li>
                 <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"keresesilista")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=beszerzesekirodaszerek">Irodaszerek</a></li>';}    ?>
                 <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"keresesilista")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=beszerzesekkeszlet">Készlet</a></li>';}?>
                <li class="lista-master"><a href="#" class="lista-master">/Használt beszerzés</a></li>
                <li class="lista-elem"><a href="#" class="lista-elem">Szervíz Tábla</a></li>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"szervizkeszlet")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=szervizkeszlet">Szervízkészlet</a></li>';}?>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"szerviznaplo")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=szerviznaplo">Szervíznapló</a></li>';}?>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"alkatreszkeszlet")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=alkatreszkeszlet">Alkatrész készlet</a></li>';}?>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"alkatreszlista")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=alkatreszlista">Alkatrész lista</a></li>';}?>
                <li class="lista-elem"><a href="#" class="lista-elem">Hunting list</a></li>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"keresesilista")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=keresesilista">Keresési lista</a></li>';}?>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"aktualisarak")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=aktualisarak">Aktuális árak</a></li>';}?>
                <li><a href="#" class="lista-elem">Flipping</a></li>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"forgalom")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=forgalom">Forgalom</a></li>';}?>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"keszlet")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=keszlet">Készlet</a></li>';}?>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"principles")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=principles">Principles</a></li>';}?>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"termek")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=termek">Termék</a></li>';}?>
                <li class="lista-elem"><a href="#">Beszerzési partner tábla</a></li>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"potencialis")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=potencialis">Poteniális Partner</a></li>';}?>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"bevalt")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=bevalt">Bevált Partner</a></li>';}?>
               
            </ul>
        </li>
        <li class="drop-2"><a href="#">Disztribúciós rendszer</a>
            <ul class="dropdown-2">
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"disztribucoiskiegeszito")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=disztribucoiskiegeszito">Kiegészítő</a></li>';}?>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"disztribucoishasznalt")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=disztribucoishasznalt">Használt</a></li>';}?>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"disztribucoispartnerkeszulek")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=disztribucoispartnerkeszulek">Partner Készülék</a></li>';}?>
            </ul>
        </li>
        <li class="drop-3"><a href="#">Értékesítési rendszer</a>
            <ul class="dropdown-3">
                <li class="lista-elem"><a href="#">Marketing</a></li>
                <?php if(doesHaveAccess($_SESSION[SESSION_NAME_PREFIX.'username'],"social")){echo '<li><a href="http://andrasdev.com/pophone/table.php?table=social">Social</a></li>';}?>
            </ul>
        </li>

        <li class="drop-4"><a href="#">Logisztikai Rendszer</a>
            <ul class="dropdown-4">

            </ul>
        </li>

        

        <?php
        echo $_SESSION[SESSION_NAME_PREFIX."username"];
        if($_SESSION[SESSION_NAME_PREFIX."logged_in"] = true)
                    {
             echo '<li><a href="http://andrasdev.com/pophone/login/logout.php">Log Out</a></li>';
            
            } 
        else {
 echo '<li><a href="http://andrasdev.com/pophone/login/login.php">Log In</a></li>';
                        }
        ?>
    </ul>
</nav>
 
<script src="header.js"></script>
</html>

