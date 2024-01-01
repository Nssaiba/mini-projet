<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id=$_GET['id'];

    //include connection file
    include("Connection.php");


    //create in instance of class Connection
    $connection = new Connection();
  

    //call the selectDatabase method
    $connection->selectDatabase("miniprojet");

//include client file
include("Users.php");

//call the static deleteClient method
User::deleteUser('users', $connection->conn,$id);
}

?>
