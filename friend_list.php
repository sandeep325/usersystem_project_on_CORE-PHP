<?php
session_start();
$db=mysqli_connect("localhost","root","","ragistration");
 $login_user_id=$_SESSION['u_login_id'];   //login user uni id
  #echo $login_user_id;
?>
<!DOCTYPE html>

<html>
<head>
  <title>friend list</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

              <style>
                a:link {
  color:green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color:black;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color:blue;
  background-color: transparent;
  text-decoration: none;
}
a:active {
  color: lightblue;
  background-color: transparent;
  text-decoration: none;
}

 }
#div-frd
{

  height: 30px;
  width: 190px;
  overflow: auto;
  overflow-x: hidden;
}


              </style>
</head>
<body style="background-color:#f2f2f2 "> 

  <div class=" table"align="left" style="margin-left: 2px; ">
  
    <table>     
<th><img src="profile.png" alt="Logo" class="img-circle col-4 mx-auto text-center" style="height:80px; width:80px;" /></th>
<th><br><br><h5  class="font-weight-bold" style="color:blue;text-transform: capitalize;" ><b><?php echo "Hy ".$_SESSION["user_sess_name"]." ".$_SESSION["user_last_name"]."<br>"?></b><h5></th>
  <div align="right" style="margin-top:4px;">
<a href="logout.php"><button  style="border-radius:4px; margin-right:2px;"  type="button" class="btn btn-info  btn-sm">Log out</button></a>
<a href="userprofile.php"><button style="border-radius:6px;  width:60px; margin-right:2px; padding-left:4px;"  type="button" class="btn btn-info btn-sm" >Go back !</button></a>
            </table>
            </div>
   </div> 


   <div  align="left" style="margin-left: 10px;">
<table style="width:auto">
  <tr>
    
      
      <h6 style="background-color:#80bfff; border:1px solid black ;border-radius:6px; padding:4px 2px 6px 2px; height:25px;width:185px;">Lets Connect With Social Friends</h6>
    
  </tr>
</table>
  <div>
    
  <table id="div-frd" style="width:auto">
    <?php

   $q="SELECT * FROM rag WHERE id!='$login_user_id'";   // all user display but only  login user name does not display...
    $exicute_qurey=mysqli_query($db,$q);
     while($row = $exicute_qurey->fetch_assoc())
     {
      ?>

     <tr>
      <td style="padding:1px 1px 1px 1px;"><a href="#"  class="a1" style="font-size:12px; font-style: bold;"><?php echo $row['first_name']." ".$row['last_name'];?>&nbsp;<td><span class="glyphicon glyphicon-user"></span></td></a></td>
      <td style="padding:2px 2px 2px 2px;"><a href="#"><button style="border-radius:4px; height:20px; width:52px; padding:0px 1px 5px 1px; "   type="submit" name="add_request_frd" class="btn btn-primary  btn-xm"><b><i style="font-size:9.5px;">Add friend</i></b></button></a></td>

     </tr>

     <?php
     }
     
   ?>
  <div style="margin-right: 30px;">
   <iframe src="frame1_myfrd.php" align="right" style="width:140px; height: 200px; border:none; border:0 " frameborder="0"  allowfullscreen
    title="Main menu" >
  fix value
</iframe>
</div>

 </table>
   </div> 

</body>
</html>