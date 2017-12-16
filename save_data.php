<?php

//echo '<pre>';

//print_r($_REQUEST);	


// saving data in mysql database;

$n=$_REQUEST['name'];
$e=$_REQUEST['email'];


$con=mysqli_connect("localhost","root","","date21july");
$query="INSERT INTO users(name,email) VALUES('$n','$e')";
$result=mysqli_query($con,$query);
if($result)
{
	echo 'data is stored';

}else{

	echo 'data is not stored';

}







?>