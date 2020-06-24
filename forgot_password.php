<!DOCTYPE html>
<html>
<head>
	<title>Reset your password</title>
  <title>Registration form</title>
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
<legend><center><h3><b style="text-shadow:1px 1px 0 #444" class="label label-primary">WELLCOME TO USERSYSTEM</b></h3></center></legend>
<center>  <h4 >Set your password.</h4>
                   </center></legend><br>

 
<!-- Text input-->
<form class="well form-horizontal" method="post" action="forgot_password1.php" autocomplete="off" submit="true"  enctype="multipart/form-data">

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
  <label class="col-md-4 control-label" >Set Password :</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="fp1"   placeholder="Password" class="form-control"  type="password" required>
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password :</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="fp2"   placeholder="Password" class="form-control"  type="password" required>
    </div>
  </div>
</div>

<!-- Button -->
<div class="form-group text-center">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
  	<a href="user_login.php"> <button type="button"   value="Go back !" class="btn btn-warning" ><span class="	glyphicon glyphicon-arrow-left"></span>&nbsp;Go back</button></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp&nbsp&nbsp<button type="submit"  name="set" value="Set" class="btn btn-primary" >&nbsp&nbsp&nbsp&nbsp&nbspSet &nbsp&nbsp&nbsp</button>  
   
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

 <!--  <div class="container-fluid text-center">
     <div class="text-center">
  	<h4 >Set your password.</h4>
	  </div>
	        
	  <form method="post" action="forgot_password1.php" autocomplete="off">
        <div class="form-group row">
	    	<label class="col-sm-2">Email:</label>
	    	  <div>
	    	<input class="col-sm-3" type="Email" name="email" placeholder="Example@email.com" style="border:2px solid lightblue; border-radius: 6px;" required/>
		      </div>
		</div>

		<div class="form-group row">
		     <label class="col-sm-2">Set Password:</label>
		       
		         <div>
		     <input class="col-sm-3" type="password" name="fp1" style="border:2px solid lightblue; border-radius: 6px;" required/>
		         </div>
		</div>

		<div class="form-group row">
			    
		           <label class="col-sm-2">Confirm Password:</label>
		        
		        <div >
		            <input  class="col-sm-3" type="password" name="fp2" style="border:2px solid lightblue; border-radius: 6px;" required/>
		         </div>
		
		</div>

		<div class="col-sm-3">
			<input class="btn btn-primary btn-sm" type="submit" name="set" value="Set" style="border-radius:10px; width:90px; height:30px;"/>

			<a href="user_login.php"><button style="border-radius:8px;"  type="button" class="btn btn-info btn-sm" > Go back !</button></a>
		</div>
		
	</form>

  </div> -->

</body>
</html>