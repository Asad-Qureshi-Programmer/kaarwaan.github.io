
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kaarwaa.N- Admin Login </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="admin_login.css">

	<!--Bootstrap-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    

</head>

<body>
<?php require('../header.php') ;?>
 <br>
   <!-- Login Form  -->

   
    

    <div class="container donation_form_container" style="max-width: 450px;">
         <form action="admin_login.php" method="POST" enctype="multipart/form-data" >
            <div class="container-fluid inside_form_container">
                <h3><strong>Admin Login</strong></h3>
                <hr>
                
                
                <label for="admin_name"><b>User Id :</b></label>
                <input type="text" name="admin_name" required  placeholder="Your unique id" ><br>

                
                
                
                    <label for="admin_pass"><b>Password :</b></label>
                    <input  type="password" required minlength="6" name="admin_pass" placeholder="Enter Password">
                

                <div class="clearfix">
            
                    <button  type="submit"   name="admin_login_btn" >Login</button>
                </div>
          </div>     
      </form>
</div>

<br>

  <!--Footer-->


<?php require('../footer.php') ;?>




<style>
	
  /*media query if screen size less than 576*/
  @media only screen and (max-width: 575px) {	


  }
	
	/*media query if screen size less than 768*/
	@media only screen and (max-width: 768px) {
  
 

 
}
	@media only screen  and (min-width : 768px) {
		
		
 



}

 

</style>
     
 <?php

if(isset($_REQUEST['admin_login_btn']))
        {
          ?>
          <script type="text/javascript">alert('Sorry! Service Unavailbale.')</script>
          exit();
<?php
}
?>

</body>
</html>
