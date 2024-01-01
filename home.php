<?php 
session_start();
?>
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
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  
}
.nbar{

   height: 400vh; 
   background-color: #f1f1f1;
   width:200px ;

}
li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}

.localisation{
    width: 100%;
}

.ico{
height:110px;

}
section{
  display: inline-block;
  width:70%;
  height: 100vh;
  overflow:auto;
  
}
nav{
  margin-right:15px;
  display:block;
  float:left;
}
.ro{
  height: 600px;;
}
.container{
  width:100%;
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
.sesion{
  background-color:#2F4F4F;
  color:white;
}


</style>
</head>
<body>
  
<div class="menu">

<a class="nmarque"><b>SHOPY SHOP</b></a>

<a id="A1" href="Login.php"><b>Logout</b></a>

</div>
<br><br>

<div class="container">
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://www.wsbinterieurbouw.nl/wp-content/uploads/2020/11/Haasnoot-mode-katwijk-web-16.jpg" alt="Maison" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://www.wsbinterieurbouw.nl/wp-content/uploads/2020/11/Haasnoot-mode-katwijk-web-9.jpg" alt="homme" style="width:100%">
      </div>
    
      <div class="item">
        <img src="https://www.wsbconceptdemagasin.fr/wp-content/uploads/2018/05/Groosman-mode-Sluis-website-5-van-28.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="menu1">

    <a href="#Hommes"><b>Hommes</b></a>
    <a  href="#Coussins"><b>Femmes</b></a>
    <a href="#Enfants"><b>Enfants</b></a>
    <a href="#Maison"><b>Maison</b></a>
    <a href="#Accessoires"><b>Accessoires</b></a>

</div>
<?php  

include("navbar.php");
?>
<div class="sesion">
<?php 
echo '<b><br><br>Welcome, To Shopy shop home page !!<b><br>';
 echo 'Email :' .$_SESSION["emailsession"]. '<br>';
 echo 'Password :' .$_SESSION["passwordsession"]. '<br>';
 ?>
</div>

<section id="Hommes" class="ro">
   <h1><a href="homme.php">Homme</a></h1> 
   <div  >
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://img.ltwebstatic.com/images3_pi/2021/10/16/16343613141f9cdc82f6e964b098844bdddcabf377_thumbnail_720x.webp" target="_blank">
          <img src="https://img.ltwebstatic.com/images3_pi/2021/10/16/16343613141f9cdc82f6e964b098844bdddcabf377_thumbnail_720x.webp" alt="Lights" style="width:100%">
          <div class="caption">
            <p>100dhs</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://img.ltwebstatic.com/images3_pi/2021/08/11/1628652100a7789b723af208194a8681a5d506cf9c.webp" target="_blank">
          <img src="https://img.ltwebstatic.com/images3_pi/2021/08/11/1628652100a7789b723af208194a8681a5d506cf9c.webp" alt="Nature" style="width:100%">
          <div class="caption">
            <p>150dhs</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://i.pinimg.com/736x/b6/21/db/b621dbab561d7f35ab1cc129913b9496.jpg" target="_blank">
          <img src="https://i.pinimg.com/736x/b6/21/db/b621dbab561d7f35ab1cc129913b9496.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>200dhs</p>
          </div>
        </a>
      </div>
      
    </div>
    
    
  </div>
</section>

<section class="ro" id="Femmes">
   <h1><a href="femme.php">Femme</a></h1> 
   <div  >
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://image.made-in-china.com/202f0j00UHdcOSehkkbu/Women-prime-S-Viscose-Two-Piece-Set-Knitting-Pullover-Sweater-Shein-Clothes-Clothing-Price.webp" target="_blank">
          <img src="https://image.made-in-china.com/202f0j00UHdcOSehkkbu/Women-prime-S-Viscose-Two-Piece-Set-Knitting-Pullover-Sweater-Shein-Clothes-Clothing-Price.webp" alt="Lights" style="width:100%">
          <div class="caption">
            <p>179dhs</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://ma.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/65/796626/1.jpg?9544" target="_blank">
          <img src="https://ma.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/65/796626/1.jpg?9544" alt="Nature" style="width:100%">
          <div class="caption">
            <p>300dhs</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://i.pinimg.com/originals/d4/01/88/d401887eecceaa069a8c605e72c0d6d7.png" target="_blank">
          <img src="https://i.pinimg.com/originals/d4/01/88/d401887eecceaa069a8c605e72c0d6d7.png" alt="Fjords" style='width:100%;height:300px;'>
          <div class="caption">
            <p>120dhs</p>
          </div>
        </a>
      </div>
      
    </div>
    
    
  </div>
</section>
<section class="ro" id="Enfants">
   <h1><a href="enfant.php">Enfant</a></h1> 
   <div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://img.ltwebstatic.com/images3_pi/2021/11/04/163600520041747da2dd0862f3eeb6784f50a42e5d.webp" target="_blank">
          <img src="https://img.ltwebstatic.com/images3_pi/2021/11/04/163600520041747da2dd0862f3eeb6784f50a42e5d.webp" alt="Lights" style="width:100%">
          <div class="caption">
            <p>239dhs</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://ma.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/98/833916/1.jpg?7966" target="_blank">
          <img src="https://ma.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/98/833916/1.jpg?7966" alt="Nature" style='width:100%;height:400px;'>
          <div class="caption">
            <p>120dhs</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://img.ltwebstatic.com/images3_pi/2023/10/23/7d/16980315147bd5871fb47294020a3cb1e9b99bfb9b_thumbnail_720x.webp" target="_blank">
          <img src="https://img.ltwebstatic.com/images3_pi/2023/10/23/7d/16980315147bd5871fb47294020a3cb1e9b99bfb9b_thumbnail_720x.webp" alt="Fjords" style='width:100%'>
          <div class="caption">
            <p>300dhs</p>
          </div>
        </a>
      </div>
      
    </div>
    
  </div>
</section>
<section class="ro" id="Maison">
   <h1><a href="maison.php">Maison</a></h1> 
   <div  >
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://resize-public.ladmedia.fr/img/var/public/storage/images/media/images/capture-d-ecran-2021-03-16-a-21-17-02-1669286/44192505-1-fre-FR/Capture-d-ecran-2021-03-16-a-21.17.02.png" target="_blank">
          <img src="https://resize-public.ladmedia.fr/img/var/public/storage/images/media/images/capture-d-ecran-2021-03-16-a-21-17-02-1669286/44192505-1-fre-FR/Capture-d-ecran-2021-03-16-a-21.17.02.png" alt="Lights" style='width:100%;height:300px;'>
          <div class="caption">
            <p>249dhs</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://i.pinimg.com/474x/ea/5e/e4/ea5ee4174ebac1536bad02e485aeb64a.jpg" target="_blank">
          <img src="https://i.pinimg.com/474x/ea/5e/e4/ea5ee4174ebac1536bad02e485aeb64a.jpg" alt="Nature" style='width:100%;height:300px;'>
          <div class="caption">
            <p>300dhs</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://cdn.manomano.com/nappe-de-table-impermeable-nappes-en-lin-de-coton-brodees-couverture-de-table-decorative-resistante-aux-eclaboussures-pour-la-cuisine-la-cuisine-la-salle-a-manger-la-fete-de-noel-gris-P-32757667-117360313_1.jpg" target="_blank">
          <img src="https://cdn.manomano.com/nappe-de-table-impermeable-nappes-en-lin-de-coton-brodees-couverture-de-table-decorative-resistante-aux-eclaboussures-pour-la-cuisine-la-cuisine-la-salle-a-manger-la-fete-de-noel-gris-P-32757667-117360313_1.jpg" alt="Fjords" style='width:100%;height:300px;'>
          <div class="caption">
            <p>199dhs</p>
          </div>
        </a>
      </div>
      
    </div>
    
    
  </div>
</section>
<section class="ro" id="Accessoires">
   <h1>Accessoires</h1> 
   <div  >
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://img.ltwebstatic.com/images3_pi/2022/05/06/16518168868c81e7ce7b74be095e83feb9a709f2e0_thumbnail_405x552.jpg" target="_blank">
          <img src="https://img.ltwebstatic.com/images3_pi/2022/05/06/16518168868c81e7ce7b74be095e83feb9a709f2e0_thumbnail_405x552.jpg" alt="Lights" style='width:100%;height:300px;'>
          <div class="caption">
            <p>139dhs</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://img.ltwebstatic.com/images3_spmp/2023/09/16/b6/1694833087006639cb0ab0fbd1b15fb184c4e33e67_thumbnail_720x.jpg" target="_blank">
          <img src="https://img.ltwebstatic.com/images3_spmp/2023/09/16/b6/1694833087006639cb0ab0fbd1b15fb184c4e33e67_thumbnail_720x.jpg" alt="Nature" style='width:100%;height:300px;'>
          <div class="caption">
            <p>250dhs</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://thumbor-3.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYwOSUyRjAyJTJGMTYzMDU3ODA2M2Q4OGVlZWQzNjNmNDZkMmE1ZjU3M2FlOTAxZTdiOWQyLmpwZyZmZWVkSWQ9MzUxMDMmaz03ZTRmNTM4MGZmYzI4OTc4NzBkMzZlMjUxZDI0MWRhYmRhM2E1NDY2_/accessoires-pour-cheveux-fausse-perle-fleur-31034210343-Modalova.jpg" target="_blank">
          <img src="https://thumbor-3.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYwOSUyRjAyJTJGMTYzMDU3ODA2M2Q4OGVlZWQzNjNmNDZkMmE1ZjU3M2FlOTAxZTdiOWQyLmpwZyZmZWVkSWQ9MzUxMDMmaz03ZTRmNTM4MGZmYzI4OTc4NzBkMzZlMjUxZDI0MWRhYmRhM2E1NDY2_/accessoires-pour-cheveux-fausse-perle-fleur-31034210343-Modalova.jpg" alt="Fjords" style='width:100%;height:300px;'>
          <div class="caption">
            <p>300dhs</p>
          </div>
        </a>
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