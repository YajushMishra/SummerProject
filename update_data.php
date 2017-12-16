<?php

$n=$_REQUEST['name'];
$e=$_REQUEST['email'];
$id=$_REQUEST['id'];



$con=mysqli_connect("localhost","root","","date21july");

//echo $id;

$query="UPDATE users SET name='$n',email='$e' WHERE id=".$id;

$result=mysqli_query($con,$query);

if($result)
{
	echo 'data updated';

}else{

	echo 'data is update';

}






?>