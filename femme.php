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

   height: 450vh; 
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

    <a href="#T-shirt"><b>T-shirt</b></a>
    <a  href="#Hoddies"><b>Hoddies</b></a>
    <a href="#Jaket"><b>Jakets</b></a>
    <a href="#Bijoux"><b>Bijoux</b></a>
    <a href="#Shoes"><b>Shoes</b></a>

</div>

<br><br><br><br>
<?php  

include("navbar.php");

?>
<br><br>

<section class="ro" id="T-shirt">
  <h1>T-shirt</h1>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/03/18/1679105369a42450e4b0d8a2e5764862132b0fdf50_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/03/18/1679105369a42450e4b0d8a2e5764862132b0fdf50_thumbnail_720x.webp" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">white tshirt <br>159dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoayr9CmcwYC15SxvSaOolRCnen9nIC8j3totKSEu0i4YL0Aahqkti8-c0IlhbnA8BjaA&usqp=CAU">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoayr9CmcwYC15SxvSaOolRCnen9nIC8j3totKSEu0i4YL0Aahqkti8-c0IlhbnA8BjaA&usqp=CAU" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 299dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2020/08/24/1598236406ccc5c4fd5256461a9d7eb7c8c5164d7f_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2020/08/24/1598236406ccc5c4fd5256461a9d7eb7c8c5164d7f_thumbnail_720x.webp" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 239dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://ma.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/68/738626/1.jpg?3887">
    <img src="https://ma.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/68/738626/1.jpg?3887" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 199dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://ma.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/14/236626/1.jpg?2705">
    <img src="https://ma.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/14/236626/1.jpg?2705" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 250dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://i5.walmartimages.com/seo/Vedolay-Shein-Tops-For-Girl-Girls-Casual-Ruffle-Sleeve-T-Shirts-Tops-Scallop-Trim-Solid-Cute-Blouse-Tunic-Pink-8-9-Years_c1bb9759-6551-499a-a188-f4bc1ae80277.ce54979a208f2c07a8f6cd61ae9089a3.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF">
    <img src="https://i5.walmartimages.com/seo/Vedolay-Shein-Tops-For-Girl-Girls-Casual-Ruffle-Sleeve-T-Shirts-Tops-Scallop-Trim-Solid-Cute-Blouse-Tunic-Pink-8-9-Years_c1bb9759-6551-499a-a188-f4bc1ae80277.ce54979a208f2c07a8f6cd61ae9089a3.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc"> basic top <br> 200dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.joomcdn.net/28878749f0fd50c3bd12545f024e21a13c1ceb00_original.jpeg">
    <img src="https://img.joomcdn.net/28878749f0fd50c3bd12545f024e21a13c1ceb00_original.jpeg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 100dhs</div>
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
  <div class="desc">basic top <br> 159dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.happinessishomemade.net/wp-content/uploads/2023/04/Classic-Spiral-Blue-and-Pink-on-Purple.jpg">
    <img src="https://www.happinessishomemade.net/wp-content/uploads/2023/04/Classic-Spiral-Blue-and-Pink-on-Purple.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic top <br> 179dhs</div>
</div>
</section>
<br><br>
<section class="ro" id="Hoddies">
<h1>Hoddies</h1>
<div class="gallery">
  <a target="_blank" href="https://www.cdiscount.com/pdt2/3/5/2/1/700x700/mp84888352/rw/sweat-a-capuche-femme-y2k-a-proximite-solide-ini.jpg">
    <img src="https://www.cdiscount.com/pdt2/3/5/2/1/700x700/mp84888352/rw/sweat-a-capuche-femme-y2k-a-proximite-solide-ini.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 399dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/9eccbe69ea5b3637089ada67be9379c1.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp">
    <img src="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/9eccbe69ea5b3637089ada67be9379c1.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 399dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/f57fefa5a2f288cf369228dff2f5a3ae.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp">
    <img src="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/f57fefa5a2f288cf369228dff2f5a3ae.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 399dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://i.pinimg.com/originals/4a/84/f4/4a84f455a97ed7c5140d6dbbba8f8bf5.jpg">
    <img src="https://i.pinimg.com/originals/4a/84/f4/4a84f455a97ed7c5140d6dbbba8f8bf5.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 399dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/09/01/ca/1693568112e464ffb862215b4da222ee57d83f2b1b_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/09/01/ca/1693568112e464ffb862215b4da222ee57d83f2b1b_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 399dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/09/21/8c/1695304893d59f23c2546eb8728ee17e7bb1958c29_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/09/21/8c/1695304893d59f23c2546eb8728ee17e7bb1958c29_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 399dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/08/07/78/1691371795f8ff4aed86181d5419180e1a867e6dc4_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/08/07/78/1691371795f8ff4aed86181d5419180e1a867e6dc4_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 399dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/102da75acdec85c72d9cc124d4184320.jpg?imageMogr2/auto-orient%7CimageView2/2/w/1300/q/80/format/webp">
    <img src="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/102da75acdec85c72d9cc124d4184320.jpg?imageMogr2/auto-orient%7CimageView2/2/w/1300/q/80/format/webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 399dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/11/07/1667788755073d9cd632e1baebe25abd7d1e9af287_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/11/07/1667788755073d9cd632e1baebe25abd7d1e9af287_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 399dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/08/30/16618415631ca0ab370e0cef1da51ef4b0cf52fa76_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/08/30/16618415631ca0ab370e0cef1da51ef4b0cf52fa76_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">basic Hoddie <br> 399dhs</div>
