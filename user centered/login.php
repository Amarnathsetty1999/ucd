<?php
session_start();
$_SESSION['status']="Active";
$email=$_POST['email'];
$psw=$_POST['psw'];

$pdo=new PDO("mysql:host=localhost;dbname=test","root","");
$salt = "7sf7a889x".$psw."di9aj2";
        $hashed = hash('sha512', $salt);
$result=$pdo->query("select * from users where email='$email' and psw='$hashed'");

if(($row=$result->fetch()))
{
  echo "Success";
}

else
{
  echo "Failure";
}
$pdo=null;
?>