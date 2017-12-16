<?php
	// delete_data.php
	
	
	$id=$_GET['id'];
	$con=mysqli_connect("localhost","root","","date21july");
	$query="DELETE FROM users WHERE id='$id'";
	$result=mysqli_query($con,$query);
	if($result)
		echo 'record is delete id=',$id;
	else
		echo 'Database Error!';
		



?>