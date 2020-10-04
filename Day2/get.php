
<html>
<body>
<?php?>
<form action="get.php" method="get">
Side1: <input type="number" name="A" >
<br>
Side2: <input type="number" name="B">
<br>
Side3: <input type="number" name="C">
<br>
<input type="submit" >
</form>
<br>
Side 1 is <?php echo $_GET["A"]?><br>
Side 2 is <?php echo $_GET["B"]?><br>
Side 3 is <?php echo $_GET["C"]?><br>
<?php
$S1= $_GET["A"];
$S2=$_GET["B"];
$S3=$_GET["C"];

if($S1==$S2&&$S2==$S3&&$S3==$S1)
	echo"Its an equilateral triangle";
elseif($S1==$S2||$S2==$S3||$S3==$S1)
	echo"Its an isosceles triangle";
elseif (($S1*$S1)+($S2*$S2)==($S3*$S3)) 
	echo "Its a right angled triangle";
else
	echo "Its a scalene triangle";
?>

</body>
</html>
