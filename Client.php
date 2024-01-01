<?php

class Client{

public $id;
public $firstname;
public $lastname;
public $email;
public $password;
public $reg_date; 
public $idCity;
public $idGenre;

public static $errorMsg = "";

public static $successMsg="";


public function __construct($firstname, $lastname, $email, $password,$idCity,$idGenre) {
    // Initialize the attributes of the class with the parameters, and hash the password
    
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->password = $password;
    $this->idCity=$idCity;
    $this->idGenre=$idGenre;
}

public function insertClient($tableName,$conn){

//insert a client in the database, and give a message to $successMsg and $errorMsg
$sql="INSERT INTO $tableName (firstname,lastname,email,password,idCity,idGenre)
VALUES ('$this->firstname', '$this->lastname','$this->email','$this->password','$this->idCity','$this->idGenre')";

 if (mysqli_query($conn, $sql)) {
    self::$successMsg = "Client inserted successfully";
} else {
    self::$errorMsg = "Error inserting client: " . "<br>" . mysqli_error($conn);
}
    

}

public static function  selectAllClients($tableName,$conn){

//select all the client from database, and inset the rows results in an array $data[]
$query = "SELECT * FROM $tableName";
$result = mysqli_query($conn, $query);

$data = array();//ou $data = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}

return $data;

}

static function selectClientById($tableName,$conn,$id){
    //select a client by id, and return the row result
    $query = "SELECT * FROM $tableName WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return null;
    }

    
}



static function selectClientByEmail($tableName,$conn,$email,$passwordValue){
    //select a client by email, and return the row result
    $query = "SELECT * FROM $tableName WHERE email = '$email' AND  password='$passwordValue'";
    // echo "Query: $query"; 
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["emailsession"]=$email;
        $_SESSION["passwordsession"]=$passwordValue;
        header("Location: home.php");
        // die("ok");
         return $row; 
        }
        // die("no");
        header("Location: Login.php");
    
}



static function updateClient($client,$tableName,$conn,$id){
    //update a client of $id, with the values of $client in parameter
    //and send the user to read.php
    
    $query = "UPDATE $tableName SET firstname = '$client->firstname', lastname = '$client->lastname', email = '$client->email', password = '$client->password',idCity='$client->idCity',idGenre='$client->idGenre' WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        header("Location: Read.php");
        exit;
    } else {
        self::$errorMsg = "Error updating client: " . mysqli_error($conn);
    }
}



static function deleteClient($tableName,$conn,$id){
    //delet a client by his id, and send the user to read.php
    $sql = "DELETE FROM $tableName WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: Read.php");
        exit;
    } else {
        self::$errorMsg = "Error deleting client: " . mysqli_error($conn);
    }
}



public static function selectClientByCityId($tableName,$conn,$id){

    //select all the client from database, and inset the rows results in an array $data[]
    $query = "SELECT id,firstname,lastname,email,idCity,idGenre FROM $tableName Where idCity='$id'";
    $result = mysqli_query($conn, $query);
    
    $data = array();//ou $data = [];
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    
    return $data;
    
    }
}

?>
