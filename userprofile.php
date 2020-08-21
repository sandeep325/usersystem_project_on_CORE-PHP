<?php
session_start();
$db=mysqli_connect("localhost","root","","ragistration");

if($_SESSION['u_login_id']==true)
{
?>
<!DOCTYPE html>

<html>
<head>
	<title><?php echo $_SESSION["user_sess_name"];?> </title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#f2f2f2; ">
<div class="container float-left" >
   <div class="form-group row" align="right" style="margin-top:4px;">
<a href="logout.php"><button style="border-radius:6px; text-decoration:bold;"  type="button" class="btn btn-info  btn-sm">Log out <span class="glyphicon glyphicon-log-out"></span></button></a>

           </div>
<div class="text-center" style="margin-top:1px; margin-left:1px;">
   <!-- <h5 align="left"  class="col-sm-2"><b style="text-shadow:1px 1px 0 #444" class="label label-primary">WELLCOME TO USERSYSTEM</b></h5> -->
   <h4 align="left" style=" font-style: italic; color: blue; text-shadow:2px 2px black; "><b>USERSYSTEM</b></h4>
<h5 style="text-transform: capitalize;" class="label label-info" ><b><?php echo "Welcome ".$_SESSION["user_sess_name"]."<br>"?></b></h5>
</div>
               
                   
             
<?php
$email=$_SESSION["user_sess_email"];  //login email throu acsess userprofile 
  $q="SELECT * FROM rag WHERE email='$email' LIMIT 1 ";
  $result=mysqli_query($db,$q);
  ?>
<br>
      <div class="table-responsive" align="left" style="margin-left:1px; ">
     <table class="one" style="width:auto; " align="left" >
 
<?php
 while($row = $result->fetch_assoc())
 {
  ?>
  

  	   <tr>
  	       	<th>
              <?php
            if(!empty($row["image"]))
            {
              ?><a href="<?php  echo $row['image']?>" ><img src="<?php  echo $row["image"]?>" alt="profile pic" class="img-circle col-4 mx-auto text-center" style="height:120px; width:120px;" /></a><?php include('update_profile_pic.php');?>
                             <?php
               }
              else{
              ?>
              <img src="profile.png" alt="profile" class="img-circle col-4 mx-auto text-center" style="height:120px; width:120px;" /><?php include('update_profile_pic.php');?>
               <?php 
              }
                 ?>
            


            </th>
                 <td> 
              <br><br><br>&nbsp;&nbsp;&nbsp;<h5 style=" text-transform: capitalize; "><b><?php echo $row['first_name'];?> &nbsp;&nbsp;<?php echo $row['last_name'];  ?></b></h5>
                 </td>
      </tr>

  	   <tr>       
  	       <th>Date of Birtth</th>
            <td><?php  $d_dob=$row['dob'];
                     $st_d=strtotime($d_dob);   //dob normal readable mode....
                     echo date('d/m/Y',$st_d) ?></td>
        </tr> 

        <tr>
       	      <th>Email</th>
              <td><?php echo $row['email']; ?></td>

        </tr>

        <tr>  
  	          <th>contact No.</th>
           <td><?php echo $row['contact_no']; ?></td>
        </tr>



             <div class=" table" align="right" style="margin-right:6px; ">
             <table  align="right" class="table" style="width:auto;">
            <thead class="thead-dark">
            <tr>
            <th> <b style="text-transform: bold;" class="fa fa-list"></b> &nbsp;User Action's</th>
            </tr>
           </thead>
           <tr>
    <td><a href="friends-list.php">Social friends &nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span></a></td>
        </tr>
        <tr>
     <td><a href="#">Massages &nbsp;&nbsp;<span class="glyphicon glyphicon-envelope"></span></a><sup style="
Border-radius:50%;"class="label label-danger">2</sup></td>
     </tr>
     <tr>
     <td><a href="#">Notifications &nbsp;&nbsp;<span class="glyphicon glyphicon-bell"></span></a><sup style="
Border-radius:50%;"class="label label-danger">7</sup></td>
     </tr>
      <tr>
     <td><a href="#">Post's &nbsp;&nbsp;<span class="glyphicon glyphicon-globe "></span></a></td>
     </tr>
      <tr>
    <td><a href="#">Setting &nbsp;&nbsp;<i class="fa fa-cog fa-spin" style="font-size:18px"></i></a></td>
      </tr>
       <tr>
      <td><a href="change_password.php">Change Password ?<span class="glyphicon glyphicon-phone"></span></a></td>
   </tr>
</table>

</div>   

</div>   

        </table>



<?php
$_SESSION['u_cn']=$row['contact_no'];


?>


    <!-- discription about user -->
  &nbsp;
<div class=" table"align="right" style="margin-right:6px; ">
  <table class="table  table-hover" style="width:auto; /*background-color:default;*/ ">  <!--here tbl bg color mood-->
   <thead class="thead-dark">
  <tr>
    <th style="margin: 10px; padding: 5px;">Discription about you-</th>
  </tr>
  </thead>

   <tr>
       <td>
        <b>Work &nbsp;<span style="font-size: 20px;"  class="glyphicon glyphicon-briefcase"></span>&nbsp;:</b>
      </td>
      <td>
       <?php  $login_user_id = $_SESSION['u_login_id'];
          $q1= "SELECT * FROM description_about_users WHERE id= '$login_user_id' LIMIT 1 ";
                   $run=mysqli_query($db,$q1);
                   $row=mysqli_fetch_assoc($run);
                    if(!empty($row['work']))
                      { echo '<i style="text-transform: capitalize;">'.$row['work'].'</i>';
                      }
                      else
                        { echo '<i style="text-transform: capitalize;">Add your work</i>'; }
                      ?> 
                   &nbsp;&nbsp;&nbsp;<?php include('add-work-modal.php')?>
    </td>
     </tr>
      <tr>
         <td>
          <b>Qalification &nbsp;<span style="font-size: 20px;" class="glyphicon glyphicon-education"></span>&nbsp;:</b></td>
         <td>
          <?php  $login_user_id = $_SESSION['u_login_id'];
          $q1= "SELECT * FROM description_about_users WHERE id= '$login_user_id' LIMIT 1 ";
                   $run=mysqli_query($db,$q1);
                   $row=mysqli_fetch_assoc($run);
                   if(!empty($row['qalification']))
                   {
                   echo '<i style="text-transform: capitalize;">'.$row['qalification'].'</i>';
                   }
                   else
                    { echo '<i style="text-transform: capitalize;">Add qalification</i>';}
                   ?> 
                   &nbsp;&nbsp;&nbsp;<?php include('add-qalification-modal.php')?>
        </td>
      </tr>
       <tr>
            <td>
             <b> Hometown &nbsp;<span style="font-size: 20px;" class="glyphicon glyphicon-home"></span>&nbsp;:</b>
            </td>
              <td>
                 <?php  $login_user_id = $_SESSION['u_login_id'];
          $q1= "SELECT * FROM description_about_users WHERE id= '$login_user_id' LIMIT 1 ";
                   $run=mysqli_query($db,$q1);
                   $row=mysqli_fetch_assoc($run);
                   if(!empty($row['hometown']))
                   {
                   echo '<i style="text-transform: capitalize;">'.$row['hometown'].'</i>';
                   }
                   else
                    { echo '<i style="text-transform: capitalize;">Add Hometown</i>';}
                   ?> 
         
              &nbsp;&nbsp;&nbsp;<?php include('add-hometown-modal.php')?>
              </td>
     </tr>
     <tr>
             <td>
              <b>Bio&nbsp;<span style="font-size: 20px;" class='glyphicon glyphicon-book' style='font-size:25px'></span>&nbsp;:</b>
             </td>
            <td>  <?php  $login_user_id = $_SESSION['u_login_id'];
          $q1= "SELECT * FROM description_about_users WHERE id= '$login_user_id' LIMIT 1 ";
                   $run=mysqli_query($db,$q1);
                   $row=mysqli_fetch_assoc($run);
                   if(!empty($row['userbio']))
                   {
                   echo '<i style="text-transform: capitalize;color:green;">'.$row['userbio'].'</i>';
                   }
                   else
                    { echo '<i style="text-transform: capitalize;">Add Your Bio...</i>';}
                   ?> </td>
     </tr>
</table>

    <?php

 } 

?>

</div>
       <div class="form-group row" style="margin-left:6px; margin-top:2px;">
          <form action="edit_profile_button.php" method="post"> 
         <button  class='btn btn-primary btn-outline col-sm-6'  type="submit" name="edit"  style="width:200px; height:30px;font-size:15px; padding:2px 2px 2px 2px;">Edit profile&nbsp;<i class='glyphicon glyphicon-edit'></i></button>
         </form>
       </div>
       <div class="form-group row" style="margin-left:6px; ">
      <?php include("modal_for_bio.php")?>

 </div>  

</div>
<b class="fa fa-font fa-spin"> </b>
<h5 align="center" style="color:#4ddbff;"><span class="glyphicon glyphicon-font"></span> &nbsp;Copyright©2020 - Sandeep</h5>  
</body>
</html>
<?php
} //End of check if sess  id
else
{
  echo header('location:user_login.php');
} //End of else part check if sess  id
?>