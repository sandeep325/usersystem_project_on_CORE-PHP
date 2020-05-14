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
  <a  data-toggle="modal" data-target="#myModal-qalification"><span style="font-size:20px;"class="glyphicon glyphicon-pencil"></span></a>

  <!-- Modal -->
  <div class="modal fade" id="myModal-qalification" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:lightblue;">Your Qalification</h4>
        </div>
        <div class="modal-body"> <form method="post" action="?">
          <textarea class="form-control" id="text2" name="user_qalification" maxlength="50"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                   <button type="submit" name="qalification-btn" class="btn btn-info" >Save</button>
                 </form>
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
if(isset($_POST['qalification-btn']))
{
  $user_qalification=$_POST['user_qalification'];

    $qry= "SELECT * FROM description_about_users WHERE id= '$login_user_id' LIMIT 1 ";
$ret=mysqli_query($db,$qry);
$row=mysqli_num_rows($ret);
$ur=mysqli_fetch_assoc($ret);
#$login_user_work=$f_row['work'];
#$_SESSION['$login_user_work']=$login_user_work;


    if($ur['qalification']=="")
    {
        if($ur['id']=="")
        {
        
      $in="INSERT INTO description_about_users (id, qalification) VALUES ('$login_user_id','$user_qalification')";
          $in_q=mysqli_query($db,$in);
        }
        else {
      $up="UPDATE description_about_users SET qalification='$user_qalification' WHERE id='$login_user_id' ";
          
          $in_q=mysqli_query($db,$up);
        }
               
    }
    else
    {
      $update="UPDATE description_about_users SET qalification='$user_qalification' WHERE id='$login_user_id' ";
      $up=mysqli_query($db,$update);
    }





}

?>