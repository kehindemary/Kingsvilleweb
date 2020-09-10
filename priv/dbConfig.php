<?php
$path = filter_input(INPUT_SERVER,'DOCUMENT_ROOT');
$path .= "/backend-files/KINGSVILLEWEB/src/priv/config.ini"; 
$config = parse_ini_file($path);
$username = $config["username"];
$password = $config["password"];
$dsn = "mysql:host=".$config["host"].";dbname=".$config["dbname"];