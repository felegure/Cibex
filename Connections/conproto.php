<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conproto = "localhost";
$database_conproto = "cibase";
$username_conproto = "";
$password_conproto = "";
// J'ai enlevé les mots de passe pour question de sécurité
$conproto = mysql_pconnect($hostname_conproto, $username_conproto, $password_conproto) or die(mysql_error());
?>