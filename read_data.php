<?php

//read_data.php

$con=mysqli_connect("localhost","root","","date21july");
$query="SELECT * FROM users";
$result=mysqli_query($con,$query);

echo "<table class='table' id='tableData'>";
	echo"<th>Name</th><th>Email</th><th>View</th><th>Delete</th><th>Edit</th>";

 
while($row=mysqli_fetch_array($result)){

	echo '<tr class="table" id="row-'.$row['id'].'">';
	echo "<td>".$row['name'].'</td>'.'<td>'.$row['email'].'</td>'
	
	
	.'<td><span class="glyphicon glyphicon-pencil" style="color:red;" id='.$row['id'].'></span>'
	.'<td><span  class="glyphicon glyphicon-trash" style="color:red;" id='.$row['id'].'></span>'
	.'<td><span  class="glyphicon glyphicon-ok" style="color:green;" id='.$row['id'].'></span>';
	echo '</tr>';
	


}
echo "</table>";


?>


<script>
	
		$(".glyphicon-trash").click(function(){
		
			var id=$(this).attr('id');
			console.log(id);
			if(confirm('want to delete ?')){
			
				$.ajax({
				
					type:'GET',
					url:'delete_data.php',
					data:'id='+id,
					success:function(response){
						console.log(response);
						$("#message").html(response);
						$('tr#row-'+id).remove();	// to remove the deleted from display
						
							
					
					}
				
				});
			
			
			}
			
			
		
		
		});// end of delete 
		
		
		// profile starts
		
		
		
		
		$(".glyphicon-pencil").click(function(){ // to display profile
		
				//alert('okay');	
				var id=$(this).attr('id');
				$("#tableData").addClass("myList");
				$("#profile").addClass("myProfile");
				
				
				$.ajax({
				
						type:'GET',
						url:'profile.php',
						data:'id='+id,
						success:function(response){
						
							console.log(response);
							$('#profile').html(response);
						
						}
				
				
				});
		
		
		});
		$(".glyphicon-ok").click(function(){ // to edit the profile
		
			var id=$(this).attr('id');
			
			//alert(id); // to debug
			
			
			
			$.ajax({
			
			
						type:'GET',
						url:'edit.php',
						data:'id='+id,
						success:function(response){
						
							//console.log(response);
							$("#formdata").html(response);
							
							
						}
			
			
			});
			
			
		
		
		});		
		
		
		
		
		//profile ends here	
	


</script>

