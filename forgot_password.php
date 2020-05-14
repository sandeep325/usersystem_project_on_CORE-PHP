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
  <div class="container-fluid text-center">
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

  </div>

  <h5 align="center" style="color:#4ddbff; margin-top:270px;"><span class="glyphicon glyphicon-font"></span> &nbsp;Copyright©2020 - Sandeep</h5> 
</body>
</html>