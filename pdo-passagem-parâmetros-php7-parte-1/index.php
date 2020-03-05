<?php

$connection = new PDO("mysql:dbname=hcode_pdo;host=127.0.0.1", "root", "root");

$statemet = $connection->prepare("INSERT INTO table_users (nameUser, emailUser) VALUES(:userName, :userEmail)");

$name = "Marcus Vinicius";
$email = "marcus@hcode.com.br";

$statemet->bindParam(':userName', $name);
$statemet->bindParam(':userEmail', $email);

$statemet->execute();

echo "Dados inseridos!";