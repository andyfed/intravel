<?php
namespace DB;

class DbConnect {
    private $conn;
    private $host = 'localhost';
    private $dbname = 'DB1';
    private $username = 'root';
    private $password = 'root';

    public function getConn(){
        if (!isset($this->conn))
            $this->conn = new \mysqli("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        return $this->conn;
    }


}
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



