    <?php
session_start(); 
session_destroy();
$emailValue ="";
$passwordValue ="";
$emailErrorMsg="";
$passwordErrorMsg = ""; 
  
if ( isset($_POST['submit'])){


$emailValue = $_POST['emailName'];
$passwordValue = $_POST['passwordName'];

if(empty($emailValue)){

    $emailErrorMsg= "email must be filled out!";
}else if(empty($passwordValue)){
    $passwordErrorMsg= "password must be filled out!";

}else{


  
    include("Connection.php");

    //create in instance of class Connection
    $connection = new Connection();
  
    //call the selectDatabase method
    $connection->selectDatabase("miniProjet");

    //include the client file
    include("Client.php");


// $row = Client::selectClientByEmail('clients', $connection->conn,$emailValue);
// echo $row['email'];

Client::selectClientByEmail('clients', $connection->conn,$emailValue,$passwordValue);

// if ($row['password']==$passwordValue) {
    
//         header("Location: home.php");
//     } else {
    
//     // Email doesn't exist, redirect to login
//     echo "not found";
// }

// // $emailValue = mysqli_real_escape_string($connection->conn, $_POST['emailName']);
// $sql = "SELECT * FROM clients WHERE email='$emailValue'";
// $result = mysqli_query($connection->conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//   $row = mysqli_fetch_assoc($result);
//   echo "$row[email]";
//   echo "hhhhhh";
//   // if($row['password']==$passwordValue){
//   //   header("Location: home.php");
//   // }
// } 

}}
?>

<!DOCTYPE html>
<html  lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link  rel='stylesheet' href='style1.css'>

<title>Login</title>
</head>

<body>
<div class="menu">
<a class="nmarque"><b>SHOPY SHOP</b></a>
</div>

  <div  class="container" >

<form  method="post">
  <h1>LOGIN</h1>
  <div class="form-group">
    <i class='bx bxs-user'></i>
    <label for="exampleInputEmail1">   Email address</label>
    <input  value="<?php if(isset($emailValue)) echo $emailValue ?>" name="emailName" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
    <span style="color: red;"><?php echo $emailErrorMsg ?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">   Password</label>
    <i class='bx bxs-lock-alt'></i>
    <input  value="<?php if(isset($passwordValue)) echo $passwordValue ?>" name="passwordName" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    
    <span style="color: red;"><?php echo $passwordErrorMsg ?></span>
  </div>

  <button name="submit" type="submit" class="btn ">Login</button>
  
</form>

<button  type="button" onclick="window.location.href ='Signup.php'" class="btn ">Signup</button>
</div>

<div class="footer">

<a href="https://www.instagram.com/nessaiba_hdg/?next=%2F"><b>facebook</b></a> 
<a href="https://www.instagram.com/nessaiba_hdg/?next=%2F"><b>Instagram</b></a>
<a href=""><b>Email:shopyshop@gmail.com</b></a>
<a href=""><b>Tel:0665784321</b></a>      
 

</div>
</body>
</html>