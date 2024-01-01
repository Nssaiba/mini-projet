<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
   body {margin:0;
        font-family: Arial, Helvetica, sans-serif;
        background-color:#e5ccc9 ;
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
h1{
  color:black;
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
    /* font-weight: 600px; */
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 55px;
    width:550px;
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

    .vl {
  border-left: 6px solid green;
  height: 500px;
}
.espace{
    margin-left:150px;
}
</style>
</head>
<body>
  
<div class="menu">

<a class="nmarque"><b>SHOPY SHOP</b></a>
<a id="A1" href="FirstPage.php"><b>Logout</b></a>

</div>

<img src="https://img.freepik.com/vecteurs-libre/tete-twitter-modele-boutique-minimal-conception-plate_23-2149353661.jpg?w=1380&t=st=1703728873~exp=1703729473~hmac=721044b7cfb11e10bea54351482ee48eb3183323040d27cf3d0ada04891fdb4c" width="100%" height="550px">
<br><br>
<div class="espace">
  <button name="submit" type="submit" class="btn btn-hover color-8" onclick="window.location.href = 'Read.php'">Informations Clients</button>
                    <b class="vl"></b>

  <button name="submit" type="submit" class="btn btn-hover color-8" onclick="window.location.href = 'UserInfo.php'">Informations Employés</button>
</div>                   
  
                   






<div class="footer">

    <a href="https://www.instagram.com/nessaiba_hdg/?next=%2F"><b>facebook</b></a> 
    <a href="https://www.instagram.com/nessaiba_hdg/?next=%2F"><b>Instagram</b></a>
    <a href=""><b>Email:shopyshop@gmail.com</b></a>
    <a href=""><b>Tel:0665784321</b></a>      
     
   
   </div>
    
</body>
</html>