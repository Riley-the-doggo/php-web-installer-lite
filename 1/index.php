<?php
include "inc/_RUN_.php";
if ($t <"2") {
    header("Location: pac.php");
}

?>
<html>
<?php
include "css.htm";
?>
<form id="64985"action="Input.php" method="post" name="install">
   <input  type="text" name="fname" id="db_name" value="db name">
   <br>
   <br>
   <input type="text" name="user" id="db_usr" value="db user">
   <br>
   <br>
   <input type="text" name="server" id="db_serv" value="db server">
   <br>
   <br>
   <input type="text" name="pass" id="db_pwd" value="db password">
   <br>
   <br>
    <input type="submit" name="package" value="install" />
    <br>
    <noscript>
    <meta http-equiv="refresh" content="2;url=js.htm" />
</noscript>
</form>
<br>
<br>
<p>php web installer lite edition</p>
<p>php website installer © 2021-<?php echo date("Y");?></p>
<html>