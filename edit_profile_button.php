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
  	<h4 >Edit  Your profile</h4>
	  </div>
	        
	  <form method="post" action="?" autocomplete="off">
        <div class="form-group row">
	    	<label class="col-sm-2">Email:<sup style="color: red; font-size:8px;">(You can not change email)</sup> </label>
	    	  <div>
	    	<input class="col-sm-3" type="Email" name="edit_email" value="<?php echo $_SESSION['user_sess_email']?>" style="border:2px solid lightblue; border-radius: 6px;" readonly/>
		      </div>
		</div>

		<div class="form-group row">
		     <label class="col-sm-2">First Name:</label>
		       
		         <div>
		     <input class="col-sm-3" type="text" name="edit_fn" value="<?php echo $_SESSION["user_sess_name"]?>" style="border:2px solid lightblue; border-radius: 6px;" required/>
		         </div>
		</div>
		<div class="form-group row">
		     <label class="col-sm-2">Last Name:</label>
		       
		         <div>
		     <input class="col-sm-3" type="text" name="edit_ln" value="<?php echo $_SESSION["user_last_name"]?>" style="border:2px solid lightblue; border-radius: 6px;" required/>
		         </div>
		</div>

		<div class="form-group row">
			    
		           <label class="col-sm-2">Date of Birth:</label>
		        
		        <div >
		            <input  class="col-sm-3" type="date" name="edit_dob" value="<?php echo $_SESSION["user_sess_dob"]?>" style="border:2px solid lightblue; border-radius: 6px;" required/>
		         </div>
		
		</div>
       <div class="form-group row">
		     <label class="col-sm-2">Contact No:</label>
		       
		         <div>
		     <input class="col-sm-3" type="text" name="edit_cn" value="<?php echo $_SESSION['u_cn']?>" style="border:2px solid lightblue; border-radius: 6px;" required/>
		         </div>
		</div>
		<div class="col-sm-3">
			<input class="btn btn-primary btn-sm" type="submit" name="update" value="Update" style="border-radius:10px; width:70px; height:30px;"/> &nbsp;

			<a href="userprofile.php"><button style="border-radius:8px; width:70;"  type="button" class="btn btn-info btn-sm" > Go back !</button></a>
		</div>
		
	</form>

  </div>

  <h5 align="center" style="color:#4ddbff; margin-top:210px;"><span class="glyphicon glyphicon-font"></span> &nbsp;Copyright©2020 - Sandeep</h5> 
</body>
</html>
		   
<?php

$db=mysqli_connect("localhost","root","","ragistration");

if(isset($_POST['update']))
{

$edit_fn=$_POST['edit_fn'];
$edit_ln=$_POST['edit_ln'];
$edit_dob=$_POST['edit_dob'];
$edit_cn=$_POST['edit_cn'];

 $log_user_id=$_SESSION['u_login_id'];
 
 $q="UPDATE rag SET first_name ='$edit_fn', last_name ='$edit_ln', dob ='$edit_dob' ,contact_no='$edit_cn' WHERE id='$log_user_id' ";
  $r=mysqli_query($db,$q);
if($r)
{
	?>
	<script>
		alert("Your profile is updated successfully");
		window.location='userprofile.php';
	</script>

<?php
}
else
{
	?>
         <script>
  alert("Cann't updated profile");
 window.location='edit_profile_button.php';
  
</script>

?>
<?php

}
  
}

mysqli_close($db);
?>

