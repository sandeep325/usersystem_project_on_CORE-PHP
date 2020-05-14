<?php

$db=mysqli_connect("localhost","root","","ragistration");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bio caption</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
  <button type="button" style="width:200px; height:30px;font-size:15px; padding:2px 2px 2px 2px;" class="btn btn-info btn-lg" id="myBtn">Add Bio&nbsp;<i class='glyphicon glyphicon-edit'></i></button>



  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>  <!-- for cross sing -->
          <h4 class="modal-title">Please Add your bio</h4>
         </div>
          <div class="form-group">
            <form method="post" action="?"><label for="message-text" class="col-form-label" style="padding-left:4px;">Bio Discription:</label>
            <textarea class="form-control" id="message-text" name="user_bio" maxlength="80"></textarea>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" name="bio_add" class="btn btn-info" >Save</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  


<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>

</body>
</html>
<?php
// if(isset($_POST['bio_add']))
// {
//   $user_bio = $_POST['user_bio'];
//   $_SESSION['ses_u_bio']=$user_bio;
// 
?>
</html>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$db=mysqli_connect("localhost","root","","ragistration");
$login_user_id = $_SESSION['u_login_id'];
if(isset($_POST['bio_add']))
{
  $userbio=$_POST['user_bio'];

    $qry= "SELECT * FROM description_about_users WHERE id= '$login_user_id' LIMIT 1 ";
$ret=mysqli_query($db,$qry);
$row=mysqli_num_rows($ret);
$ur=mysqli_fetch_assoc($ret);
#$login_user_work=$f_row['work'];
#$_SESSION['$login_user_work']=$login_user_work;


    if($ur['userbio']=="")
    {
        if($ur['id']=="")
        {
        
      $in="INSERT INTO description_about_users (id, userbio) VALUES ('$login_user_id','$userbio')";
          $in_q=mysqli_query($db,$in);
        }
        else {
      $up="UPDATE description_about_users SET userbio='$userbio' WHERE id='$login_user_id' ";
          
          $in_q=mysqli_query($db,$up);
        }
               
    }
    else
    {
      $update="UPDATE description_about_users SET userbio='$userbio' WHERE id='$login_user_id' ";
      $up=mysqli_query($db,$update);
    }





}


?>