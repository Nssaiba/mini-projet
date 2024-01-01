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

    <a href="#T-shirt"><b>T-shirt</b></a>
    <a  href="#Hoddies"><b>Hoddies</b></a>
    <a href="#Jaket"><b>Jakets</b></a>
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
  <a target="_blank" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS89p96BXGhPD__b_Moz5DlkrKtHnkTHBXBCw&usqp=CAU">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS89p96BXGhPD__b_Moz5DlkrKtHnkTHBXBCw&usqp=CAU" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">300dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://m.media-amazon.com/images/I/51Md7A-FYuL._AC_UY580_.jpg">
    <img src="https://m.media-amazon.com/images/I/51Md7A-FYuL._AC_UY580_.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">250dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://thumbor-5.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjIlMkYwNSUyRjE3JTJGMTY1Mjc4MTc1NGQ5OTNiN2IxNDdkNmQwNDdkZGQ5NTIzMTY2NWM4NzljLmpwZyZmZWVkSWQ9MzUxMDMmaz0zZWQ1OTg1NTM2NmE1ODA4OTk4OGVkMWZhODIyMWQzODM3MGNjMzE5_/homme-t-shirt-imprim-oiseaux-33988808557-Modalova.jpg">
    <img src="https://thumbor-5.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjIlMkYwNSUyRjE3JTJGMTY1Mjc4MTc1NGQ5OTNiN2IxNDdkNmQwNDdkZGQ5NTIzMTY2NWM4NzljLmpwZyZmZWVkSWQ9MzUxMDMmaz0zZWQ1OTg1NTM2NmE1ODA4OTk4OGVkMWZhODIyMWQzODM3MGNjMzE5_/homme-t-shirt-imprim-oiseaux-33988808557-Modalova.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">179dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/07/20/1689858042fbf22306bacf8552ab38eff33f74f9f2_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/07/20/1689858042fbf22306bacf8552ab38eff33f74f9f2_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">249dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://thumbor-5.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjIlMkYwNCUyRjE0JTJGMTY0OTkyODQ5M2I1ZGI5NmNiNmM0ZjA4ZjYxOGMwZDc5MTZiYWNjMDY4LmpwZyZmZWVkSWQ9MzUxMDMmaz03NDY4MWM4YzFlNThhNDE1Y2NhMjhkODQ5MjUxN2NmY2Y4OTE0ZTY4_/t-shirt-imprim-g-om-trique-33988802321-Modalova.jpg">
    <img src="https://thumbor-5.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjIlMkYwNCUyRjE0JTJGMTY0OTkyODQ5M2I1ZGI5NmNiNmM0ZjA4ZjYxOGMwZDc5MTZiYWNjMDY4LmpwZyZmZWVkSWQ9MzUxMDMmaz03NDY4MWM4YzFlNThhNDE1Y2NhMjhkODQ5MjUxN2NmY2Y4OTE0ZTY4_/t-shirt-imprim-g-om-trique-33988802321-Modalova.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">300dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/07/15/165787361887a1f49eb09d281401c07b69c1b6dfb0_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/07/15/165787361887a1f49eb09d281401c07b69c1b6dfb0_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">145dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/07/10/16889750637fc79cdd18cadb8f8f09d3654e05012d_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/07/10/16889750637fc79cdd18cadb8f8f09d3654e05012d_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">300dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://thumbor-2.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYwNCUyRjAyJTJGMTYxNzMyNzQ0NGY3YTJhZWQ2NzQ2Mjk1NDgyNDc1NjQ1ODg5MWMxMmRmLmpwZyZmZWVkSWQ9MzUxMDMmaz0xODBkZmFmMmQyN2M1YjU1YzZiNjFhN2Q4YjFjNjMyNWFiYjhjOTRk_/t-shirt-avec-imprim-poker-29136047217-Modalova.jpg">
    <img src="https://thumbor-2.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYwNCUyRjAyJTJGMTYxNzMyNzQ0NGY3YTJhZWQ2NzQ2Mjk1NDgyNDc1NjQ1ODg5MWMxMmRmLmpwZyZmZWVkSWQ9MzUxMDMmaz0xODBkZmFmMmQyN2M1YjU1YzZiNjFhN2Q4YjFjNjMyNWFiYjhjOTRk_/t-shirt-avec-imprim-poker-29136047217-Modalova.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">120dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://thumbor.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjIlMkYwNSUyRjIxJTJGMTY1MzExODkxNjQ0NzU1Yjc0MTJiYzE0MWUyOTQyOGY1ZWFkYWZjZDBjLmpwZyZmZWVkSWQ9MzUxMDMmaz00NGZiNTNlMjBmZjhhMTMyNzZiNDZlNjYzMjYwYjg2NGZkMDdlODlm_/homme-t-shirt-unicolore-col-rond-33988815041-Modalova.jpg">
    <img src="https://thumbor.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjIlMkYwNSUyRjIxJTJGMTY1MzExODkxNjQ0NzU1Yjc0MTJiYzE0MWUyOTQyOGY1ZWFkYWZjZDBjLmpwZyZmZWVkSWQ9MzUxMDMmaz00NGZiNTNlMjBmZjhhMTMyNzZiNDZlNjYzMjYwYjg2NGZkMDdlODlm_/homme-t-shirt-unicolore-col-rond-33988815041-Modalova.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">145dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://thumbor-5.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjIlMkYwOSUyRjEzJTJGMTY2MzA2MDg3NDk5NTZjMTliZjMzZTU3NWVmMjM1YmNjZjg3OWQyYzJkLmpwZyZmZWVkSWQ9MzUxMDMmaz01MDgwZmI0NmE3NDg5Zjg1MzdkZjVmOTQ2NzM2OGFmZjExNTZhNTU4_/homme-t-shirt-imprim-rose-34047265511-Modalova.jpg">
    <img src="https://thumbor-5.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjIlMkYwOSUyRjEzJTJGMTY2MzA2MDg3NDk5NTZjMTliZjMzZTU3NWVmMjM1YmNjZjg3OWQyYzJkLmpwZyZmZWVkSWQ9MzUxMDMmaz01MDgwZmI0NmE3NDg5Zjg1MzdkZjVmOTQ2NzM2OGFmZjExNTZhNTU4_/homme-t-shirt-imprim-rose-34047265511-Modalova.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">350 dhs</div>
