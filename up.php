
<?php
include 'connect.php';
//Controleer of de gebruiker heeft geklikt op de knop
if(isset($_POST['sBody'],$_POST['submit']))
{
    //Verwijder spaties aan het begin en aan het einde
    $sBody = trim($_POST['sBody']);  
        $changer = $_GET['tochange'];
   if($changer < 2)
   {
       $sTitel = trim($_POST['sTitel']);
        $sSQL = "INSERT INTO `tblMessages` (`sBody`, `sTitel`, `page`, `createdate`) VALUES  ('" . mysql_real_escape_string($sBody) .   "', '" .  mysql_real_escape_string($sTitel)."', '" .  mysql_real_escape_string($_POST['page']). "','" . date("Y-m-d") . "');";
        mysql_query($sSQL);
   }
   else
   {
  $sSQL =  "UPDATE `tblMessages` SET `sBody` = '". mysql_real_escape_string($sBody) ."', `page` = '" .mysql_real_escape_string($_POST['page']). "' WHERE `tblMessages`.`iID` =".$changer ;  
           mysql_query($sSQL);
       header('location: loginsucces.php?tochange=1');
   }
}
?>