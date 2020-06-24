<?php
session_start();
$db=mysqli_connect("localhost","root","","ragistration");
 $login_user_id=$_SESSION['u_login_id'];   //login user uni id
  #echo $login_user_id;
 if($login_user_id==true)
 {
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
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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


  #leftbox { 
                float:left;  
               
                width:50%; 
                height:auto; 
                margin-top: 6px;
                margin-top: 6px;

            } 

             #rightbox{ 
                float:right; 
                 
                width:50%; 
                height:auto; 
                margin-top: 6px;
            } 
#div-scroll{

  height: 300px;
  width:110px;
  overflow: auto;
  overflow-x: hidden;
}

#div-scroll2
{
  height: 300px;
  overflow-x:hidden;
}



#frd-profile-btn
{
background-color:#f2f2f2;
font-size:12px; 
border: none;
font-style: bold;
}
#frd-profile-btn:hover {
  color:blue; 
  border-display:none;
}

body {
  background-color:#f2f2f2;
}

@media only screen and (max-width:600px) {
  body {
    background-color:#d8ecf3;
  }

  #frd-profile-btn
{
background-color:#d8ecf3;
font-size:12px; 
border: none;
font-style: bold;
}
#frd-profile-btn:hover {
  color:blue; 
  border-display:none;
}

              </style>
</head>
<body > 
<div class="maindiv" style="margin-right:4px; margin-left: 4px;">

  <div id="leftbox" style="padding-left:1%; padding-top:1%;" > <!--div for Lets Connect With Social Friends-->
  
    <table >  <!--table 1 where user img ,name and lable -->   
      <h4 style=" font-style: italic; color: blue; text-shadow:2px 2px black; "><b>USERSYSTEM</b></h4>
  <thead>
  <th>
    <?php
$email=$_SESSION["user_sess_email"];  //login email throu acsess userprofile 
  $q="SELECT * FROM rag WHERE email='$email' LIMIT 1 ";
  $result=mysqli_query($db,$q);
  
 while($row = $result->fetch_assoc())
 {
             
            if(!empty($row["image"]))
            {
              ?>

              <a href="userprofile.php" ><img src="<?php  echo $row["image"]?>" alt="profile pic" class="img-circle col-4 mx-auto text-center" style="height:80px; width:80px;" /></a> <!-- <?php include('update_profile_pic.php');?> -->
              
              <?php
               }
              else{
              ?>
              <img src="profile.png" alt="profile" class="img-circle col-4 mx-auto text-center" style="height:80px; width:80px;" /> <!-- <?php include('update_profile_pic.php');?> -->
               <?php 
              } }
                 ?>
                  <h5  class="font-weight-bold" style="color:blue;text-transform: capitalize;" ><b><?php echo "Hy ".$_SESSION["user_sess_name"]." ".$_SESSION["user_last_name"]."<br>"?></b><h5>
               </th>
               </table> <!--first table end where profile pic and name and lable exist-->
      
 <b style="text-transform: capitalize; font-size:80%; color:black;" class="label label-info">&nbsp;&nbsp;My Friends&nbsp;&nbsp;&nbsp;</b><br>
     
     <div id="div-scroll"> <table  align="left" > <!--tble 2 where user frd list-->
   
     <tbody>
    <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
     
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>

           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>

           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>

           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>

           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>

           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>     

           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
  
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>
           <tr>
      <td ><a href="#"  class="a1" style="font-size:12px; font-style: bold;">Mr. huwan</a>&nbsp;<td><a href=""><span class="glyphicon glyphicon-user"></a></span></td></td></tr>

    </tbody>
  </table><!--table 2 end-->
</div> <!--end scroll fro table  div -->

                         

     
  </div> <!--div end Lets Connect With Social Friends-->


<div id="rightbox" style="padding-right:1%; padding-top:1%;"> <!--right div start myFriends-->

  <table align="right"> <!--fst table where butns are  exist-->
    <th>
<a href="userprofile.php"> <button style="border-radius:6px; text-decoration:bold;" type="button"   value="Go back !" class="btn btn-warning btn-sm" ><span class=" glyphicon glyphicon-arrow-left"></span>&nbsp;Go back</button></a>
<a href="logout.php"><button style="border-radius:6px; text-decoration:bold;"  type="button" class="btn btn-info  btn-sm">Log out <span class="glyphicon glyphicon-log-out"></span></button></a>
</th>
</table><!--btns fst table end-->
<br><br><br><i style="float:right; color: green; font-size: 37px;" class="fa fa-globe fa-spin"></i><br><br>

<br>
<b style="text-transform:capitalize; font-size:80%; color:black; float:right;" class="label label-info">Lets Connect With Social Friends</b><br>

   <div id="div-scroll2"> <table align="right">  <!--table 2 where add frds-->
               <?php

  
   $q="SELECT * FROM rag WHERE id!='$login_user_id'";   // all user display but only  login user name does not display...
    $exicute_qurey=mysqli_query($db,$q);
     while($row = $exicute_qurey->fetch_assoc())
     {
      ?>
    <tr>
      <td style="padding:1px 1px 1px 1px;">
          <form action="friends-profile.php " method="post">
          <button type="submit" name="frd-profile-btn" value="<?php echo $row['id'];?>" id="frd-profile-btn">
            <?php echo $row['first_name']."&nbsp;".$row['last_name'];?>&nbsp;<td><span class="glyphicon glyphicon-user"></span></td>
            </button> </form>
        </td>
      <td style="padding:2px 2px 2px 2px;">
        <a href="#"><button style="border-radius:4px; height:20px; width:52px; padding:0px 1px 5px 1px; "   type="submit" name="add_request_frd" class="btn btn-primary  btn-xm"><b><i style="font-size:9.5px;">Add friend</i></b></button></a>
       </td>

     </tr>

     <?php
     }
     
   ?>
 </table> <!--table  2 end where add  friends list  exist -->
</div> <!--end scroll for add frd table div-->
    
    
  </div> <!--right div end myFriends-->

</div> <!--main container end-->

</body>
</html>
<?php
}
else
{
  echo header('location:user_login.php');
}
?>