<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conproto = "localhost";
$database_conproto = "cibase";
$username_conproto = "cibase";
$password_conproto = "fnz@cibase";
// J'ai enlevé les mots de passe pour question de sécurité
// modification du 06/06/2019  nouveaux username et mot de passe ajouté
$conproto = mysql_pconnect($hostname_conproto, $username_conproto, $password_conproto) or die(mysql_error());
?>