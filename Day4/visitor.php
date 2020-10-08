<?php
$file =fopen("visits.txt", "w");
session_start();
$_SESSION['v']=$_SESSION['v']+1;
$count=$_SESSION['v'];
fwrite($file, $count);

?>

<?php
$fi=file_get_contents("visits.txt");
$count_read="Visits: ".$fi;
echo $count_read;
?>