<?php

$emailValue ="";
$passwordValue ="";
$emailErrorMsg="";
$passwordErrorMsg = ""; 
  
if ( isset($_POST['submit'])){


$emailValue = $_POST['emailName'];
$passwordValue = $_POST['passwordName'];

if(empty($emailValue)){

    $emailErrorMsg= "email must be filled out!";
}else if(preg_match("/^[a-z]+@gmail.com$/", $emailValue)==0){

    $emailErrorMsg= "please enter a valid  email!";

}if(empty($passwordValue)){
    $passwordErrorMsg= "password must be filled out!";

}else{

    include("Connection.php");

    //create in instance of class Connection
    $connection = new Connection();
  
    //call the selectDatabase method
    $connection->selectDatabase("miniProjet");

    //include the users file
    include("Users.php");




$sql = "SELECT * FROM users WHERE email='$emailValue' AND  password='$passwordValue'";
$result = mysqli_query($connection->conn, $sql);
if (mysqli_num_rows($result) > 0) {
    header("Location: adminHome.php");
} else {
    header("Location: AdminPage.php");
   
    
}

}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
   body {margin:0;
        font-family: Arial, Helvetica, sans-serif;
        background-color:#C0C0C0;
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


    .nmarque{
    width:100%;
    
   }

   .menu1 {
    overflow: hidden;
    display:inline-block;
    background-color: #f1f1f1;
    color: black;
    top:50px ;
    width: 100%;
    height: 40px;
    margin:0;
    padding: 1% 1%; 
    float: left;
 
  text-align: center;
    z-index: 1;
  }

.menu1 a{
color: black;
width: 100%;
height: 100%;
margin: 40px;
}
.menu1 a:hover { 
  background-color: #C0C0C0;
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
    </style>
</head>
<body>
<div class="menu">

<a class="nmarque"><b>SHOPY SHOP</b></a>

</div>

<section class="vh-100" style=" background-color:#e3dac9;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://images.template.net/205771/online-clothing-store-flyer-template-edit-online.jpg"
                alt="login form" class="img-fluid"  style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

      <form method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Shopy Shop</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example17">Email address</label>
                    <input name="emailName" type="email" id="form2Example17" class="form-control form-control-lg" />
                    <span style="color: red;"><?php echo $emailErrorMsg ?></span>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Password</label>
                    <input name="passwordName" type="password" id="form2Example27" class="form-control form-control-lg" />
                    <span style="color: red;"><?php echo $passwordErrorMsg ?></span>
                  </div>

                  <div class="pt-1 mb-4 ">
                    <button class="btn btn-dark btn-lg btn-block col-sm-12" name="submit" type="submit">Login</button>
                  </div>

                 

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="footer">

    <a href="https://www.instagram.com/nessaiba_hdg/?next=%2F"><b>facebook</b></a> 
    <a href="https://www.instagram.com/nessaiba_hdg/?next=%2F"><b>Instagram</b></a>
    <a href=""><b>Email:shopyshop@gmail.com</b></a>
    <a href=""><b>Tel:0665784321</b></a>      
     
   
   </div>
</body>
</html>