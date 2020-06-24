<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      
</head>
<body style="background-color:#f2f2f2 ">

        <div class="container">
<fieldset>

<!-- Form Name -->
<legend><center><h3><b style="text-shadow:1px 1px 0 #444" class="label label-primary">WELLCOME TO USERSYSTEM</b></h3></center></legend>
<center><img src="logo.jpg" alt="Logo" class="img-circle col-4 mx-auto text-center" />  
                   </center></legend><br>

 
<!-- Text input-->
<form class="well form-horizontal" method="post" action="user_login1.php" autocomplete="off" submit="true"  enctype="multipart/form-data">

       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail :</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="email" required="true" >
    </div>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Password :</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="pass"   placeholder="Password" class="form-control"  type="password" required>
    </div>
  </div>
</div>

<!-- Button -->
<div class="form-group text-center">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp<button type="submit" type="submit" name="login" value="login" class="btn btn-info" >&nbsp&nbsp&nbsp&nbsp&nbspLogin &nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>

</form>
</div> 
</div>
<center>
<h5><a href="forgot_password.php">Forgot password ?</a></h5>
  <h5><a href="index.php"> | signup |</a></h5>  
  <h5  style="color:#4ddbff;"  data-toggle="popover" title="All Copyright reserved."><span class="glyphicon glyphicon-font"></span> &nbsp;Copyright©2020 - Sandeep</h5> 
</center>
 </div>


</body>
</html>