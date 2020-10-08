<?php

$name= $_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"]; 

$size= $_FILES["myfile"]["size"];
$temp =$_FILES["myfile"]["tmp_name"];
echo "name of the file is $name <br>" ;
echo "type of the file is $type <br>";
echo "size of the file is $size<br>" ;
?>
