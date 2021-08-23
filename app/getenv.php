<?php
$hostname = getenv('MYSQL_DB_HOST');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

echo 'MYSQL_DB_HOST: '.$hostname.'<br>';
echo 'MYSQL_USER: '.$username.'<br>';
echo 'MYSQL_PASSWORD: '.$password.'<br>';
echo 'MYSQL_DATABASE: '.$dbname.'<br>';
?>