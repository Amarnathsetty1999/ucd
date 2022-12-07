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
	<title>Retail Store</title>

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
        expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
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

$("#pur").click(function()
{
  location.replace('pur.php');
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

$("#cart").click(function()
{
  email=getCookie('email');
  
  $.post( "getCartD.php", {email:email }).done(function( data ) 
    { 
       $("#me").html(data);
    });

  $.post( "getCountCart.php", {email:email }).done(function( data ) 
    { 
       $("#s").html(data);
    });

});

$("#ck").click(function()
{
  email=getCookie('email');
  
  $.post( "getCart.php", {email:email  }).done(function( data ) 
    { 
       $("#me").html(data);
    });

});

$("#lo").click(function()
{
  email=getCookie('email');
  eraseCookie('email');

  $.post( "logout.php", {email:email }).done(function( data ) 
    { 
       location.replace('index.php');
    });
});

});
</script>

<body>

<div class="navbar navbg" id="nav">

 <div id="navbar navbar-expand-lg navbar-dark bg-dark static-top">
 <a class="navbar-brand" href="#">
      <img src="images/trt.png" alt="..." height="36">
    </a> 

</div> 
  <a class="navbar-brand bgs" href="#" id="title">Online Retail store</a>

  <a href="#" id="pur">Purchase</a>

  <a href="#abt" id="abtus">About us</a>

  <a href="#" id="cart">Cart(<span id="s"></span>)<i class="fa fa-shopping-cart"></i></a>

  <a href="#" id="ck">Check out</a>

  <a href="#" id="lo">Logout</a>

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
<div id="rec"><?php include('home.html'); ?></div>
<div class="about-section" id="abt">

 
  <p><a href="#" id="pur">Purchase</a></p>
  <!-- <p>Resize the browser window to see that this page is responsive by the way.</p> -->

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>