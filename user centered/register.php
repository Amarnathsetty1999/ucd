<?php
$email=$_POST['email'];
$psw=$_POST['psw'];
$name=$_POST['name'];
$pno=$_POST['pno'];

$pdo=new PDO("mysql:host=localhost;dbname=test","root","");
$result=$pdo->query("select * from users where email='$email'"); 
if(($row=$result->fetch()))
{
  echo "Specified email already existss";
  $pdo=null;
  exit;
}
if($email=='' || $psw=='' || $name==''|| $pno='')
{
  $pdo=null;
  echo("Fields  empty");
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 
  echo ("Invalid Email");
}
else
{
  $salt = "7sf7a889x".$psw."di9aj2";
        $hashed = hash('sha512', $salt);
$sql="INSERT into users values('$email','$hashed','$name','$pno')";
$result=$pdo->exec($sql);
echo "Registered successfully";
$pdo=null;
}
?>