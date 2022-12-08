

<?php
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$pdesc=$_POST['pdesc'];
$cid=$_POST['cid'];
$price=$_POST['price'];
$me=$cid;

$pdo=new PDO("mysql:host=localhost;dbname=online_charity_store","root","");


if($pid=='' || $pname=='' || $pdesc==''|| $cid=''|| $price='')
{
  $pdo=null;
  echo("Fields  empty");
}
else
{
  
$sql="INSERT into product values('$pid','$pname','$price','$pdesc','$me')";
$result=$pdo->exec($sql);
echo "Product added";
$pdo=null;
}

header("location:adminindex.php");
?>

