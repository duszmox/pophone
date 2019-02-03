<?php
require_once("connect.php");
$sql ="CREATE TABLE pophone_szervizkeszlet (
	id int NOT NULL AUTO_INCREMENT,
	Szervízrekerülés dátuma varchar(255),
	Készülék ID varchar(255),
	Hibaleírás varchar(255),
	Javítás szükséglet varchar(255)

);

CREATE TABLE pophone_szerviznaplo (
	id int NOT NULL AUTO_INCREMENT,
	Szervizelés dátuma varchar(255),
	Szervizelt készülék ID varchar(255),
	Hibaleírás varchar(255),
	Felhasznált alkatrészek varchar(255),
	Javítással eltöltött idő varchar(255)
);";
//mysqli_query($db_conn, $sql);
?>