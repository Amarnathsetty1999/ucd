<?php

session_start();

// if($_SESSION['status']!="Active")
// {
//     header("location:login.html");
// }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Charity Store</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/homestyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>


<script type="text/javascript">
    function setCookie(key, value, expiry) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (expiry *60*1000));
        document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
    }

    function getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
        return keyValue ? keyValue[2] : null;
    }

    function eraseCookie(key) {
        var keyValue = getCookie(key);
        setCookie(key, keyValue, '-1');
    }

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

$("#title").click(function()
{
   location.replace('index.php');
});



// $("#abtus").click(function()
// {
//   location.replace('index.php#abt');
// });

$("#about").click(function()
{
  email=getCookie('email');
  
  $.post( "aboutMe.php", {email:email }).done(function( data ) 
    { 
       $("#me").html(data);
    });
});



});
</script>

<body>

<div class="navbar navbg" id="nav">

  <a class="navbar-brand bgs" href="#" id="title">Online charity store</a>


  <a href="#abt" id="abtus">About us</a>

  <a href="#" id="about"><?php
  if(array_key_exists('email', $_COOKIE))
  {
    echo $_COOKIE['email'];
  }
  else
  {
    echo "Sign in";
  }
  ?></a>
  
</div>

<div id="me">
<div id="rec"><?php include('home.html'); ?>

<div class="container-fluid mt-0">
  <div class="row">
    <div class="col-md-4 p-3  text-white">
    <div class="container-fluid mt-3">
    <div class="card" style="width:350px">
    <img class="card-img-top" src="images/pic2.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="pur.php" class="btn btn-primary">Explore Category</a>
    </div>
    </div>
    </div>
  </div>






     <div class="col-md-4 p-3  text-white">

    <div class="container-fluid mt-3">
    <div class="card" style="width:350px">
    <img class="card-img-top" src="images/pic1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="pur.php" class="btn btn-primary">Explore Category</a>
    </div>
  </div>
    </div>
  </div>



    <div class="col-md-4 p-3  text-white">
    <div class="container-fluid mt-3">
    <div class="card" style="width:350px">
    <img class="card-img-top" src="images/pic3.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="pur.php" class="btn btn-primary">Explore Category</a>
    </div>
  </div>
    </div>
  </div>  
  </div>
</div>

<div class="about-section" id="abt">
  <h1 style='overflow:hidden'>About Us</h1>
  <p>Online charity store, is operated by opus corporation 
      by Gowtham and co in the year 2021, with its first branch in shimoga.</p>
  <!-- <p>Resize the browser window to see that this page is responsive by the way.</p> -->
</div>

<h2 style="text-align:center; margin-top:20px;overflow:hidden">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <!-- <img src="/w3images/team1.jpg" alt="Jane" style="width:100%"> -->
      <div class="container">
        <h2 style='overflow:hidden'>Gowtham S</h2>
        <p class="title">CEO & Founder</p>
        <p>7338313997</p>
        <p>gowthamsgs2016@gmail.com</p>
        <!-- <p><button class="button">Contact</button></p> -->
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card" id="ex">
      <!-- <img src="/w3images/team2.jpg" alt="Mike" style="width:100%"> -->
      <div class="container">
        <h2 style='overflow:hidden'>Subhan Shariff</h2>
        <p class="title"> Co-founder </p>
        <p>9739671126</p>
        <p>subhansha063@gmail.com</p>
        <!-- <p><button class="button">Contact</button></p> -->
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <!-- <img src="/w3images/team3.jpg" alt="John" style="width:100%"> -->
      <div class="container">
        <h2 style='overflow:hidden'>Bharath K G</h2>
        <p class="title">Developer</p>
        <p> 8618415646</p>
        <p>bharathkg99@gmail.com</p>
        <!-- <p><button class="button">Contact</button></p> -->
      </div>
    </div>
  </div>
</div>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>