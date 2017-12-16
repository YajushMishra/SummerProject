<?php


	// call php script to save data
	


?>

<style>

	.myList{
			width:60%;
			border:2px solid red;
			float:left;
	
	}
	.myProfile{
			width:35%;
			border:2px solid green;
			float:left;
			margin-left:5px;
				
	
	
	
	}


</style>


<script language='javascript' src='js/jquery-3.2.1.min.js'></script>
<link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel='stylesheet'>

<div class="col-md-12">
	<h1 align='center'>Data Entry Form</h1>
</div>
<div class='container'>
<div id='formdata'>
<form action="" method='post' class="form">
<div class='col-md-6'>
	<div class='row'>
		<label>Name</label>
		<input type='text' name='fullname'id='fullname' class='form-control' required>
	</div>
	<div class='row'>
		<label>Email</label>
		<input type='text' name='emailid'id='emailid' class='form-control' required>
	</div>
	<p>
	<div class='row'>
		<input type='submit'id='submit' name='submit' value='save' class='btn-success btn-lg'>
	</div>
</div>

</form>
</div>
<div class="col-md-4" id="message"></div>
<div class='row'>
	<div id="tableData" >
	</div>
	<div id='profile'>
	
</div>
</div>
</div>


<script>


$(function(){
		$("#submit").click(function(){
			
			var name=$('#fullname').val();
		   var email=$('#emailid').val();
	
		
			$.ajax({ // call a php program or script
		
				type:'POST',
				url :'save_data.php',
				data:'name='+name+'&email='+email, // here and is used because two variables are sent
				success:function(response){// this functions responds when sucess in sending data;
				
					
				//$("#message").html("<h3>Data is saved</h3>");			// to print html
				
				$("#message").html(response);// this displays response
				//console.log(response);		the data from echo commes into response		
					
				}		
		
			});
			
			$.ajax({
				
					type:'POST',
					url :'read_data.php',
					success:function(response){
				
						$("#tableData").html(response);					
				
					}
			});
			event.preventDefault();
		
		});
		
		$.ajax({   // to display data first time when web page opens
				
					type:'POST',
					url :'read_data.php',
					success:function(response){
				
						$("#tableData").html(response);					
				
					}
			
							
			
		});
		
	
});



</script>
	
	