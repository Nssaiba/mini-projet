<?php

//include the connection file
include("Connection.php");

//create an instance of Connection class
$connection = new Connection();

//call the createDatabase methods to create database 
// $connection->createDatabase("miniProjet");
$query0= "
CREATE TABLE cities (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL)";

$query1= "
CREATE TABLE genres (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL)";

$query2 = "
CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50) UNIQUE,
password VARCHAR(80),
idDept INT(6) UNSIGNED NOT NULL,
FOREIGN KEY(idDept) REFERENCES departement(id)
)
";
$query3= "
CREATE TABLE departement (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL)";

$query = "
CREATE TABLE clients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(80),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
idCity INT(6) UNSIGNED NOT NULL,
FOREIGN KEY(idCity) REFERENCES cities(id),
idGenre INT(6) UNSIGNED NOT NULL,
FOREIGN KEY(idGenre) REFERENCES genres(id)
)
";

//call the selectDatabase method to select the chap4Db
$connection->selectDatabase("miniProjet");

//call the createTable method to create table with the $query
// $connection->createTable($query0);
// $connection->createTable($query1);
$connection->createTable($query);
// $connection->createTable($query3);
// $connection->createTable($query2);


//  include("City.php");
// $City1=new City('Casa');
   
// //call the insertCity method

// $City1->insertCity('cities',$connection->conn);

// $City2=new City('Marrakech');

// //call the insertCity method
// $City2->insertCity('cities',$connection->conn);

// $City3=new City('Agadir');

// //call the insertCity method
// $City3->insertCity('cities',$connection->conn);

// include("Genre.php");
// $Genre1=new Genre('Femme');

// //call the insertCity method
// $Genre1->insertGenre('genres',$connection->conn);

// $Genre2=new Genre('Homme');

// //call the insertCity method
// $Genre2->insertGenre('genres',$connection->conn);


// include("departement.php");
// $Dept1=new departement('Devellopement');
// $Dept1->insertDepartement('departement',$connection->conn);

// $Dept2=new departement('Controle de gestion');
// $Dept2->insertDepartement('departement',$connection->conn);

// $Dept3=new departement('Markrting');
// $Dept3->insertDepartement('departement',$connection->conn);



// include("Users.php");
// $user1=new User("Admin1@gmail.com","Admin123",1);
// $user1->insertUsers('users',$connection->conn);

// $user2=new User("Admin2@gmail.com","Admin234",2);
// $user2->insertUsers('users',$connection->conn);

// $user3=new User("Admin3@gmail.com","Admin345",3);
// $user3->insertUsers('users',$connection->conn);

// $user4=new User("Admin4@gmail.com","Admin456",3);
// $user4->insertUsers('users',$connection->conn);



?>
