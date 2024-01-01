<?php
  include("Connection.php");
   

  //create in instance of class Connection
  $connection = new Connection();


  //call the selectDatabase method
  $connection->selectDatabase("miniProjet");

$emailValue = "";
$lnameValue = "";
$fnameValue = "";
$idCityValue= "";
$idGenreValue="";
$passwordValue = "";

$errorMesage = "";
$successMessage = "";

if(isset($_POST["submit"])){

    $emailValue = $_POST["email"];
    $lnameValue = $_POST["lastName"];
    $fnameValue = $_POST["firstName"];
    $passwordValue = $_POST["password"];
    $idCityValue= $_POST["cities"];
    $idGenreValue= $_POST["genres"];

    if(empty($emailValue) || empty($fnameValue) || empty($lnameValue) || empty($passwordValue)){

            $errorMesage = "all fileds must be filed out!";

    }else if(strlen($passwordValue) < 8 ){
        $errorMesage = "password must contains at least 8 char";
    }else if(preg_match("/[A-Z]+/", $passwordValue)==0){
        $errorMesage = "password must contains  at least one capital letter!";
    }else{
    
    //     //include connection file
    //     include("Connection.php");
   

    // //create in instance of class Connection
    // $connection = new Connection();
  

    // //call the selectDatabase method
    // $connection->selectDatabase("miniProjet");
   
    
    //include the client file
    include("Client.php");

    //create new instance of client class with the values of the inputs

    $client2=new Client($fnameValue,$lnameValue,$emailValue,$passwordValue,$idCityValue,$idGenreValue);
   
    

//call the insertClient method

$client2->insertClient('clients',$connection->conn);


//give the $successMesage the value of the static $successMsg of the class
$successMessage = Client::$successMsg;

//give the $errorMesage the value of the static $errorMsg of the class
$errorMesage = Client::$errorMsg;

$emailValue = "";
$lnameValue = "";
$fnameValue = ""; 
$idCityValue= "";
$idGenreValue="";
$passwordValue = "";  
      
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link  rel='stylesheet' href='style2.css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
   body {margin:0;
        font-family: Arial, Helvetica, sans-serif;
        background-image:url(https://files.123freevectors.com/wp-content/solidbackground/wistful-beige-free-solidcolor-background.jpg);
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
  .btn-hover.color-7 {
    background-image: linear-gradient(to right, #6253e1, #852D91, #A3A1FF, #F24645);
    box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);
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

<a id="A1" href="Login.php"><b>Login</b></a>

</div>
<br><br><br>
<div class="signup">
    <div  class="container my-5 " >

        <h2><b>SIGN UP</b></h2>

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
<br>
            <?php
             
             if (!empty($successMessage)) {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                </button>
                </div>";
            }
            

  ?>  
      
            <div class="row mb-3">
                    <div class="offset-sm-1 col-sm-6 d-grid">
                        <button name="submit" type="submit" class="btn btn-hover color-8">Sign up</button>
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
</div>
</body>
</html>
