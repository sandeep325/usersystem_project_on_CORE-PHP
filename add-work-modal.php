<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add user Work</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>

<div class="container">
  
  <!-- Trigger the modal with a button -->
  <a  data-toggle="modal" data-target="#myModal-work"><span style="font-size:20px;"class="glyphicon glyphicon-pencil"></span></a>

  <!-- Modal -->
  <div class="modal fade" id="myModal-work" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:lightblue;">Your Work</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="?"><textarea class="form-control" id="text" name="user_work" maxlength="50"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                   <button type="submit" name="work" class="btn btn-info" >Save</button></form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$db=mysqli_connect("localhost","root","","ragistration");
$login_user_id = $_SESSION['u_login_id'];
if(isset($_POST['work']))
{
  $user_work=$_POST['user_work'];

    $q= "SELECT * FROM description_about_users WHERE id= '$login_user_id' LIMIT 1 ";
$retrive=mysqli_query($db,$q);
$row=mysqli_num_rows($retrive);
$r=mysqli_fetch_assoc($retrive);
#$login_user_work=$f_row['work'];
#$_SESSION['$login_user_work']=$login_user_work;


    if($r['work']=="")
    {
      if($ur['id']=="")
      {
        
      $in="INSERT INTO description_about_users (id, work) VALUES ('$login_user_id','$user_work')";
          $in_q=mysqli_query($db,$in);
        }
        else
        {
           $up="UPDATE description_about_users SET work='$user_work' WHERE id='$login_user_id' ";
          
          $in_q=mysqli_query($db,$up);
        }
      
               
    }
    else
    {
      $update="UPDATE description_about_users SET work='$user_work' WHERE id='$login_user_id' ";
      $up=mysqli_query($db,$update);
    }
}

?>




