<?php 
        //include connection file
        include("Connection.php");
   

    //create in instance of class Connection
    $connection = new Connection();
  

    //call the selectDatabase method
    $connection->selectDatabase("miniprojet");

        //include the client file
        include("Users.php");

        include("departement.php");   
       

        $users = User::selectAllUsers('users',$connection->conn);
        if(isset($_POST['submit'])){
            $users = user::selectUsersByDeptId('users',$connection->conn,$_POST['departements']); 
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Admin</title>
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
#A2 {
   
   margin-right: 10px;
   background: #FFFAF0;
    color: black;
}
#A3 {
   
   margin-left: 10px;
   background: #FFFAF0;
    color: black;
}
    .nmarque{
    width:70%;
    
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

  h2{
        margin-left:300px;
        margin-top: 20px;
        padding: 0;
        font-size: 36px;
        color: #004040 ;
    }
</style>
</head>

</head>
<body>

  
<div class="menu">
<a id="A3" href="adminHome.php"><b>Home</b></a>
<a class="nmarque"><b>SHOPY SHOP</b></a>
<!-- <a id="A2" href="Signup.php"><b>Sign up</b></a> -->
<a id="A1" href="FirstPage.php"><b>Logout</b></a>

</div>
<div class="container my-5">
    <h2><b>List of users from database</b></h2>
    

    <br>
    <br>
    <form method="post">
        <div class="input-group">
            <span class="input-group-btn" >
                <button class="btn btn-success" type="submit" name="submit">Search</button>
            </span>
            <select name="departements" class="form-select">
                <option selected>Select a Departement</option>
                <?php
                    
                        $Departements=departement::selectAllDepartements('departement',$connection->conn);
                        foreach($Departements as $dpt){
                         echo " <option value='$dpt[id]' >$dpt[firstname]</option> " ; 
                        }
                        ?>
            </select>
        </div>
    </form>
    <table class="table">
       <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Departement Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php


       
        //call the static selectAllClients method and store the result of the method in $clients
      
      
        foreach($users as $row) {
            
            
         
            $Departement=departement::selectDepartementById('departement',$connection->conn,$row['idDept']);
           echo " <tr>
            <td>$row[id]</td>
            <td>$row[email]</td>
            <td>$Departement[firstname]</td>
            <td>
            <a class ='btn btn-success btn-sm' href='update2.php?id=$row[id]'>edit</a>
            <a class ='btn btn-danger btn-sm' href='delete2.php?id=$row[id]'>delete</a>
            </td>
        </tr>";
        }
        
        ?>
        </tbody>
        
    </table>
    </div>

    <div class="footer">

    <a href="https://www.instagram.com/nessaiba_hdg/?next=%2F"><b>facebook</b></a> 
    <a href="https://www.instagram.com/nessaiba_hdg/?next=%2F"><b>Instagram</b></a>
    <a href=""><b>Email:shopyshop@gmail.com</b></a>
    <a href=""><b>Tel:0665784321</b></a>      
     
   
   </div>
</body>
</html>
