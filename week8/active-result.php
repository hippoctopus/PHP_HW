<?php
	$link = @mysqli_connect('localhost','root','cc11242','phphw');
	if($link){
		echo "DB Connected!";
	}
	else{
		echo "DB Connection Failed";
	}

	$uname=$_POST["uname"];
	$gender=$_POST["gender"];
	$ID=$_POST["ID"];
	$list=$_POST["list"];
	$inter=$_POST["inter"];
	$habit=implode(",", $habit);
	$color=$_POST["color"];

	echo "你的名字：".$uname."</br>";
	echo "性別：".$gender."</br>";
	echo "身分證：".$ID."</br>";
	echo "住哪：".$list."</br>";
	echo "興趣是：".$habit."</br>";
	echo "髮色：".$color."</br>";

	sql="INSERT INTO hw5 (name,gender,ID,habit,color) VALUES ('$uname','$gender','$ID','$list','$habit','$color')";

	$result=mysqli_query($link,$sql);
	$result=mysqli_query($link,"SELECT * FROM hw5");

	echo "<table border=1>";
		while($row=mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td>";
			echo $row["name"];
			echo "</td><td>";
			echo $row["gender"];
			echo "</td><td>";
			echo $row["ID"];
			echo "</td><td>";
			echo $row["habit"];
			echo "</td><td>";
			echo $row["color"];
			echo "</td>";
		}

	echo "</tr>";

?>
