<?php

$host = getenv('DB_HOST');
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

echo "Hello World!";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $user,
        $password
    );

    echo "Connected";

} catch (PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
}



?>