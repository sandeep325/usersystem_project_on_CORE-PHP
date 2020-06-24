<!DOCTYPE html>
<html>
<head>
	<title> signup </title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#f2f2f2 ">

      <div class="container">
<form class="well form-horizontal" method="post" action="database_form1.php" autocomplete="off" submit="true"  enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend><center><h3><b style="text-shadow:1px 1px 0 #444" class="label label-primary">WELLCOME TO USERSYSTEM</b></h3></center></legend>
<center><h5 style="padding-top: none;"><b>Register yourself</b></h5></center></legend><br>
<marquee><h5 align="center" style="color:#ff4d4d;">If you are already registerd please login below.</h5></marquee>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name :</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fn" placeholder="First Name" class="form-control"  type="text" required="true"   oninput="(function(e){e.setCustomValidity(''); return !e.validity.valid && e.setCustomValidity(' ')})(this)" oninvalid="this.setCustomValidity('enter the first name')">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name :</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="ln" placeholder="Last Name" class="form-control"  type="text" required="true"   oninput="(function(e){e.setCustomValidity(''); return !e.validity.valid && e.setCustomValidity(' ')})(this)" oninvalid="this.setCustomValidity('enter the last name')">
    </div>
  </div>
</div>  

<div class="form-group">
  <label class="col-md-4 control-label" >Date of birth:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="dob"  class="form-control"  type="date" required="true"   oninput="(function(e){e.setCustomValidity(''); return !e.validity.valid && e.setCustomValidity(' ')})(this)" oninvalid="this.setCustomValidity('enter your DOB')">
    </div>
  </div>
</div>   

<!-- Text input-->
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
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="cno" placeholder="contact no" class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  maxlength="11" required="true"   oninput="(function(e){e.setCustomValidity(''); return !e.validity.valid && e.setCustomValidity(' ')})(this)" oninvalid="this.setCustomValidity('enter the contact no')">
    </div>
  </div>
</div>
  
  <!-- Text input-->

  <div class="form-group"> 
  <label class="col-md-4 control-label">Country :</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i 

class="glyphicon glyphicon-list"></i></span>
  <select name="country" class="form-control selectpicker" value="" required="true"   oninput="(function(e){e.setCustomValidity(''); return !e.validity.valid && e.setCustomValidity(' ')})(this)" oninvalid="this.setCustomValidity('please select the country')">
      <option value="">Select your Country </option>
      <option value="United Arab Emirates">United Arab Emirates</option>
  <option value="America">America</option>
  <option value="Bangladesh">Bangladesh</option>
  <option value="China">China</option>
  <option value="India" >India</option>
  <option value="Iran">Iran</option>
  <option value="japan">Japan</option>
  <option value="nepal">Nepal</option>
    </select>
  </div>
</div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Uploada File :</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
  <input name="upload-img"  class="form-control"  type="file" required>
    </div>
  </div>
</div>
<!-- Text input-->


<div class="form-group">
  <label class="col-md-4 control-label" > Set Password :</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="pass1"   placeholder="Password" class="form-control"  type="password" required>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password :</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="pass2"   placeholder="Confirm Password" class="form-control"  type="password" required>
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Gender :</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
<label class="radio-inline ">
      <input type="radio" name="user_gender"  value="male" required="true">Male
    </label> &nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="user_gender" value="female">Female
    </label> &nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="user_gender" value="other">Other
    </label>
    

    </div>
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="ragister"  value="Register" class="btn btn-info" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRegister <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>



</fieldset>
</form>
 <h5 align="center"><a href="user_login.php">Already register  Login !</a></h5>
 <h5 align="center" style="color:#4ddbff;"  data-toggle="popover" title="All Copyright reserved."><span class="glyphicon glyphicon-font"></span> &nbsp;Copyright©2020 - Sandeep</h5> 
</div> 
</div>
    </div>

</body>
</html>
