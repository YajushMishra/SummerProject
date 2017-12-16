<?php


$id=$_GET['id'];

$con=mysqli_connect("localhost","root","","date21july");
$query="SELECT * FROM users WHERE id=".$id;
$result=mysqli_query($con,$query);

$row=mysqli_fetch_assoc($result);





//echo ($row['id']);



?>

<form action="" method='post' class="form">
<input type='hidden' name='id' id='id' value='<?=$id?>'> 
<div class='col-md-6'>
	<div class='row'>
		<label>Name</label>
		<input type='text' name='fullname'id='fullname' class='form-control' value="<?=$row['name']?>" required>
	</div>
	<div class='row'>
		<label>Email</label>
		<input type='text' name='emailid'id='emailid' class='form-control' value="<?=$row['email']?>" required>
	</div>
	<p>
	<div class='row'>
		<input type='button'id='update' name='submit' value='update' class='btn-success btn-lg'>
	</div>
</div>

</form>

<script>

		$("#update").click(function(){ // function to update data on 
		
		
			var name=$('#fullname').val();
			var email=$('#emailid').val();
			var id=$('#id').val();
			//console.log(name);
			//alert (id); // for debuging
			
				$.ajax({ // call a php program or script
		
				type:'POST',
				url :'update_data.php',
				data:'name='+name+'&email='+email+'&id='+id, // here and is used because two variables are sent
				success:function(response){// this functions responds when sucess in sending data;
				
					
				
					$("#message").html(response);// this displays response
					//console.log(response);		//the data from echo commes into response		
					
					//alert (response);
					
					
					$("#row-"+id).find('td').eq(0).text(name);
					$("#row-"+id).find('td').eq(1).text(email);
					
										
					
					
					
				}
				
			});
	
		
		
		
		
		
		});
		
	





</script>







