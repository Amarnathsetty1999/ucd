<?php

session_start();

// if($_SESSION['status']!="Active")
// {
//     echo "Please login in before purchasing";
//     header("location:login.php");
// }

if(!array_key_exists('email', $_COOKIE))
{
    echo "Please login before Purchasing" ;
    
}
else
{
    
    date_default_timezone_set("Asia/Calcutta");
$pid=$_POST['pid'];
$email=$_POST['email'];
$qt=1;
$dt=date('Y-m-d H:i:s');
$pdo=new PDO("mysql:host=localhost;dbname=test","root","");
$res=$pdo->query("select * from product where pid='$pid'");
if(($r=$res->fetch()))
{
    $price=$r['price'];
}
$pdo->query("insert into orders values('$pid','$email','$dt','$qt','$price')");
$pdo=null;
echo "Order placed successfully";

}


?>