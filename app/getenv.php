<?php
$hostname = getenv('MYSQL_DB_HOST');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');
$test = getenv('TEST');
$secret_username = getenv('SECRET_USERNAME');
$secret_password = getenv('SECRET_PASSWORD');

echo 'MYSQL_DB_HOST: '.$hostname.'<br>';
echo 'MYSQL_USER: '.$username.'<br>';
echo 'MYSQL_PASSWORD: '.$password.'<br>';
echo 'MYSQL_DATABASE: '.$dbname.'<br>';
echo 'TEST: '.$test.'<br>';
echo 'SECRET_USERNAME: '.$secret_username.'<br>';
echo 'SECRET_PASSWORD: '.$secret_password.'<br>';
?>