</div>
</section>
<br><br>
<section class="ro" id="Jaket">
<h1>Jakets</h1>
<div class="gallery">
  <a target="_blank" href="https://m.media-amazon.com/images/I/51fTffTDEUL._AC_UY780_.jpg">
    <img src="https://m.media-amazon.com/images/I/51fTffTDEUL._AC_UY780_.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://i.pinimg.com/550x/ed/68/87/ed688715a132427df83d8cba322cb4e2.jpg">
    <img src="https://i.pinimg.com/550x/ed/68/87/ed688715a132427df83d8cba322cb4e2.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2021/09/30/1632973183d8f2bcef1acbd84d428a889b0dbd1f8e_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/09/30/1632973183d8f2bcef1acbd84d428a889b0dbd1f8e_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.dhresource.com/webp/m/0x0/f2/albu/g9/M01/E7/49/rBVaWF5sNNaAWbPlAAOCvxMKuw8581.jpg">
    <img src="https://www.dhresource.com/webp/m/0x0/f2/albu/g9/M01/E7/49/rBVaWF5sNNaAWbPlAAOCvxMKuw8581.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/07/08/16887853931814ad96e0c7cd49d84f6fef094def6e_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/07/08/16887853931814ad96e0c7cd49d84f6fef094def6e_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/09/21/71/169526776784d7d76b4aeb48b89cf001cec73f12d7_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/09/21/71/169526776784d7d76b4aeb48b89cf001cec73f12d7_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/09/23/7f/1695455335bed294e169f59e3eebb56507ad40a777_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/09/23/7f/1695455335bed294e169f59e3eebb56507ad40a777_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://ae01.alicdn.com/kf/S88ec4475765e46d9a5c1512c8c27c0adK.jpg_640x640Q90.jpg_.webp">
    <img src="https://ae01.alicdn.com/kf/S88ec4475765e46d9a5c1512c8c27c0adK.jpg_640x640Q90.jpg_.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/09/16/1663319797c2a8a6eb3ccf604b4724c6394028c6ee_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/09/16/1663319797c2a8a6eb3ccf604b4724c6394028c6ee_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.dhresource.com/0x0/f2/albu/g21/M01/A2/3D/rBNaOWFAP1OAAgItAAC6EommulY964.jpg">
    <img src="https://www.dhresource.com/0x0/f2/albu/g21/M01/A2/3D/rBNaOWFAP1OAAgItAAC6EommulY964.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>
