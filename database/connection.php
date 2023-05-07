<?php
$serverName = "localhost";
$userName = "root";
$password = "";
/**
 * Should be a valid database name
 */
$databaseName = "clients-crud-php";

try {
    $databaseConnection = new PDO(
        "mysql:host=$serverName; dbname=$databaseName",
        $userName,
        $password
    );

    // Set PDO to throw an exception whenever an error is encountered so it can be handled.
    $databaseConnection->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
} catch (PDOException $error) {
    echo "Connection failed: " . $e->getMessage();
}
