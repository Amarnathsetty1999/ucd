
<?php
session_start();
//$ste=$_GET['pi'];
// $pno=$_POST['pp'];
$pdo=new PDO("mysql:host=localhost;dbname=online_charity_store","root","");
$search = $_POST['search'];

$sql = "select * from products where name like '%$search%'";

$result=$pdo->query("select * from product where pname like '%$search%'");
$n=0;
echo <<<END
<div class="info"><b>Searh Results</b></div><br>
<table border class="center orders"><tr class="tr">
<th> Product  </th><th style='width:100px'> Price </th><th> Description  </th></tr>
END;
while(($row=$result->fetch()))
{
    $pname=$row['pname'];
    $desc=$row['pdesc'];
    $price=$row['price'];
    if(($n==0))
    {
        $n=1;
 

    }
  
echo <<<END

<tr>

<td>$pname</td>
<td>$price</td>
<td>$desc</td>
</tr>


END;


}

echo <<<END
<br>
<a href="pur.php" >Continue Shopping</a>
END;
?>