</div>
</section>
<br><br>
<section class="ro" id="Hoddies">
<h1>Hoddies</h1>
<div class="gallery">
  <a target="_blank" href="https://i.pinimg.com/736x/07/6e/05/076e056d90e9f1cbd56a48ec0c7e78e4.jpg">
    <img src="https://i.pinimg.com/736x/07/6e/05/076e056d90e9f1cbd56a48ec0c7e78e4.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">129dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://m.media-amazon.com/images/I/51ra2jA0MlL._AC_UY780_.jpg">
    <img src="https://m.media-amazon.com/images/I/51ra2jA0MlL._AC_UY780_.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">400dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.dhresource.com/0x0/f2/albu/g19/M00/54/3D/rBNaN2EvERaADwTEAAG0jCXwUzY608.jpg">
    <img src="https://www.dhresource.com/0x0/f2/albu/g19/M00/54/3D/rBNaN2EvERaADwTEAAG0jCXwUzY608.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">850dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/03/07/1646624128ddf0d6ea024214fd6d376733b55c6ca8_thumbnail_750x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/03/07/1646624128ddf0d6ea024214fd6d376733b55c6ca8_thumbnail_750x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">600dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2021/10/19/163462174290113d890fdc5a1254451fdcc91ba1db_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/10/19/163462174290113d890fdc5a1254451fdcc91ba1db_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">250dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://thumbor.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjIlMkYwOCUyRjMwJTJGMTY2MTg0MzEwM2M2NTBkNTM1MjRlNWFlZGU5MGJjMTI3MzU2Zjg1ZWE1LmpwZyZmZWVkSWQ9MzUxMDMmaz0yMmUyOTJmOTgzNjBjNDMwNjQyM2YyZjJiNmI4OWY0MmFmZTdkZTdl_/sweat-shirt-capuche-motif-sculptural-et-figure-poche-kangourou-cordon-doublure-thermique-34501117369-Modalova.jpg">
    <img src="https://thumbor.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjIlMkYwOCUyRjMwJTJGMTY2MTg0MzEwM2M2NTBkNTM1MjRlNWFlZGU5MGJjMTI3MzU2Zjg1ZWE1LmpwZyZmZWVkSWQ9MzUxMDMmaz0yMmUyOTJmOTgzNjBjNDMwNjQyM2YyZjJiNmI4OWY0MmFmZTdkZTdl_/sweat-shirt-capuche-motif-sculptural-et-figure-poche-kangourou-cordon-doublure-thermique-34501117369-Modalova.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">200dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/11/15/16684947508a50a570cb88ca95147d8c9b7d6d9c21_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/11/15/16684947508a50a570cb88ca95147d8c9b7d6d9c21_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">199dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://ae01.alicdn.com/kf/S10ad3d7ae0ea41b7ab20857268a197c35.jpg_640x640Q90.jpg_.webp">
    <img src="https://ae01.alicdn.com/kf/S10ad3d7ae0ea41b7ab20857268a197c35.jpg_640x640Q90.jpg_.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">3oodhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://i.pinimg.com/736x/35/bb/d7/35bbd772068792860fa5afd3cb3dee27.jpg">
    <img src="https://i.pinimg.com/736x/35/bb/d7/35bbd772068792860fa5afd3cb3dee27.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">249dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/08/24/af/16928700597a1407c21f5b18b0c8475850c61b4347_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/08/24/af/16928700597a1407c21f5b18b0c8475850c61b4347_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">125dhs</div>
