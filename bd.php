<?php
$enlace =  mysql_connect('am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'uqiu9aj1u97yhlc2', 'pieho2sbx0bmh0rv');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
?>