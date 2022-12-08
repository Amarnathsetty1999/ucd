<?php

$pdo=new PDO("mysql:host=localhost;dbname=online_charity_store","root","");
$result=$pdo->query("select * from category"); 
$cat="";
while(($row=$result->fetch()))
{
   $cname=$row['cname'];
   $cat.=$cname."#";
  
}
// Electronics#Utility#
$pdo=null;
echo $cat;
?>

