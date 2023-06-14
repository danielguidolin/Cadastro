<?php

// Sample file: Never send your credentials to git

// host
$host = 'https://ambiente-php.saveincloud.com/';

// db
$db_name = 'coloque aqui nome do seu banco de dados';
$db_host = 'coloque o host do seu banco';
$db_user = 'coloque aqui seu usuário';
$db_pass = 'coloque aqui sua senha';

try {
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
  throw $th;
}


