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
    <!-- <form class="well form-horizontal" action=" " method="post"  id="contact_form"> -->
<fieldset>

<!-- Form Name -->
<legend><center><h3><b style="text-shadow:1px 1px 0 #444; text-transform: capitalize;" class="label label-default"><?php echo $_SESSION["user_sess_name"];?></b></h3></center></legend>
<center>  <h4 >Change password</h4>
                   </center></legend><br>

 
<!-- Text input-->
<form class="well form-horizontal" method="post" action="?"  autocomplete="off" submit="true"  enctype="multipart/form-data">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Current password:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="pp"   placeholder="Password" class="form-control"  type="password" required>
    </div>
  </div>
</div>
      
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Set new password:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="new_pass"   placeholder="Password" class="form-control"  type="password" required>
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Confirm new password:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="con_pass"   placeholder="Password" class="form-control"  type="password" required>
    </div>
  </div>
</div>

<!-- Button -->
<div class="form-group text-center">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
  	<a href="userprofile.php"> <button type="button"   value="Go back !" class="btn btn-warning" ><span class="	glyphicon glyphicon-arrow-left"></span>&nbsp;Go back</button></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp&nbsp&nbsp<button type="submit"  name="update_pass" value="Update" class="btn btn-primary" >&nbsp&nbsp&nbsp&nbsp&nbspSave &nbsp&nbsp&nbsp</button>  
   
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

} //End of check if sess  id
else
{
  echo header('location:user_login.php');
  
} //End of else part check if sess  id
?>