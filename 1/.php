<?php
$cfg2 = fopen("inc/_RUN_.php", "r+");
fwrite($cfg2,"<?php");
fwrite($cfg2,"\n");
fwrite($cfg2,"$");
fwrite($cfg2,'t = "1";');
fwrite($cfg2,"\n");
fwrite($cfg2,"?>");
header('Location: index.php');
?>