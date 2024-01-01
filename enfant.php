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
  height: 100vh;
  overflow:auto;
  
}
nav{
  
  margin-right:15px;
  display:block;
  float:left;
}
.ro{
  height: 700px;;
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

    <a href="#T-shirt"><b>T-shirt Fille</b></a>
    <a  href="#Hoddies"><b>Hoddies</b></a>
    <a href="#Ensemble Garçon"><b>Ensemble Garçon</b></a>
    <a href="#Shoes"><b>Shoes</b></a>

</div>

<br><br><br><br>
<?php  

include("navbar.php");

?>
<br><br>

<section class="ro" id="T-shirt">
  <h1>T-shirt Fille</h1>
<div class="gallery">
  <a target="_blank" href="https://img.joomcdn.net/357540738155dd0c484cdfcd8e5adb098224f3c4_original.jpeg">
    <img src="https://img.joomcdn.net/357540738155dd0c484cdfcd8e5adb098224f3c4_original.jpeg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/12/14/1671013486642c642c864b79d2f697d126834fb0e7_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/12/14/1671013486642c642c864b79d2f697d126834fb0e7_thumbnail_720x.webp" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 120dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2020/08/24/1598236406ccc5c4fd5256461a9d7eb7c8c5164d7f_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2020/08/24/1598236406ccc5c4fd5256461a9d7eb7c8c5164d7f_thumbnail_720x.webp" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 190dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/12/17/1671275827eebccffbe5cc9e9e9bb00560afab2c44_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/12/17/1671275827eebccffbe5cc9e9e9bb00560afab2c44_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://ma.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/14/236626/1.jpg?2705">
    <img src="https://ma.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/14/236626/1.jpg?2705" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://i5.walmartimages.com/seo/Vedolay-Shein-Tops-For-Girl-Girls-Casual-Ruffle-Sleeve-T-Shirts-Tops-Scallop-Trim-Solid-Cute-Blouse-Tunic-Pink-8-9-Years_c1bb9759-6551-499a-a188-f4bc1ae80277.ce54979a208f2c07a8f6cd61ae9089a3.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF">
    <img src="https://i5.walmartimages.com/seo/Vedolay-Shein-Tops-For-Girl-Girls-Casual-Ruffle-Sleeve-T-Shirts-Tops-Scallop-Trim-Solid-Cute-Blouse-Tunic-Pink-8-9-Years_c1bb9759-6551-499a-a188-f4bc1ae80277.ce54979a208f2c07a8f6cd61ae9089a3.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.joomcdn.net/28878749f0fd50c3bd12545f024e21a13c1ceb00_original.jpeg">
    <img src="https://img.joomcdn.net/28878749f0fd50c3bd12545f024e21a13c1ceb00_original.jpeg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 299dhs</div>
  </div>
  
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/04/06/16807770441994acd9e73a753a870065d97069dc62_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/04/06/16807770441994acd9e73a753a870065d97069dc62_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img-va.myshopline.com/image/store/2000490266/1644917514762/4_1239.jpeg?w=800&h=800">
    <img src="https://img-va.myshopline.com/image/store/2000490266/1644917514762/4_1239.jpeg?w=800&h=800" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.happinessishomemade.net/wp-content/uploads/2023/04/Classic-Spiral-Blue-and-Pink-on-Purple.jpg">
    <img src="https://www.happinessishomemade.net/wp-content/uploads/2023/04/Classic-Spiral-Blue-and-Pink-on-Purple.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 299dhs</div>
</div>
</section>
<br><br>
<section class="ro" id="Hoddies">
<h1>Hoddies</h1>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/08/23/b1/1692785660522b5fa514854ce9d6649c8e76faa7e7_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/08/23/b1/1692785660522b5fa514854ce9d6649c8e76faa7e7_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">calorfull Hoddie <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/9eccbe69ea5b3637089ada67be9379c1.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp">
    <img src="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/9eccbe69ea5b3637089ada67be9379c1.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">White Hoddie <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2021/07/21/1626830186515930b83c1b68b4fe1f58d37d0e2be0_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/07/21/1626830186515930b83c1b68b4fe1f58d37d0e2be0_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">blume Hoddie <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://i.pinimg.com/originals/4a/84/f4/4a84f455a97ed7c5140d6dbbba8f8bf5.jpg">
    <img src="https://i.pinimg.com/originals/4a/84/f4/4a84f455a97ed7c5140d6dbbba8f8bf5.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/09/01/ca/1693568112e464ffb862215b4da222ee57d83f2b1b_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/09/01/ca/1693568112e464ffb862215b4da222ee57d83f2b1b_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/09/21/8c/1695304893d59f23c2546eb8728ee17e7bb1958c29_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/09/21/8c/1695304893d59f23c2546eb8728ee17e7bb1958c29_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/10/11/1665455897586428d7e0b3545dfc2dcc4cf73b63c0_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/10/11/1665455897586428d7e0b3545dfc2dcc4cf73b63c0_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/102da75acdec85c72d9cc124d4184320.jpg?imageMogr2/auto-orient%7CimageView2/2/w/1300/q/80/format/webp">
    <img src="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/102da75acdec85c72d9cc124d4184320.jpg?imageMogr2/auto-orient%7CimageView2/2/w/1300/q/80/format/webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/11/07/1667788755073d9cd632e1baebe25abd7d1e9af287_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/11/07/1667788755073d9cd632e1baebe25abd7d1e9af287_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/08/30/16618415631ca0ab370e0cef1da51ef4b0cf52fa76_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/08/30/16618415631ca0ab370e0cef1da51ef4b0cf52fa76_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 299dhs</div>
</div>
</section>
<br><br>
<section class="ro" id="Ensemble Garçon">
<h1>Ensemble Garçon</h1>
<div class="gallery">
  <a target="_blank" href="https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/39/643146/1.jpg?1643">
    <img src="https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/39/643146/1.jpg?1643" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ensemble garçon <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2021/11/11/16365906815997e8624c25ac986cb13d89da51106e_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/11/11/16365906815997e8624c25ac986cb13d89da51106e_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ensemble garçon <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://fr.shop-orchestra.com/on/demandware.static/-/Sites-orchestra-navigation-fr/default/dw9694306c/themes/textile/garcon/plp_themes-goldendreams.jpg">
    <img src="https://fr.shop-orchestra.com/on/demandware.static/-/Sites-orchestra-navigation-fr/default/dw9694306c/themes/textile/garcon/plp_themes-goldendreams.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ensemble garçon <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://media.vertbaudet.fr/Images/3/97/SZ/1066.jpg">
    <img src="https://media.vertbaudet.fr/Images/3/97/SZ/1066.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ensemble garçon <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.vertbaudet.fr/fstrz/r/s/media.vertbaudet.fr/Pictures/vertbaudet/253336/pantalon-battle-facile-a-enfiler-garcon.jpg?width=750&frz-v=225">
    <img src="https://www.vertbaudet.fr/fstrz/r/s/media.vertbaudet.fr/Pictures/vertbaudet/253336/pantalon-battle-facile-a-enfiler-garcon.jpg?width=750&frz-v=225" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ensemble garçon <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/203b939dfd759c5a0ea35c3fd5c03ef6.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp">
    <img src="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/203b939dfd759c5a0ea35c3fd5c03ef6.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ensemble garçon <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://m.media-amazon.com/images/I/71IXmd4ycKL._AC_UY350_.jpg">
    <img src="https://m.media-amazon.com/images/I/71IXmd4ycKL._AC_UY350_.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ensemble garçon <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/71iPiayXFCL._AC_SX522_.jpg">
    <img src="https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/71iPiayXFCL._AC_SX522_.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ensemble garçon <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://m.media-amazon.com/images/I/81X1PRT6xlL._AC_UY780_.jpg">
    <img src="https://m.media-amazon.com/images/I/81X1PRT6xlL._AC_UY780_.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ensemble garçon <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/10/12/0b/16971158840b0891f1c0762949e32f33c007f943e7_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/10/12/0b/16971158840b0891f1c0762949e32f33c007f943e7_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ensemble garçon <br> 299dhs</div>
</div>
</section>
<br><br>
<section class="ro" id="Shoes">
<h1>Shoes</h1>
<div class="gallery">
  <a target="_blank" href="https://www.cdiscount.com/pdt2/3/6/5/1/700x700/mp52962365/rw/mode-basket-sport-enfant-chaussures-garcon-fille-b.jpg">
    <img src="https://www.cdiscount.com/pdt2/3/6/5/1/700x700/mp52962365/rw/mode-basket-sport-enfant-chaussures-garcon-fille-b.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">bascket garçon <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://thumbor-2.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYwOCUyRjE4JTJGMTYyOTI3NjMzNDJjNWU4NTE4ODZkMzk2MDhiNTI1ZDVlYmJhYzc4MWU0LmpwZyZmZWVkSWQ9MzUxMDMmaz1lOTM4ZTA1ZmFmZTQ1ZTNlNzlmMDI5YzYyYzM5NjMwNDI3MTg1YWI0_/baskets-avec-imprim-lacets-30332744675-Modalova.jpg">
    <img src="https://thumbor-2.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYwOCUyRjE4JTJGMTYyOTI3NjMzNDJjNWU4NTE4ODZkMzk2MDhiNTI1ZDVlYmJhYzc4MWU0LmpwZyZmZWVkSWQ9MzUxMDMmaz1lOTM4ZTA1ZmFmZTQ1ZTNlNzlmMDI5YzYyYzM5NjMwNDI3MTg1YWI0_/baskets-avec-imprim-lacets-30332744675-Modalova.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">bascket garçon <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.cdiscount.com/pdt2/8/6/2/1/700x700/mp60053862/rw/basket-enfant-chaussures-garcon-fille-baskets.jpg">
    <img src="https://www.cdiscount.com/pdt2/8/6/2/1/700x700/mp60053862/rw/basket-enfant-chaussures-garcon-fille-baskets.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">bascket garçon <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/21/319146/1.jpg?2513">
    <img src="https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/21/319146/1.jpg?2513" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">bascket garçon <br> 299dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/10/07/40/16966720837c68e6a5fb657117cfbfeb89b0884eef_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/10/07/40/16966720837c68e6a5fb657117cfbfeb89b0884eef_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">bascket garçon <br> 299dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/04/19/1650346834aaaa181e3f58d8ec7475ba2a16a05c29_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/04/19/1650346834aaaa181e3f58d8ec7475ba2a16a05c29_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">bascket garçon <br> 299dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/07/04/1688443298bc5624c1aa90bfa72616e73d812f2dda_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/07/04/1688443298bc5624c1aa90bfa72616e73d812f2dda_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">bascket fille <br> 299dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/05/15/1684149742d5dbed7e1c6f482726f657511f9fc4e9_thumbnail_720x_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/05/15/1684149742d5dbed7e1c6f482726f657511f9fc4e9_thumbnail_720x_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">bascket fille <br> 299dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2020/09/08/1599545081b9c46f635f201e10128a6f875c5509bb_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2020/09/08/1599545081b9c46f635f201e10128a6f875c5509bb_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">boutine fille <br> 299dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/09/13/4e/1694595973209d9804b63aef56088549a12e3359cd_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/09/13/4e/1694595973209d9804b63aef56088549a12e3359cd_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">balerine fille <br> 299dhs</div>
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