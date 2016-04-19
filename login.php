<?php
include 'connect.php';
function SignIn()
{   
      session_start();
if(!empty($_POST['user']))   
{
    $uName = preg_replace('/[^\p{L}\p{N}\s]/u', '', $_POST['user']);
    $uPass = preg_replace('/[^\p{L}\p{N}\s]/u', '', $_POST['pass']);
	$query = mysql_query("SELECT *  FROM Users where Naam = '" . mysql_real_escape_string($uName)  . "' AND Password = '" . mysql_real_escape_string($uPass ). "'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['Naam']) AND !empty($row['Password']))
	{
        $_SESSION['logged_in'] = "1"; 
        $_SESSION['gebruiker'] = $row['Naam'];   
       header("location:menu.php");
	}
}
}
if(isset($_POST['submit']))
{
    SignIn();
} 
?>
