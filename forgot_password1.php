<?php
$db=mysqli_connect("localhost","root","","ragistration");
if(isset($_POST['set']))
{
$email= $_POST['email'];
$fp1=$_POST['fp1'];
$fp2=$_POST['fp2'];
  $sq="SELECT * FROM rag WHERE email='$email'";
  $sq_r= mysqli_query($db,$sq);
  $row_fatch= mysqli_fetch_assoc($sq_r);
   // $db_email= $row_fatch['email'];
   if($row_fatch<1) 
   {
?>
    <script>
  alert("Invalid Email please enter the valid email.");
  window.open('forgot_password.php','_self');
</script>
<?php
   }
   else
   {


           if($_POST['fp1']!=$_POST['fp2'])
           {
            ?>

  	       <script>
         alert("'Set password' and 'Confirm password' are mismatch");
       window.open('forgot_password.php','_self');
       </script>
   <?php

            }
            else
            {

           $q="UPDATE rag SET password='$fp1' WHERE email='$email'";

           $r=mysqli_query($db,$q);
           if($q)
           {
          
           ?>
           <!DOCTYPE html>
           <html>
           <head><title>Registration form</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></head>
           <body style="background-color:#f2f2f2 ">

            <div style="margin-top:10px; background-color:#b3ffb3;" class="container-fluid text-center border rounded border-info  w-50 p-3 h-50 ">
           <div>
            </h3 style="color: #003300;"> Your Password is set successfully!,Please login</h3> &nbsp;&nbsp;&nbsp;<a href="user_login.php"><button class="btn btn-outline-primary">login</button></a>
          </div>
          </div>
           </body>
           </html>
           <?php

           }
           
           else
           {
            ?>
            <div style="margin-top:10px; background-color:#ff4d4d;" class="container-fluid text-center border rounded border-info  w-50 p-3 h-50 ">
           <div>
            </h3 style="color:#b30000;"> Please Retry</h3> &nbsp;&nbsp;&nbsp;
            <a href="forgot_password.php"><button class="btn btn-outline-primary">login</button></a>
          </div>
          </div>
           </body>
           </html>
           <?php
           }
}

}
  
  }
  ?>