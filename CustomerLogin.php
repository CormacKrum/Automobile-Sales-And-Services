<?php
$user=$_GET["name"];
$pass=$_GET["pass"];
$servername="localhost";
$username="root";
$password="password";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
	die("Failed");
}
//echo "SUCCESS";
//echo "<br>";
$sql=mysqli_select_db($conn,"DBMS");
if(!$sql)
{
	die("FAILED");
}
//echo "SUCCESS SELECTED DATABASE";
//echo '<br>';
//$sql="create table userLogin(email varchar(255),password varchar(255));";
//$check=mysqli_query($conn,$sql);
//if(!$check)
//{
	//die("FAILED");
//}
//echo "SUCCESS CREATED TABLE";
//echo '<br>';
//$sql="insert into userLogin values('jgoel92@gmail.com','123456');";
//$check=mysqli_query($conn,$sql);
//if(!$check)
//{
	//die("FAILED".mysqli_error($conn));
//}
//echo "SUCCESS INSERTED DATA";
//echo '<br>';
//$username="jgoel92@gmail.com";
$sql="Select * from userLogin where email='$user' and password='$pass';";
$check=mysqli_query($conn,$sql);
$x=0;
while($row=mysqli_fetch_array($check))
{
	$x=$x+1;
}
//echo "$x";
if($x!=0)
{
	//echo " SUCCESS in USER LOGIN";
}
else
{
	die ("FAILED in USER LOGIN");
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #48d1cc;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px
    rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content
a:hover{background-color:#f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>

<body>

<ul>

<li><a href="navigation2.html">Home</a></li>
<li><a href="about.html">About Us</a></li>
<li class="dropdown">

<a href="#"class="dropbtn">Dropdown</a>

    <div class="dropdown-content">
      <a href="accordian.html">Cars</a>
      <a href="bikeinfo.html">Bikes</a>
      <a href="carbikename.html">Search and Buy</a>
	  <a href="Service.html">Service</a>
    </div>

  </li>
<li><a href="navigation.html">Logout</a></li>
</ul>
</body>
</html>
 
 
<!DOCTYPE html>
<html>
<head>
<style>
body {
    -webkit-animation: colorchange 15s infinite; 
    animation: colorchange 15s infinite;
}
@-webkit-keyframes colorchange {
     0%  {background: RED;}
    25%  {background: Green;}
    50%  {background: Yellow;}
    75%  {background: Cyan;}
    100% {background: Blue;}
}
@keyframes colorchange {
     0%  {background: Red;}
    25%  {background: Green;}
    50%  {background: Yellow;}
    75%  {background: Cyan;}
    100% {background: Blue;}
}  
</style>
<h1 style="color:White; text-align:left; font:Comic Sans MS; font-size:500%;">AutoMobile Cars & Bikes</h1>
<h2 style="color:RED;text-align:center ; font:bold; font-size:100%;">"Customers Are King And King Don't Bargain."</h2>
</head>
<body>
<marquee width="100%" height="20" bgcolor ="white">Welcome to our Greatest AND Most Visited Showroom</marquee>

<br>
<br>
</body>
</html>


<!DOCTYPE html>
<html>
<meta name="viewport" content="width=
device-width, initial-scale=1">
<style>

body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;

}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: #b0d7c5;
}


.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}



.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}


/* This is for next & prev buttons */ 

.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}


.prev:hover,
.next:hover {
background-color:rgba(0, 0, 0, 0.8);

}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: #00b867;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;

}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
 box-shadow: 0 4px 8px 0 rgba
 (0, 0, 0, 0.2),0 6px 20px 0 rgba
 (0, 0, 0, 0.19)
}

</style>

<body>
<div class="row">
  <div class="column">
<img src="c5.jpg"style="width:100%"
onclick="openModal();currentSlide(1)"
class="hover-shadow cursor">
</div>
<div class="column">
<img src="b1.jpg"style="width:100%"
onclick="openModal();currentSlide(2)"
class="hover-shadow cursor">
</div>

