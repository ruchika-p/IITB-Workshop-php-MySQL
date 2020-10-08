<?php
$Name=$_POST['Name'];
$Subject1=$_POST['Subject1'];
$Subject2=$_POST['Subject2'];
$Subject3=$_POST['Subject3'];
$Subject4=$_POST['Subject4'];
$Subject5=$_POST['Subject5'];

$TotalObtained=$Subject1+$Subject2+$Subject3+$Subject4+$Subject5;
$TotalMarks=500;
echo "Name of the student is: $Name <br>";
echo " Marks obtained in each subject: <br>";
echo "Subject 1 marks:$Subject1 <br>";
echo "Subject 2 marks:$Subject2 <br>";
echo "Subject 3 marks:$Subject3 <br>";
echo "Subject 4 marks:$Subject4 <br>";
echo "Subject 5 marks:$Subject5 <br>";
echo "Total Marks Obtained: $TotalObtained <br>" ;
echo "Total Marks: $TotalMarks <br>";
$Percentage=($TotalObtained/500)*100;
echo "Percentage: $Percentage <br>";
if(!empty($Name)||!empty($Subject1)||!empty($Subject2)||!empty($Subject3)||!empty($Subject4)||!empty($Subject5)){
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="result";
	$conn=new mysqli($host, $dbUsername, $dbPassword,$dbname);
	

if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysql_connect_error());
	}

	else{
		$SELECT ="SELECT Name From class1 where Name =? Limit 1";
		$INSERT=" INSERT Into class1(Name, Subject1, Subject2, Subject3, Subject4, Subject5, TotalObtained, TotalMarks, Percentage)values(?,?,?,?,?,?,?,?,?)";

		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $Name);
		$stmt->  execute();
		$stmt->bind_result($Name);
		$stmt->store_result();
		$rnum=$stmt->num_rows;

		if ($rnum==0){
			$stmt->close();
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("siiiiiiii",$Name, $Subject1, $Subject2, $Subject3, $Subject4, $Subject5, $TotalObtained, $TotalMarks, $Percentage);
			$stmt->execute();
			echo"New record inserted !!";;
		}else{
			echo "No record inserted because this name already exists <br>";
		}

	

		$stmt->close();
		$conn->close();



		}

}else{
		echo "All field required";
		die();
		
	}

?>