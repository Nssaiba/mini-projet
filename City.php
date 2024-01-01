<?php

class City{

public $id;
public $name;


public static $errorMsg = "";

public static $successMsg="";


public function __construct($name) {
    // Initialize the attributes of the class with the parameters, and hash the password   
    $this->name = $name;
 
}

public function insertCity($tableName,$conn){

//insert a client in the database, and give a message to $successMsg and $errorMsg
$sql="INSERT INTO $tableName (firstname)
VALUES ('$this->name')";

 if (mysqli_query($conn, $sql)) {
    self::$successMsg = "City inserted successfully";
} else {
    self::$errorMsg = "Error inserting city: " . "<br>" . mysqli_error($conn);
}
    

}

public static function  selectAllCities($tableName,$conn){

    //select all the client from database, and inset the rows results in an array $data[]
    $query = "SELECT id, firstname FROM $tableName";
    $result = mysqli_query($conn, $query);
    
    $data = array();//ou $data = [];
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    
    return $data;
    
    }
    Public static function selectCityById($tableName,$conn,$id){
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
}