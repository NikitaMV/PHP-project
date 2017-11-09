<?php
	
	sleep(1);
	
	$conn = mysqli_connect('localhost:3306', 'root', '123', 'Belinfo');
	
	if (!$conn) 
	{
		die('Ошибка соединения с базой данных: ' . mysqli_error($conn));
	}
	
	$city=$_POST["city"];
	
	$sql = "SELECT square FROM city where cityName = '".$city."'";
	
	$result = mysqli_query($conn,$sql);		

	if (mysqli_num_rows($result)>0)
	{		
		$record = mysqli_fetch_assoc($result);
		echo $record["square"];
	}
	else
		echo "Город не найден";
	
	mysqli_close($conn);
	
?>

