<?php
//Vul de MySQL gegevens in:
$sUsername = 'd486h3_wouter';
$sDatabase = 'd486h3_drb';
$sPassword = 'idontcare1';
$sHostname =  'mysql.eu.dualdev.com';
$rsConnection = mysql_connect($sHostname, $sUsername, $sPassword) or die("Het is mislukt om verbinding te maken met de MySQL server");
mysql_select_db($sDatabase, $rsConnection) or die("Database niet gevonden");
?>