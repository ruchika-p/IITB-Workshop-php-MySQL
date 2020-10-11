<?php
$connect=mysqli_connect("localhost","root","","data1");

if(isset($_POST["submit"])){
	if(empty($_POST["username"]) && empty($_POST["password"]))
	{
		echo '<script>alert("Both Fields are required")</script>';
	}
	else{
		$username=mysqli_real_escape_string($connect,$_POST["username"]);
		$password=mysqli_real_escape_string($connect,$_POST["password"]);
		$password=md5($password);
		$query="INSERT INTO md5 (username, password) VALUES('$username', '$password')";
		if (mysqli_query($connect, $query)) {
			echo'<script>alert("Submitted Successfully")</script>';
		}
	}
}

?>
<html>
<body>

<form method="post">
	<label>Enter username</label>
	<input type="text" name="username"  /><br>
	<label>Enter password</label>
	<input type="text" name="password"   /><br>
	<input type="submit" name="submit" >
	
</form>


</body>
</html>