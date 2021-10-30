
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kaarwaa.N-Events </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="events.css">

	<!--Bootstrap-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    


</head>

<body>
<?php require('../header.php') ;?>
<br>

<?php error_reporting(E_ALL ^ E_NOTICE ) ?>

<?php  //Events fetch from database
 

      // **********Connect database******

  require($_SERVER['DOCUMENT_ROOT'].'/connect_db.php');

$sql = "SELECT ev_sn, ev_date, ev_type, ev_location FROM events_list";
$result = $conn->query($sql);


// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
   
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

?>
<!-- Tables -->

<!--  Event Table -->
	<div class="container table_container" >
		<h3>Events : </h3>
		<table class="table table-hover table-bordered">
			<thead class="thead">
			<tr class="head_row">
				<th >Date & Time</th>
				<th>Event Type</th>
				<th>Location</th>
			</tr>
			</thead>

			<tbody>
<?php
        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        
      ?>
      <tr>
        
        <td><?php echo  $row["ev_date"]  ?></td>
        <td><?php echo  $row["ev_type"]  ?></td>
        <td><?php echo  $row["ev_location"]  ?></td>
      </tr>
  <?php  }
}
      else {
    echo "We are sorry, data is  unavailable";
      } 

?>
			
    </tbody>
		</table>

	</div>    

  
  <!--Footer-->


<?php require('../footer.php') ;?>






<style>
	
  /*media query if screen size less than 576*/
  @media only screen and (max-width: 575px) {	
  

  }
	
	/*media query if screen size less than 768*/
	@media only screen and (max-width: 768px) {
 	.table_container
	{
		overflow: scroll;
	}
 

 
}
	@media only screen  and (min-width : 768px) {
		
		

    
}


 

</style>
     
 <script>
   
</script>    



</body>
</html>
