<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#f2f2f2 ">
   <div class="container-fluid text-center ">
   <h4 align="center" style="color:#3333ff;"> WELLCOME! TO <b style="text-shadow: 6px 2px 3px lightblue; text-red">USERSYSTEM</b></h4>
	<h4 align="center" style="color:#4ddbff;">Register your self.</h4>
<h5 align="center" style="color:#ff4d4d;">If you are already registerd please login below.</h5>
   
	<form  method="post" action="database_form1.php" autocomplete="off" submit="true"  enctype="multipart/form-data">
		<div class="form-group row">
		<label class="col-sm-2">First Name  : <span style="color: red; font-size: 20px;">*</span></label> 
		<div><input style="border:2px solid lightblue; border-radius: 4px;" class="col-sm-6 " type="text" name="fn" class="form-control"required></div>
        </div>
		
		<div class="form-group row">
		<label class="col-sm-2">Last Name  :<span style="color: red; font-size: 20px;">*</span></label>
		<div><input style="border:2px solid lightblue; border-radius: 4px;" class="col-sm-6" type="text" name="ln"class="form-control" required></div> 
         </div>
         <div class="form-group row">
         <label class="col-sm-2">Date of birth:<span style="color: red; font-size: 20px;">*</span></label>
		<div><input style="border:2px solid lightblue; border-radius: 4px;" class="col-sm-6" type="date" name="dob"class="form-control"class="form-control" required> </div>
		 </div>
		 <div class="form-group row">
		<label class="col-sm-2" >Email id:<span style="color: red;font-size: 20px;">*</span></label>
        <div><input style="border:2px solid lightblue; border-radius: 4px;" class="col-sm-6" type="email" name="email" placeholder="example@email.com"class="form-control" required> </div>
		 </div>
		 <div class="form-group row">
		<label class="col-sm-2">Contact No. :<span style="color: red; font-size: 20px;">*</span></label>
		<div><input style="border:2px solid lightblue; border-radius: 4px;"  class="col-sm-6"  type="text" name="cno" class="form-control"required></div> 
		 </div>
		 <div class="form-group row">
		<label class="col-sm-2">Country :<span style="color: red; font-size: 20px;">*</span></label>
		<div><select style="border:2px solid lightblue; border-radius: 4px;" class="col-sm-6" class="form-control" name="country">
  <option value="United Arab Emirates">United Arab Emirates</option>
  <option value="America">America</option>
  <option value="Bangladesh">Bangladesh</option>
  <option value="China">China</option>
  <option value="India" selected>India</option>
  <option value="Iran">Iran</option>
  <option value="japan">Japan</option>
  <option value="nepal">Nepal</option>
 
</select>
</div>
</div>
  <div class="form-group row">
       <label class="col-sm-2">Uploada File :<span style="color: red; font-size: 20px;">*</span></label>
            <input  type="file" name="upload-img"  class="col-sm-6"  required>
 </div>
 <div class="form-group row">
         <label class="col-sm-2">Set Password: <span style="color: red; font-size: 20px;">*</span></label> 
        <div><input style="border:2px solid lightblue; border-radius: 4px;" class="col-sm-6" type="password" name="pass1"  required>
          </div> 
    </div>
    <div class="form-group row">
        <label class="col-sm-2">Confirm Password:<span style="color: red; font-size: 20px;">*</span></label> 
         <div><input style="border:2px solid lightblue; border-radius: 4px;" class="col-sm-6" type="Password" name="pass2"  required></div>
  </div>
    <div align="center" class="form-group row">
            <input style="border-radius: 8px; width:80px;" class="btn btn-danger btn-sm" type="reset" name="Reset" value="Reset">&nbsp;&nbsp;
             <input style="border-radius: 8px; width:80px;"class="btn btn-success btn-sm" type="submit" name="ragister"  value="Register">
    </div>	

	</form>
 <h5 align="center"><a href="user_login.php">User Login</a></h5>
 <h5 align="center" style="color:#4ddbff;"><span class="glyphicon glyphicon-font"></span> &nbsp;Copyright©2020 - Sandeep</h5> 
</div>
</body>
</html>