</div>
</section>
<br><br>
<section class="ro" id="Jaket">
<h1>Jakets</h1>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2021/08/11/16286766018ef5f19ec58f7b22f47581962416c212_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/08/11/16286766018ef5f19ec58f7b22f47581962416c212_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">445dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2021/11/19/1637308102776091a6b1f52d7012d3815a468efb5e_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/11/19/1637308102776091a6b1f52d7012d3815a468efb5e_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">320dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/11/28/1669623011bbafd26e1930af4e678bc32939e836ff_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/11/28/1669623011bbafd26e1930af4e678bc32939e836ff_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://i.pinimg.com/1200x/79/a1/0b/79a10b92ad5dcc7ff92825fe926083c5.jpg">
    <img src="https://i.pinimg.com/1200x/79/a1/0b/79a10b92ad5dcc7ff92825fe926083c5.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://i.ebayimg.com/images/g/IoUAAOSwZWdk55tq/s-l1200.jpg">
    <img src="https://i.ebayimg.com/images/g/IoUAAOSwZWdk55tq/s-l1200.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">AJaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/12/05/1670226664995b42604bf22b2829dfc80b3a2b7235_thumbnail_405x552.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/12/05/1670226664995b42604bf22b2829dfc80b3a2b7235_thumbnail_405x552.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">AJaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://m.media-amazon.com/images/I/51Hp3H0CHSL._AC_SX679_.jpg">
    <img src="https://m.media-amazon.com/images/I/51Hp3H0CHSL._AC_SX679_.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://thumbor-4.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYwNyUyRjIyJTJGMTYyNjkxOTE5MmRkYWJmYThlNTA3MWRmYjAyZjI3N2Y4MjVlYjE4NTc5LmpwZyZmZWVkSWQ9MzUxMDMmaz1hNWRlODA1ZTdmMDRiZGQ2ZjhhNzhjNmZkYzZjNjY4ZjY2OTAxMWNi_/homme-veste-en-jean-lettres-33988833525-Modalova.jpg">
    <img src="https://thumbor-4.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYwNyUyRjIyJTJGMTYyNjkxOTE5MmRkYWJmYThlNTA3MWRmYjAyZjI3N2Y4MjVlYjE4NTc5LmpwZyZmZWVkSWQ9MzUxMDMmaz1hNWRlODA1ZTdmMDRiZGQ2ZjhhNzhjNmZkYzZjNjY4ZjY2OTAxMWNi_/homme-veste-en-jean-lettres-33988833525-Modalova.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://thumbor.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYxMCUyRjIxJTJGMTYzNDc5NjY0MjQ3MWVkZjMyYzIxNDEyNWQ1ZmQ3NmRkMGZkZWIxMjEzLmpwZyZmZWVkSWQ9MzUxMDMmaz0wNWI2OGRmODc4NTMwNGQ1NDg0MjM0MmVlZWFhNTMyZDNmZWRjZTNl_/homme-doudoune-zipp-e-31110372819-Modalova.jpg">
    <img src="https://thumbor.modalova.fr/unsafe/0x500/aHR0cHM6Ly9pbWFnZXMyLnByb2R1Y3RzZXJ2ZS5jb20vP3c9MTAwMCZoPTEwMDAmYmc9d2hpdGUmdHJpbT01JnQ9bGV0dGVyYm94JnVybD1zc2wlM0FpbWcubHR3ZWJzdGF0aWMuY29tJTJGaW1hZ2VzM19waSUyRjIwMjElMkYxMCUyRjIxJTJGMTYzNDc5NjY0MjQ3MWVkZjMyYzIxNDEyNWQ1ZmQ3NmRkMGZkZWIxMjEzLmpwZyZmZWVkSWQ9MzUxMDMmaz0wNWI2OGRmODc4NTMwNGQ1NDg0MjM0MmVlZWFhNTMyZDNmZWRjZTNl_/homme-doudoune-zipp-e-31110372819-Modalova.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Jaket <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/11/07/4f/1699362995ffbe594611f87378e1013a2cc6799d70_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/11/07/4f/1699362995ffbe594611f87378e1013a2cc6799d70_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">AJaket <br> 450dhs</div>
