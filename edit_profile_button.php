<?php
session_start();
if($_SESSION['u_login_id']==true)
{

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

 <div class="container">
<fieldset>

<!-- Form Name -->
<legend><center><h3><b style="text-shadow:1px 1px 0 #444; text-transform: capitalize;" class="label label-default"><?php echo $_SESSION["user_sess_name"];?></b></h3></center></legend>
<center>  <h4 >Edit  Your profile</h4>
                   </center></legend><br>

 
<!-- Text input-->
<form class="well form-horizontal" method="post" action="?" autocomplete="off" submit="true"  enctype="multipart/form-data">

<!--email -->
 <div class="form-group">
  <label class="col-md-4 control-label">E-Mail :<sup style="color: red; font-size:8px;">(You can not change email)</sup></label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="edit_email" value="<?php echo $_SESSION['user_sess_email']?>"  class="form-control"  type="email"   data-toggle="popover" title="Email can't be change" readonly="true">
    </div>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >First Name:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="edit_fn" value="<?php echo $_SESSION["user_sess_name"]?>"  class="form-control"  type="text" required>
    </div>
  </div>
</div>
      
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Last Name:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="edit_ln" value="<?php echo $_SESSION["user_last_name"]?>"  class="form-control"  type="text" required>
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Date of Birth:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="edit_dob" value="<?php echo $_SESSION["user_sess_dob"]?>"    class="form-control"  type="date" required>
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Contact No:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="edit_cn" value="<?php echo $_SESSION['u_cn']?>"    class="form-control"  type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  maxlength="11" required>
    </div>
  </div>
</div>


<!-- Button -->
<div class="form-group text-center">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
  	<a href="userprofile.php"> <button type="button"   value="Go back !" class="btn btn-warning" ><span class="	glyphicon glyphicon-arrow-left"></span>&nbsp;Go back</button></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp&nbsp&nbsp<button type="submit"  name="update" value="Update" class="btn btn-primary" >&nbsp&nbsp&nbsp&nbsp&nbspUpdate &nbsp&nbsp&nbsp</button>  
   
  </div>
</div>

</fieldset>

</form>
</div> 
</div>
<center>
   <h5  style="color:#4ddbff;"  data-toggle="popover" title="All Copyright reserved."><span class="glyphicon glyphicon-font"></span> &nbsp;Copyright©2020 - Sandeep</h5> 
</center>
 </div>



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
} //End of check if sess  id
else{
	echo header('location:user_login.php');
} //End of else part check if sess  id
?>

