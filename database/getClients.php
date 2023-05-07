<?php
require "connection.php";

try {
    $clientsSelection = $databaseConnection->prepare("SELECT id, name, email, phone, address FROM clients;");
    $clientsSelection->execute();
    $clientsSelection->setFetchMode(PDO::FETCH_ASSOC);
    $selectedClients = $clientsSelection->fetchAll();
    echo "<script> clients = " . json_encode($selectedClients) . ";</script>";
} catch (PDOException $error) {
    echo "Error: " . $error->getMessage();
}
