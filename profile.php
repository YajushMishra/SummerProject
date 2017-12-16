<?php

// profile.php

//echo 'link sucessfull';

	$id=$_GET['id'];
	$con=mysqli_connect("localhost","root","","date21july");
	$query="SELECT * FROM users WHERE id='$id'";
	$result=mysqli_query($con,$query);

	$row=mysqli_fetch_assoc($result); // this gives only associative array
	
?>

<h3>profile<h3>
<table class='table table-stripted'>
	<tr><td><h4>Name : <?=$row['name']?></h4></td></tr>
	<tr><td><h5>Email : <?=$row['email']?></h5></td></tr>
</table>
	