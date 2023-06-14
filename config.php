<?php

// Sample file: Never send your credentials to git

// host
$host = 'https://ambiente-php.saveincloud.com/';

// db
$db_name = 'cadastro';
$db_host = '10.100.38.18';
$db_user = 'admin-9259900';
$db_pass = 'oLXO1ViQe8';

try {
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
  throw $th;
}


