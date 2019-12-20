<?php
namespace DB;

class DBconn {
    private $conn;
    private $host = 'localhost';
    private $dbname = 'DB1';
    private $username = 'root';
    private $password = 'root';

    public $dsn = "mysql:host='localhost';dbname='DB1,'root',root'";

    public function getConn(){
        if (!isset($this->conn))
            $this->conn = new \PDO($this->dsn);
        return $this->conn;
    }
    public function closeConn(){
        $this->conn = null;
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



