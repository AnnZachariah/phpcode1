	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="first";
	$p_id=$_POST["product_id"];
	$p_name=$_POST["product_name"];
	$p_price=$_POST["product_price"];
	$p_des=$_POST["product_des"];
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	$sql="create table he(roll INT(20),bname VARCHAR(20)";
	mysqli_query($conn,$sql);
	mysqli_close($conn);

//insert into productdetails(productid,productname,productprice,productdes) values($p_id,$p_name,$p_price,$p_des)	?>