</div>
</section>
<br><br>
<section class="ro" id="Shoes">
<h1>Shoes</h1>
<div class="gallery">
  <a target="_blank" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC5RSSfEXvHwHwYjUqDb5Fsm2iC-97_rPo_A&usqp=CAU">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC5RSSfEXvHwHwYjUqDb5Fsm2iC-97_rPo_A&usqp=CAU" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Shoes <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://ae01.alicdn.com/kf/Sff4d4719bcd646c095cf4c0e04c97975B/Chaussures-en-cuir-verni-semelle-paisse-pour-homme-chaussures-d-affaires-d-contract-es-Streetwear-la.jpg">
    <img src="https://ae01.alicdn.com/kf/Sff4d4719bcd646c095cf4c0e04c97975B/Chaussures-en-cuir-verni-semelle-paisse-pour-homme-chaussures-d-affaires-d-contract-es-Streetwear-la.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Shoes <br> 450dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2022/04/26/165096829039f74b3a6fd49b050b678598093e335f_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/04/26/165096829039f74b3a6fd49b050b678598093e335f_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Bascket <br> 350dhs</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2021/12/13/163938455275506e16b6e0b655614bab554dc57d34_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/12/13/163938455275506e16b6e0b655614bab554dc57d34_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Bascket <br> 350dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_pi/2023/10/23/26/16980674106e2bf00c99c3509fa27e535d99f80c73_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_pi/2023/10/23/26/16980674106e2bf00c99c3509fa27e535d99f80c73_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Bascket <br> 350dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/09/25/e4/16956288651ea6035b58500cf265f0ab7dbd8a1139_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/09/25/e4/16956288651ea6035b58500cf265f0ab7dbd8a1139_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Bascket <br> 350dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/09/12/01/16945119329140168420e8d6a6dacfc1a0c011121e_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/09/12/01/16945119329140168420e8d6a6dacfc1a0c011121e_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Bascket <br> 350dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/07/30/16907023966b8636cb8dbcdbe648cbd889a75cd789_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/07/30/16907023966b8636cb8dbcdbe648cbd889a75cd789_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Bascket <br> 350dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/10/24/a1/16981463699da2e75f09a36eec53fdf1d6b56da648_thumbnail_720x.webp">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/10/24/a1/16981463699da2e75f09a36eec53fdf1d6b56da648_thumbnail_720x.webp" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Shoes <br> 450dhs</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://img.ltwebstatic.com/images3_spmp/2023/06/08/168622115181b4008a9d5d8ee47c722d1cfdd60fe8_thumbnail_720x.jpg">
    <img src="https://img.ltwebstatic.com/images3_spmp/2023/06/08/168622115181b4008a9d5d8ee47c722d1cfdd60fe8_thumbnail_720x.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Bascket <br> 350dhs</div>
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