</section>
<br><br>
<section class="ro" id="Shoes">
<h1>Shoes</h1>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/06/16/1655377455bef32333705b5e0e09423d71a06f7606_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/06/16/1655377455bef32333705b5e0e09423d71a06f7606_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Bascket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2021/09/15/16316750097bd72ad03080430d97cba0e456bedeb5_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/09/15/16316750097bd72ad03080430d97cba0e456bedeb5_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ABascket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2020/07/03/159376316610140751ca57e509170ea6027830b579_thumbnail_600x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2020/07/03/159376316610140751ca57e509170ea6027830b579_thumbnail_600x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Bascket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://i.pinimg.com/1200x/ee/2c/f8/ee2cf895c46cea2f7905a73b007450ad.jpg">
    <img src="https://i.pinimg.com/1200x/ee/2c/f8/ee2cf895c46cea2f7905a73b007450ad.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ABascket <br> 450dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/02/21/1645426639ef4b9ee80f391fdde310319ea575f722_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/02/21/1645426639ef4b9ee80f391fdde310319ea575f722_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Bascket <br> 450dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/09/06/97/1693991205b90a67d6c31d19aa6f80ebb18cf04d65_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/09/06/97/1693991205b90a67d6c31d19aa6f80ebb18cf04d65_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Shoes <br> 500dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://thumbor-5.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYwOSUyRjI0JTJGMTYzMjQ0NTc4NzliNTk3MDc2NGU0MDY2NTdkZTVlMjJjZmE3MjRhZTIxLmpwZyZmZWVkSWQ9MzUxMDMmaz1mNTE5ZjdlNzY3M2EwODkxYjI1OTdjZGE5NGE2ZDU4ODgxNjYzZTk0_/bottes-de-combat-zipp-es-33990022615-Modalova.jpg">
    <img src="https://thumbor-5.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYwOSUyRjI0JTJGMTYzMjQ0NTc4NzliNTk3MDc2NGU0MDY2NTdkZTVlMjJjZmE3MjRhZTIxLmpwZyZmZWVkSWQ9MzUxMDMmaz1mNTE5ZjdlNzY3M2EwODkxYjI1OTdjZGE5NGE2ZDU4ODgxNjYzZTk0_/bottes-de-combat-zipp-es-33990022615-Modalova.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">AShoes <br> 500dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://ae01.alicdn.com/kf/Sde4ab625e00c4e438e76b7dd52fb0a4fn/Bottines-de-neige-plateforme-pour-femmes-chaussures-Tube-court-en-coton-pais-bottines-d-hiver-semelle.jpg">
    <img src="https://ae01.alicdn.com/kf/Sde4ab625e00c4e438e76b7dd52fb0a4fn/Bottines-de-neige-plateforme-pour-femmes-chaussures-Tube-court-en-coton-pais-bottines-d-hiver-semelle.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Shoes <br> 500dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://thumbor-2.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYxMiUyRjIxJTJGMTY0MDA4NzY0NzAwODIwYTZiNDA5ZmFlMWM3Mzc0YThiOWZkNDljNDM5LmpwZyZmZWVkSWQ9MzUxMDMmaz00ZTk5ZGI4Yjg0NmIyNDlkYWFmZjI1NjQ2MWY4ZjllNjI4YmVjMjcz_/bottes-de-combat-zipp-33990055941-Modalova.jpg">
    <img src="https://thumbor-2.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYxMiUyRjIxJTJGMTY0MDA4NzY0NzAwODIwYTZiNDA5ZmFlMWM3Mzc0YThiOWZkNDljNDM5LmpwZyZmZWVkSWQ9MzUxMDMmaz00ZTk5ZGI4Yjg0NmIyNDlkYWFmZjI1NjQ2MWY4ZjllNjI4YmVjMjcz_/bottes-de-combat-zipp-33990055941-Modalova.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Shoes <br> 500dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://www.culturefemme.com/wp-content/uploads/2021/11/16272643433546e2889141551df69efe8ad91740b8_thumbnail_600x-e1635934247409.jpg">
    <img src="https://www.culturefemme.com/wp-content/uploads/2021/11/16272643433546e2889141551df69efe8ad91740b8_thumbnail_600x-e1635934247409.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Shoes <br> 500dhs</div>
</div>
</section>
<br><br>

<section class="ro" id="Bijoux">
<h1>Bijoux</h1>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/05/09/1683613512c3b068f8ac67e1de1d8b23b2eab41f08_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/05/09/1683613512c3b068f8ac67e1de1d8b23b2eab41f08_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Boite a bijoux <br> 1000dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/06/02/1685682419835e0a9fa1cb6801a93d4c705b3264bc_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/06/02/1685682419835e0a9fa1cb6801a93d4c705b3264bc_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ensemble<br> 500dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/09/04/2b/169381758520ce2383652238fcccf7a01b817f124e_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/09/04/2b/169381758520ce2383652238fcccf7a01b817f124e_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Chaines <br> 400dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/05/16/168421911675cda67c04a968b6e73d7b8252b55b8a_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/05/16/168421911675cda67c04a968b6e73d7b8252b55b8a_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Colier avec boucle <br> 400dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://fyooyzbm.filerobot.com/v7/FoDxOQAXkAExZUE-NkAkzfE0.jpg?ci_seal=b61f846664&w=480">
    <img src="https://fyooyzbm.filerobot.com/v7/FoDxOQAXkAExZUE-NkAkzfE0.jpg?ci_seal=b61f846664&w=480" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Colier<br>250dhs</div>
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