

<?php
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$pdesc=$_POST['pdesc'];
$cid=$_POST['cid'];
$me=$cid;

$pdo=new PDO("mysql:host=localhost;dbname=online_charity_store","root","");


if($email=='' || $psw=='' || $name==''|| $pno='')
{
  $pdo=null;
  echo("Fields  empty");
}
else
{
  
$sql="INSERT into product values('$pid','$pname','$pdesc','$me')";
$result=$pdo->exec($sql);
echo "Product added";
$pdo=null;
}

header("location:adminindex.php");
?>

