<html>
	<head>
	<title>
	 Prime Numbers
	 </title>
 </head>
	<style>
	body {
	 font-family:arial;
	 font-size :20px;
	 background-color:violet;	
}
input[type=submit]
	{
font-size: 20px; 
font-weight: bold;
font-family: arial; 
background-color: yellow;
	}
	</style>
<body>
 <?php
 error_reporting(0);		
 $a=$_POST['lower'];
 $b=$_POST['upper'];	
 if(isset($_POST['clear']))
{
$a="";
$b="";
}	
 ?>		
			<BR>
<h3>Range in Prime Numbers</h3>
<form method="post" action="prime.php" name="prime_me">
Number N1   <input type="text" name="lower" 
	 size="5" value="<?php echo $a; ?>" autofocus>
     	 	 
Number N2   <input type="text" name="upper" 
	 size="5" value="<?php echo $b; ?>">
<br><br>
<input type="submit" name="check" value="Prime numbers in the range N1 to N2">
     	 	 	
<input type="submit" name="clear" value="Clear">
</form>
	<h3> DISPLAY RESULTS </h3>
<?php
if(isset($_POST['check']))
{
$a=$_POST['lower'];
$b=$_POST['upper'];
$flag=0;
for($a;$a<$b;$a++)
{
for($j=2;$j<$a;$j++)
{
if($a%$j==0)
{
$flag=1;
}
}
if($flag==0)
{
echo " ".$a." ";
}
$flag=0;
}
}
?>
</body>
</html>
