<html>
<body>
<?php?>
<form action="string.php" method="post">
Enter a string: <input type="text" name="string">
<br>
<input type="submit" >
</form>
<br>
String is <?php echo $_POST["string"]?><br>
<?php
$string= $_POST["string"];

$length =strlen($string);
echo "String length is :$length <br>" ;

$reverse= strrev($string);
echo "The reverse of the string is: $reverse <br>";

$lowercase= strtolower($string);
echo "The lowercase of the string is: $lowercase <br>";

$uppercase =strtoupper($string);
echo "The uppercase of the string is : $uppercase <br>";
  
$str_arr = preg_split ("/\,/", $string);  
print_r($str_arr); 

$str_arr = explode (" ", $string);  
print_r($str_arr); 

?>

<form action="string.php" method="post">
Enter a string: <input type="text" name="string">
<br>
Enter "from" to replace : <input type="text" name="from"><br>
Enter "to" to replace : <input type="text" name="to"><br>
<br>
<input type="submit" >
</form>
<br>
String is: <?php echo $_POST["string"]?><br>
From : <?php echo $_POST["from"]?><br>
To: <?php echo $_POST["to"]?><br>
<?php
$string= $_POST["string"];
$from= $_POST["from"];
$to= $_POST["to"];

$replace =strtr($string, $from, $to);
echo $replace;

?>
</body>
</html>