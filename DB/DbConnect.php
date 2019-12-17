<?php

include_once 'dbconfig.php';
include_once 'queries.php';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

/*
$sql_1 = $lastPostsIdList_1;
$sql_n = $lastPostsIdList_next;
*/

/* getLastPostsIdList
$q1 = $pdo->query($sql_1);
$q2 = $pdo->query($sql_n);
*/

/* connection test
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
*/



