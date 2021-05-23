<?php
include "css.htm";
include "run.php";
include "inc/_RUN_.php";
if ($t <"2") {
    header("Location: ../1/index.php");
}

$dbServ = $_POST['server'];
$dbName = $_POST['fname'];
$dbUser = $_POST['user'];
$dbPass = $_POST['pass'];
mysqli_connect($dbServ, $dbUser,$dbPass, $dbName);
$cfg1 = fopen("cfg/config.inc.php", "r+");
fwrite($cfg1,"<?php");
fwrite($cfg1,"\n");
fwrite($cfg1,"$");
fwrite($cfg1,"dbServ =");
fwrite($cfg1,"'".$_POST['server']."';");
fwrite($cfg1,"\n");
fwrite($cfg1,"$");
fwrite($cfg1,"dbName =");
fwrite($cfg1,"'".$_POST['fname']."';");
fwrite($cfg1,"\n");
fwrite($cfg1,"$");
fwrite($cfg1,"dbUser =");
fwrite($cfg1,"'".$_POST['user']."';");
fwrite($cfg1,"\n");
fwrite($cfg1,"$");
fwrite($cfg1,"dbPass =");
fwrite($cfg1,"'".$_POST['pass']."';");
fwrite($cfg1,"\n");
fwrite($cfg1,'$mysql = mysqli_connect($dbServ, $dbUser,$dbPass, $dbName);');
fwrite($cfg1,"\n");
fwrite($cfg1,"\n");
fwrite($cfg1,"?>");
if (mysqli_connect_errno()) {
    die('<h3>FATAL:setup_failed</h3>');
  }
?>
<form class = "install_forum" id= "64985"
 action=".php" method="post" name="install">
    <input type="submit" name="package" value="finish install" />
    <br>
    <noscript>
    <meta http-equiv="refresh" content="2;url=js.htm" />
</noscript>
</form>