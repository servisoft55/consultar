<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_repositorio = "localhost";
$database_repositorio = "repositorio";
$username_repositorio = "root";
$password_repositorio = "";
$repositorio = mysql_pconnect($hostname_repositorio, $username_repositorio, $password_repositorio) or trigger_error(mysql_error(),E_USER_ERROR); 
?>