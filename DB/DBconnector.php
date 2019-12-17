<?php

/*
 * Don't use it!
 * This class is broken!
*/
class DBconnector {
    const sql_1 = $lastPostsIdList_1;
    const sql_n = $lastPostsIdList_next;
    $conn;

$q1 = $pdo->query($sql_1);
$q2 = $pdo->query($sql_n);
    public function getInfo()
require_once 'dbconfig.php';
require_once 'queries.php';



$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//getLastPostsIdList



/*
    public function testConnection()
    {
        include_once 'dbconfig.php';
        try {
            global $conn;
            $conn = new PDO("mysql:host= $this->host;dbname=$this->dbname", $this->username,  $this->password);
            echo "Connected to $this->dbname at $this->host successfully.";
        } catch
        (PDOException $pe) {
            die("Could not connect to the database $this->dbname :" . $pe->getMessage());
        }
    }
*/


}