<?php

$emailValue = "";
$lnameValue = "";
$fnameValue = "";

$errorMesage = "";
$successMesage = "";
$tableName="clients";
    //include connection file
    include("Connection.php");
   

    //create in instance of class Connection
    $connection = new Connection();
  

    //call the selectDatabase method
    $connection->selectDatabase("miniprojet");

    //include the client file
    include("Client.php");

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id = $_GET['id'];

//call the staticbselectClientById method and store the result of the method in $row
 $row=Client::selectClientById('clients',$connection->conn, $id);

$emailValue = $row["email"];
$lnameValue = $row["lastname"];
$fnameValue = $row["firstname"];
$idCityValue= $row["idCity"];
$idGenreValue= $row["idGenre"];
$password= $row["password"];

}

else if(isset($_POST["submit"])){

    $emailValue = $_POST["email"];
    $lnameValue = $_POST["lastName"];
    $fnameValue = $_POST["firstName"];
    $idCityValue= $_POST["cities"];
    $idGenreValue= $_POST["genres"];
    $password= $_POST["password"];

    if(empty($emailValue) || empty($fnameValue) || empty($lnameValue) ){

            $errorMesage = "all fileds must be filed out!";

    }else{

        
        //create a new instance of client ($client) with inputs values
        $client = new Client($fnameValue, $lnameValue, $emailValue,$password,$idCityValue,$idGenreValue);

        //call the static updateClient method and give $client in the parameters
        $success = Client::updateClient($client,'clients',$connection->conn, $_GET['id']);

        if ($success) {
            $successMesage = "Client updated successfully!";
        } else {
            $errorMesage = "Failed to update client.";
        }
            
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
   body {margin:0;
        font-family: Arial, Helvetica, sans-serif;
    }

        
.menu {
    overflow: hidden;
    background-color: #2F4F4F;
    color:white;
    position: fixed;
    top: 0;
    width: 100%;
    height: 50px;
    margin: 0;
    padding: 0;
    z-index: 1;
  }
  .menu a {
    float: left;
    display: block;
    color:white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  .menu a:hover {
    background-color: #2F4F4F;
    color:white;
  }

    #A1 {
   float: right;
   margin-right: 10px;
   background: #FFFAF0;
    color: black;
}

    .nmarque{
    width:90%;
    
   }
.footer {
    overflow: hidden;
    background-color: #2F4F4F;
    color:white;
    position: fixed;
    bottom: 0;
    width: 100%;
    margin: 0;
    padding: 0;
    z-index: 1;
  }
  .footer a {
    float: left;
    display: block;
    color: #fcfbfb;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    width:360px;
  }
  
  .footer a:hover {
    background: #FFFAF0;
    color: black;
  }

.btn-hover.color-8 {
    background-image: linear-gradient(to right, #29323c, #485563, #2b5876, #4e4376);
    box-shadow: 0 4px 15px 0 rgba(45, 54, 65, 0.75);
}
.btn-hover:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}
.btn-hover {
   
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 55px;
    text-align:center;
    border: none;
    background-size: 300% 100%;

    border-radius: 50px;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}
 h2{
        margin-left:300px;
        margin-top: 20px;
        padding: 0;
        font-size: 36px;
        color: #004040 ;
    }
   .signup{
    position: relative;
        
    border: 2px solid black;
  border-radius: 5px;
   }
</style>

</head>
<body>
<div class="menu">

<a class="nmarque"><b>SHOPY SHOP</b></a>

<a id="A1" href="Login.php"><b>Logout</b></a>

</div>
<br><br><br>
    <div class="container my-5 ">

        <h2><b>Update</b></h2>

    <?php

    if(!empty($errorMesage)){
  echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>$errorMesage</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
  </button>
  </div>";
    }
       ?>

        <br>
        <form method="post">
            <div class="row mb-3">
                    <label class="col-form-label col-sm-1" for="fname">First Name:</label>
                    <div class="col-sm-6">
                        <input value="<?php echo $fnameValue ?>" class="form-control" type="text" id="fname" name="firstName">
                    </div>
            </div>
            <div class="row mb-3">
                    <label class="col-form-label col-sm-1" for="lname">Last Name:</label>
                    <div class="col-sm-6">
                        <input  value="<?php echo $lnameValue ?>" class="form-control" type="text" id="lname" name="lastName">
                    </div>
            </div>
            <div class="row mb-3 ">
                    <label class="col-form-label col-sm-1" for="email">Email:</label>
                    <div class="col-sm-6">
                        <input value=" <?php echo $emailValue ?>" class="form-control" type="email" id="email" name="email">
                    </div>
            </div>
            <div class="row mb-3 ">
                    <label class="col-form-label col-sm-1" for="cities">City:</label>
                    <div class="col-sm-6">
                     <select name="cities" class="form-select">
                        <option selected>Select your city</option>
                        <?php
                            //    include("Connection.php");
   

                            //    //create in instance of class Connection
                            //    $connection = new Connection();
                             
                           
                            //    //call the selectDatabase method
                            //    $connection->selectDatabase("miniProjet");
                        include("City.php");
                        $cities=City::selectAllCities('cities',$connection->conn);
                        foreach($cities as $city){
                         echo " <option value='$city[id]' >$city[firstname]</option> " ; 
                        }
                        ?>
                     </select>   
                    </div>
            </div>
            <div class="row mb-3 ">
                    <label class="col-form-label col-sm-1" for="genres">Genre:</label>
                    <div class="col-sm-6">
                     <select name="genres" class="form-select">
                        <option selected>Select your Genre</option>
                        <?php
                              
                        include("Genre.php");
                        $genres=Genre::selectAllGenres('genres ',$connection->conn);
                        foreach($genres as $genr){
                         echo " <option value='$genr[id]' >$genr[firstname]</option> " ; 
                        }
                        ?>
                     </select>   
                    </div>
            </div>
            
            <div class="row mb-3 ">
                    <label class="col-form-label col-sm-1" for="password">Password:</label>
                    <div class="col-sm-6">
                        <input  class="form-control" type="password" id="password" name="password" >
                    </div>
            </div>
            <?php
            if(!empty($successMesage)){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>$successMesage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
            }
  ?>  
      

            <div class="row mb-3">
                    <div class="offset-sm-1 col-sm-3 d-grid">
                        <button name="submit" type="submit" class="btn btn-hover color-8">Update</button>
                    </div>
                    <div class="col-sm-1 col-sm-3 d-grid">
                        <a class="btn btn-hover color-8" href="read.php">Cancel</a>
                    </div>
            </div>
        </form>

    </div>
    <div class="footer">

<a href="https://www.instagram.com/nessaiba_hdg/?next=%2F"><b>facebook</b></a> 
<a href="https://www.instagram.com/nessaiba_hdg/?next=%2F"><b>Instagram</b></a>
<a href=""><b>Email:shopyshop@gmail.com</b></a>
<a href=""><b>Tel:0665784321</b></a>      
 

</div>

</body>
</html>
