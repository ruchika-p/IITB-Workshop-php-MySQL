<html>
<body>
<?php?>
<form action="post.php" method="post">
Subject1: <input type="number" name="A">
<br>
Subject2: <input type="number" name="B">
<br>
Subject3: <input type="number" name="C">
<br>
Subject4: <input type="number" name="D">
<br>
Subject5: <input type="number" name="E">
<br>
<input type="submit" >
</form>
<br>
Subject 1 is <?php echo $_POST["A"]?><br>
Subject 2 is <?php echo $_POST["B"]?><br>
Subject 3 is <?php echo $_POST["C"]?><br>
Subject 4 is <?php echo $_POST["D"]?><br>
Subject 5 is <?php echo $_POST["E"]?><br>
<?php
$S1= $_POST["A"];
$S2=$_POST["B"];
$S3=$_POST["C"];
$S4=$_POST["D"];
$S5=$_POST["E"];
$result=$S1+$S2+$S3+$S4+$S5;
echo "Total Marks Obtained: $result <br>" ;
echo "Total Marks: 500 <br>";
$percentage=($result/500)*100;
echo "Percentage: $percentage";
?>

</body>
</html>
