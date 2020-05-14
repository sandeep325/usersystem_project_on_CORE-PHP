<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
  
	  <title>Edit your profile</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#f2f2f2 ">

  <div class="container-fluid text-center">
     <div class="text-center">
  	<h4 >Change password</h4>
  
	  </div>
	        
	  <form method="post" action="?" autocomplete="off">
        

		<div class="form-group row">
		     <label class="col-sm-2">Current password:</label>
		       
		         <div>
		     <input class="col-sm-3" type="password" name="pp" style="border:2px solid lightblue; border-radius: 6px;" required/>
		         </div>
		</div>

		<div class="form-group row">
			    
		           <label class="col-sm-2"> Set new password:</label>
		        
		        <div >
		            <input  class="col-sm-3" type="password" name="new_pass" style="border:2px solid lightblue; border-radius: 6px;" required/>
		         </div>
		     </div>
		         <div class="form-group row">
			    
		           <label class="col-sm-2"> Confirm new password:</label>
		        
		        <div >
		            <input  class="col-sm-3" type="password" name="con_pass" style="border:2px solid lightblue; border-radius: 6px;" required/>
		         </div>
		
		</div>

		<div class="col-sm-3">
			<input class="btn btn-primary btn-sm" type="submit" name="update_pass" value="Update" style="border-radius:10px; width:90px; height:30px;"/>

			<a href="userprofile.php"><button style="border-radius:8px;"  type="button" class="btn btn-info btn-sm" > Go back !</button></a>
		</div>
		
	</form>

  </div>

  <h5 align="center" style="color:#4ddbff; margin-top:270px;"><span class="glyphicon glyphicon-font"></span> &nbsp;Copyright©2020 - Sandeep</h5> 
</body>
</html>

<?php

$db=mysqli_connect("localhost","root","","ragistration");
if(isset($_POST['update_pass']))
{

$pp=$_POST['pp'];
$new_pass=$_POST['new_pass'];
$con_pass=$_POST['con_pass'];
$ses_u_id=$_SESSION['u_login_id'];

 $sq="SELECT * FROM rag WHERE id='$ses_u_id' ";
  $sq_r= mysqli_query($db,$sq);
  $row_fatch= mysqli_fetch_assoc($sq_r);
  $u_pass=$row_fatch['password'];
if ($u_pass!=$pp)
 {
 	?>
 	<script>
  alert("invalid your Current password, please enter  Correct password");
  window.open('change_password.php','_self');
</script>
 	<?php
 }
 else{
 if($new_pass!=$con_pass)
 {
 	?>
 	<script>
  alert("'New password' and 'confirm password' are mismatch.");
  window.open('change_password.php','_self');
</script>
<?php
 }
 else
            {

           $q="UPDATE rag SET password='$new_pass' WHERE id='$ses_u_id'";

           $r=mysqli_query($db,$q);
               if($r)
               {
               	?>
                <script>
  alert("password changed successfully");
 window.location='userprofile.php';
  
</script>
<?php
               }
               else

               {
               	?>
               	 <script>
            alert("Something went wrong");
  window.open('change_password.php','_self');
</script>
<?php
               }

   
       }


}
}
?>