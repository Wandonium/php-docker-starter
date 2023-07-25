<?php
$pdo = new PDO('mysql:dbname=my_db;host=mysql', 'db_user', 'db_user@123', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];