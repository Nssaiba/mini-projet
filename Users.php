<?php

class User{

public $id;

public $email;
public $password;
public $idDept;

public static $errorMsg = "";

public static $successMsg="";


public function __construct($email, $password,$idDept) {
    // Initialize the attributes of the class with the parameters, and hash the password
    

    $this->email = $email;
    $this->password = $password;
 
    $this->idDept=$idDept;
}

public function insertUsers($tableName,$conn){

//insert a client in the database, and give a message to $successMsg and $errorMsg
$sql="INSERT INTO $tableName (email,password,idDept)
VALUES ('$this->email','$this->password','$this->idDept')";

 if (mysqli_query($conn, $sql)) {
    self::$successMsg = "Client inserted successfully";
} else {
    self::$errorMsg = "Error inserting client: " . "<br>" . mysqli_error($conn);
}
    

}

public static function  selectAllUsers($tableName,$conn){

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

static function selectUserById($tableName,$conn,$id){
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



static function selectUserByEmail($tableName,$conn,$email){
    //select a client by email, and return the row result
    $query = "SELECT * FROM $tableName WHERE email = '$email'";
    echo "Query: $query"; 
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return null;
    }

    
}



static function updateUser($User,$tableName,$conn,$id){
    //update a user of $id, with the values of $user in parameter
    //and send the user to UserInfo.php
    
    $query = "UPDATE $tableName SET email = '$User->email', password = '$User->password',idDept='$User->idDept' WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        header("Location:UserInfo.php");
        exit;
    } else {
        self::$errorMsg = "Error updating user: " . mysqli_error($conn);
    }
}



static function deleteUser($tableName,$conn,$id){
    //delet a user by his id, and send the user to read.php
    $sql = "DELETE FROM $tableName WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: UserInfo.php");
        exit;
    } else {
        self::$errorMsg = "Error deleting user: " . mysqli_error($conn);
    }
}



public static function selectUsersByDeptId($tableName,$conn,$id){

    //select all the client from database, and inset the rows results in an array $data[]
    $query = "SELECT id,email,idDept FROM $tableName Where idDept='$id'";
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
