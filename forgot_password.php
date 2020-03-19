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
  	<h4>Set your password.</h4>
	  </div>
	  <form method="post" action="?">
        <div class="form-group row">
	    	<div class="col-sm-2">
	    	<label>Email:</label>
	    	</div>
	    	  <div class="col-sm-6">
	    	<input type="Email" name="email" placeholder="Example@email.com" style="border:2px solid lightblue; border-radius: 6px;" required/>
		      </div>
		</div>

		<div class="form-group row">
			    <div class="col-sm-2">
		     <label>Set Password:</label>
		        </div>
		         <div class="col-sm-6">
		     <input type="password" name="fp1" style="border:2px solid lightblue; border-radius: 6px;" required/>
		         </div>
		</div>

		<div class="form-group row">
			    <div class="col-sm-2">
		           <label>Confirm Password:</label>
		        </div>
		        <div class="col-sm-6">
		            <input type="password" name="fp1" style="border:2px solid lightblue; border-radius: 6px;" required/>
		         </div>
		
		</div>

		<div class="col-sm-6">
			<input class="btn btn-primary btn-sm" type="submit" name="set" value="Set" style="border-radius:10px; width:100px; height:40px;"/>
		</div>
	</form>
	 
  </div>

  <?php
$db=mysqli_connect("localhost","root","","ragistration");


  ?>
</body>
</html>