<div class="column">
<img src="c2.jpg"style="width:100%"
onclick="openModal();currentSlide(3)"
class="hover-shadow cursor">
</div>
<div class="column">
<img src="b2.jpg"style="width:100%"
onclick="openModal();currentSlide(4)"
class="hover-shadow cursor">
</div>
<div class="column">
<img src="c3.jpg"style="width:100%"
onclick="openModal();currentSlide(5)"
class="hover-shadow cursor">
</div>
<div class="column">
<img src="b3.jpg"style="width:100%"
onclick="openModal();currentSlide(6)"
class="hover-shadow cursor">
</div>
<div class="column">
<img src="c4.jpg"style="width:100%"
onclick="openModal();currentSlide(7)"
class="hover-shadow cursor">
</div>
<div class="column">
<img src="b4.jpg"style="width:100%"
onclick="openModal();currentSlide(8)"
class="hover-shadow cursor">
</div>
</div>

<div id="myModal" class="modal">
<span class="close cursor"
onclick="closeModal()">&times;</span>
<div class="modal-content">


<div class="mySlides">
<div class="numbertext">1 / 8</div>
<img src="c5.jpg"style="width:100%">
</div>
<div class="mySlides">
<div class="numbertext">2 / 8</div>
<img src="b1.jpg"style="width:100%">
</div>
<div class="mySlides">
<div class="numbertext">3 / 8</div>
<img src="c2.jpg"style="width:100%">
</div>
<div class="mySlides">
<div class="numbertext">4 / 8</div>
<img src="b2.jpg"style="width:100%">
</div>
<div class="mySlides">
<div class="numbertext">5/8</div>
<img src="c3.jpg"style="width:100%">
</div>
<div class="mySlides">
<div class="numbertext">6/8</div>
<img src="b3.jpg"style="width:100%">
</div>
<div class="mySlides">
<div class="numbertext">7/8</div>
<img src="c4.jpg"style="width:100%">
</div>
<div class="mySlides">
<div class="numbertext">8/8</div>
<img src="b4.jpg"style="width:100%">
</div>
<a class="prev" onclick="plusSlides
(-1)">&#10094;</a>

<a class="next" onclick="plusSlides
(1)">&#10095;</a>


<div class="caption-container">
  <p id="caption"></p>
</div>


<div class="column">
<img class="demo cursor"
src="c5.jpg" style="width:100%"
onclick="currentSlide(1)" alt="Car1">
</div>

<div class="column">
<img class="demo cursor"
src="b1.jpg" style="width:100%"
onclick="currentSlide(2)" alt="Bike1">
</div>

<div class="column">
<img class="demo cursor"
src="c2.jpg" style="width:100%"
onclick="currentSlide(3)" alt="Car2">
</div>

<div class="column">
<img class="demo cursor"
src="b2.jpg" style="width:100%"
onclick="currentSlide(4)" alt="Bike2">
</div>

<div class="column">
<img class="demo cursor"
src="c3.jpg" style="width:100%"
onclick="currentSlide(5)" alt="Car3">
</div>
<div class="column">
<img class="demo cursor"
src="b3.jpg" style="width:100%"
onclick="currentSlide(6)" alt="Bike3">
</div>
<div class="column">
<img class="demo cursor"
src="c4.jpg" style="width:100%"
onclick="currentSlide(7)" alt="Car4">
</div>
<div class="column">
<img class="demo cursor"
src="b4.jpg" style="width:100%"
onclick="currentSlide(8)" alt="Bike4">
</div>
  </div>
</div>


<script>

function openModal() 
{
    document.getElementById('myModal').style.display = "block";
}

function closeModal() 
{
   document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) 
{
     showSlides(slideIndex += n);
}

function currentSlide(n) 
{
   showSlides(slideIndex = n);
}



function showSlides(n) {

var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("demo");
var captionText = document.getElementById("caption");

if (n > slides.length)
{
   slideIndex = 1
}

if (n < 1) {
   slideIndex =slides.length
}

for (i = 0; i < slides.length; i++) {
   slides[i].style.display = "none";

  }

for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active","");
  }

slides[slideIndex-1].style.display ="block";

dots[slideIndex-1].className +=" active";

captionText.innerHTML =dots[slideIndex-1].alt;

}

</script>

</body>
</html>