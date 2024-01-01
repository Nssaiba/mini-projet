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
  height: 100%;
  overflow:auto;
  
}
nav{
  
  margin-right:15px;
  display:block;
  float:left;
}
.ro{
  height: 360px;;
}

.menu1 {
    overflow: hidden;
    display:inline-block;
    background-color: #f1f1f1;
    color: black;
    position: fixed;
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

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  height: 280px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 200px;
}

div.desc {
  padding: 15px;
  text-align: center;
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

<a id="A1" href="Login.php"><b>Logout</b></a>

</div>

<div class="menu1">

    <a href="#Vases"><b>Vases</b></a>
    <a  href="#Coussins"><b>Coussins</b></a>
    <a href="#Rangement"><b>Rangement</b></a>
    <a href="#Cuisine"><b>Cuisine</b></a>

</div>

<br><br><br><br>
<?php  

include("navbar.php");

?>
<br><br>

<section class="ro" id="Vases">
  <h1>Vases</h1>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/09/08/aa/1694140911b46d4b6e165730da953598fee7dff1fb_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/09/08/aa/1694140911b46d4b6e165730da953598fee7dff1fb_thumbnail_720x.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/07/12/16891459309eeff8885a9bfc5d9a6db731b450a61f_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/07/12/16891459309eeff8885a9bfc5d9a6db731b450a61f_thumbnail_720x.webp" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/08/15/1660557529b95fdf15064d2b1489cda14541db238b_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/08/15/1660557529b95fdf15064d2b1489cda14541db238b_thumbnail_720x.webp" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://m.media-amazon.com/images/I/51hAE8OypqL._AC_UF1000,1000_QL80_.jpg">
    <img src="https://m.media-amazon.com/images/I/51hAE8OypqL._AC_UF1000,1000_QL80_.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/03/23/164802854582fb0c34df299fedd5d1056b86f455da_thumbnail_720x_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/03/23/164802854582fb0c34df299fedd5d1056b86f455da_thumbnail_720x_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
</section>
<br><br>

<section class="ro" id="Coussins">
<h1>Coussins</h1>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/02/28/1677563851296a1f32a431f21f481ec09df62c0bfb_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/02/28/1677563851296a1f32a431f21f481ec09df62c0bfb_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://m.media-amazon.com/images/I/81PwwZG+3tL._AC_UF350,350_QL80_.jpg">
    <img src="https://m.media-amazon.com/images/I/81PwwZG+3tL._AC_UF350,350_QL80_.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://ae01.alicdn.com/kf/S4fc7aab595f04e96a7817f076fa4d24ed/Coussin-fait-main-nou-en-velours-d-agneau-oreiller-de-canap-boule-danoise-d-coration-d.jpg">
    <img src="https://ae01.alicdn.com/kf/S4fc7aab595f04e96a7817f076fa4d24ed/Coussin-fait-main-nou-en-velours-d-agneau-oreiller-de-canap-boule-danoise-d-coration-d.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/04/11/168119410315ee3698afb7c2a263756a1924ff5fab_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/04/11/168119410315ee3698afb7c2a263756a1924ff5fab_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://m.media-amazon.com/images/I/51JBqGmSwIL._AC_.jpg">
    <img src="https://m.media-amazon.com/images/I/51JBqGmSwIL._AC_.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
</section>
<br><br>
<section class="ro" id="Rangement">
<h1>Rangement</h1>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/08/25/b1/1692945584a9fc67400cc2d9e6dc725163a57a4cf8_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/08/25/b1/1692945584a9fc67400cc2d9e6dc725163a57a4cf8_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/09/09/51/169422538738c13e4ad93e973a18c0375712f5d2e6_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/09/09/51/169422538738c13e4ad93e973a18c0375712f5d2e6_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/07/07/16886988327148f99447e6df4699586f1cbe792782_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/07/07/16886988327148f99447e6df4699586f1cbe792782_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/09/01/ce/169355388432f3e9c6242972f0af393dc4d0e58e41_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/09/01/ce/169355388432f3e9c6242972f0af393dc4d0e58e41_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/08/18/14/1692340658cfed6a1b62c32a825c93f410e9a94bd3_thumbnail_405x552.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/08/18/14/1692340658cfed6a1b62c32a825c93f410e9a94bd3_thumbnail_405x552.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>


</section>
<br><br>
<section class="ro" id="Cuisine">
<h1>Cuisine</h1>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/03/10/16784408413c0505066b9cd9fad51e557bc463299e_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/03/10/16784408413c0505066b9cd9fad51e557bc463299e_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/06/01/1685599356ae8e573ddd2a0adea26b3928a2667d82_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/06/01/1685599356ae8e573ddd2a0adea26b3928a2667d82_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/09/11/5b/1694418369691b8cc07faa8eed2dd9b4761a317919_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/09/11/5b/1694418369691b8cc07faa8eed2dd9b4761a317919_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/05/23/168482440451ec6c4e6e55ca57356658dcf57b7d88_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/05/23/168482440451ec6c4e6e55ca57356658dcf57b7d88_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://www.cdiscount.com/pdt2/7/3/3/1/300x300/hur7047736744733/rw/hurrise-support-d-ustensiles-de-cuisine-outil-de-r.jpg">
    <img src="https://www.cdiscount.com/pdt2/7/3/3/1/300x300/hur7047736744733/rw/hurrise-support-d-ustensiles-de-cuisine-outil-de-r.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
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