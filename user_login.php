<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      
</head>
<body style="background-color:#f2f2f2 ">

 <div  class="container" style="margin-left:400px;"> 
           
             <div class="form-group row">
                <div class="col-sm-6">
            <h3 align="center" style="color:#4ddbff;">User Login</h3> <br>
                 </div>
            </div>  
          <div class="form-group row ">
               <div class="col-sm-6 text-center">
                 <img src="logo.jpg" alt="Logo" class="img-circle col-4 mx-auto text-center" align="center"/>  
                  
               </div>
          </div>
     <form method="post" action="user_login1.php"   align="center">

	<div  class="form-group row">
	        <label  class="col-sm-2">Email:</label>
            <div> 
   	        <input style="border:2px solid lightblue; border-radius: 4px;" class="col-sm-3" type="email" name="email" required/>
   	        </div>
    </div>

     <div class="form-group row">
            <label  class="col-sm-2 invalid">Password:</label>
           <div>
           <input style="border:2px solid lightblue; border-radius: 4px;"  class="col-sm-3" type="Password" name="pass" required />
             </div>
       </div>
              <div class="form-group row">   
                <div class="col-sm-6">
                <input  class="btn btn-success" type="submit" name="submit" value="submit" style="border-radius:15px">
              
      <input class="btn btn-danger" type="reset" name="rs" value="reset" style="border-radius:15px; margin-left:10px;"/>
                 </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-sm-6">
                 <h4><a href="forgot_password.php">Forgot password ?</a></h4>
                     </div>
                 </div>
         </form>

<a href="index.php"><button style="border-radius:35px;"  type="button" class="btn btn-info" >Go back !</button></a> 
</div>
</body>
</html>