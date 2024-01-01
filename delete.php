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
include("Client.php");

//call the static deleteClient method
Client::deleteClient('Clients', $connection->conn,$id);
}

?>
