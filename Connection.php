<?php

class Connection{

private $servername="localhost";
private $username="root";
private $password="";
public $conn;

public function __construct(){
    // Create connection
    $this->conn = mysqli_connect($this->servername, $this->username, $this->password);

    // Check connection
    if (!$this->conn) {
          die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
}

function createDatabase($dbName){
    // Creating a database with the conn in the class ($this->conn)
    $sql = "CREATE DATABASE $dbName";
    if (mysqli_query($this->conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($this->conn);
    }
}

function selectDatabase($dbName){
    //select database with the conn of the class, using mysqli_select..
    if (mysqli_select_db($this->conn, $dbName)) {
        echo "Database selected successfully";
    } else {
        echo "Error selecting database: " . mysqli_error($this->conn);
    }
}

function createTable($query){
    // Creating a table with the query
    if (mysqli_query($this->conn, $query)) {
        echo "Table Clients created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($this->conn);
    }
}

}

?>