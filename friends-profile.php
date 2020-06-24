<?php
session_start();
$db=mysqli_connect("localhost","root","","ragistration");

if($_SESSION['u_login_id']==true)
{
?>
<!DOCTYPE html>

<html>
<head>
	<title>frds profile</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    

        .btn-desing
        {
          border-radius:4px;
          height:20px;
          width:140px; 
          padding:8px 1px 25px 1px; 
          font-size:14px;
          
        }

        .mrge
        {
          margin-left:80px;
        }


.grid-container {
  float:center;

  display: inline-grid;
  grid-template-columns: auto auto auto;
}
.grid-item {
  font-size: 30px;
  float:center;

}
.mydiv
 {
  text-align: center;
  padding-left:100px;
 }

body {
  background-color:#ebf5f9;
}

@media only screen and (max-width:600px) {
  body {
    background-color:#d8ecf3;
  }

  .mrge
        {
          margin-left:12px;
        }

   .grid-container {
  display: inline-grid;
  grid-template-columns: auto auto auto;
}
.grid-item {
  font-size: 30px;
  text-align: center;
  float:center;
}

.mydiv
{
    text-align: center;
  padding-left:25px;
}
     
}


hr.hrline {
  border: 1px solid gray;
   border-style:dashed;
}

.badge
{
  background-color: #cccccc;
}






div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

 
      </style>
</head>

<body>
  <?php
  if($_POST['frd-profile-btn'])
  {
  $frds_profile_id= $_POST['frd-profile-btn'];
  // $query="SELECT * FROM rag WHERE id='$frds_profile_id' LIMIT 1";
  $query="select rag.*,description_about_users.* from rag,description_about_users 
           where rag.id= description_about_users.id and  rag.id='$frds_profile_id'";
  $run=mysqli_query($db,$query);

?>
  
    <div class="col-lg-6" style="background-color: #d8ecf3; margin-top:2px; padding-top:20px;"> <!--left side div-->
    <center> <table><!--table for frds profiles (dp)-->
       <?php
 while($row = $run->fetch_assoc())
 {
  ?>
        <tr>
            <td >
              <?php
            if(!empty($row["image"]))
            {
              ?><a href="<?php  echo $row['image']?>" ><img src="<?php  echo $row["image"]?>" alt="profile pic" class="img-circle col-4 mx-auto text-center" style="height:120px; width:120px;" /></a>
                             <?php
               }
              else{
              ?>
              <img src="profile.png" alt="profile" class="img-circle col-4 mx-auto text-center" style="height:120px; width:120px;" />
               <?php 
              }
                 ?>
              <br><h5 style=" text-transform: capitalize; "><b><?php echo $row['first_name'];?> &nbsp;&nbsp;<?php echo $row['last_name'];  ?></b></h5>

              <?php $frd_name= $row['first_name']; $_SESSION["frd_name_sess"]=$frd_name;?> <!--name store fro session for frd name  -->
            </td>
      </tr> </table></center> <!--this table end frd dp and name with center tag-->


    <div class="grid-container">
     <div class="grid-item">
        <a href="#"><button    type="submit" name="add_request_frd" value="add_request_frd" class="btn btn-info  btn-xm btn-desing  mrge" >Add friend &nbsp;&nbsp;<i class="fas fa-user"></i></button></a>
       </div>
     <div class="grid-item">

       <a href="#"><button   type="submit" name="msg" value="msg" class="btn btn-info  btn-xm btn-desing  mrge">Massage&nbsp;&nbsp;<i class="fas fa-comment"></i></button></a>
       </div>
     <div class="grid-item">

       <a href="frds-profile-setting.php" target="blank"><i class="fa fa-ellipsis-v mrge" style="color:black; font-size: 22px;" data-toggle="tooltip" title="Know More"></i></a>
       </div>
    </div> <!--grid-container div end-->

    <table><!--start table where discription-->
       <tr> <?php $work=$row['work'];if($work){?>
        <td> <h5 style=" text-transform: capitalize; "><b>Work &nbsp;&nbsp;<span style="font-size: 20px;"  class="glyphicon glyphicon-briefcase"></span>&nbsp;: </b> <?php echo $row['work']; ?></h5></td><?php } ?>
         </tr>

               <tr> <?php $qalification=$row['qalification'];if($qalification){?>
        <td> <h5 style=" text-transform: capitalize; "><b>Qalification &nbsp;<span style="font-size: 20px;" class="glyphicon glyphicon-education"></span>&nbsp;: </b> <?php echo $row['qalification'];  ?></h5></td> <?php } ?>
         </tr>

        <tr> <?php $hometown=$row['hometown'];if($hometown){?>
        <td> <h5 style=" text-transform: capitalize; "><b>Hometown &nbsp;<span style="font-size: 20px;" class="glyphicon glyphicon-home"></span>&nbsp;: </b><?php echo $row['hometown'];  ?></h5></td> <?php } ?>
         </tr>


        <tr> <?php $userbio=$row['userbio'];if($userbio){?>
        <td> <h5 style=" text-transform: capitalize; "><b>Bio&nbsp;<span style="font-size: 20px;" class='glyphicon glyphicon-book' style='font-size:25px'></span>&nbsp;: </b><?php echo $row['userbio'];  ?></h5></td>  <?php } ?>
         </tr>

         <tr>
           <td colspan="2">
  <button type="button" data-toggle="collapse" title="click to more about" data-target="#collapse-me" style=" font-weight: bold; background-color:#d8ecf3;"> &nbsp;&nbsp;About &nbsp;more&nbsp;&nbsp;&nbsp; <i class="fa fa-plus"></i>&nbsp; </button>
  <div id="collapse-me" class="collapse">

    <?php $dob=$row['dob'];if($dob){?>
   <h5 style=" text-transform: capitalize; "><b>Date-Of-Birth&nbsp;<span style="font-size: 20px;" class=' fas fa-calendar-alt' style='font-size:25px'></span>&nbsp;: </b><?php $dob=$row['dob']; echo date('d-m-Y',strtotime($dob)); ?></h5>
    <?php } ?>


    <?php $gender=$row['gender'];if($gender){?>
   <h5 style=" text-transform: capitalize; "><b>Gender&nbsp;<span style="font-size: 20px;"  style='font-size:25px'></span>&nbsp;: </b><?php echo $row['gender'];  ?></h5>
    <?php } ?>
   
    </div>
    </td>
         </tr>
   </table><!--end table where discription-->
      <?php
} //end while loop
}//end if condition if buttn click
?>
    <hr class="hrline">
      <div class="mydiv"><table> <!--table for matual frds and photos,post's btn-->
        <tr>
          <td><a href="#"><b class="fas fa-users badge"  style="color: blue; font-size:16px;"> &nbsp;Friends</b></a></td>


          <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><b class="fas fa-images badge" style="color: blue; font-size:16px;"> &nbsp;Photo's</b></a></td>

         <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><b class="fas fa-globe-europe badge" style="color: blue; font-size:16px;"> &nbsp;Post</b></a></td>
        </tr>
      </table></div><!--table end for matual frds and photos btn-->

      
    </div>  <!--left side div end-->

                  <div class="col-lg-6" style="background-color: pink; margin-top:2px; padding-top:5px;"> <!--right side div-->
      
       <h4><?php echo "<b style='text-transform: capitalize;'>".$_SESSION["frd_name_sess"]."</b>";?> Image Gallery <i class="fas fa-arrow-right" ></i></h4>
<h4>Resize the browser window to see the effect.</h4>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="temp_img\download.jpg" alt="Cinque Terre"  width="100%"
  height= "auto">
    </a>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="temp_img\images (1).jpg" alt="Forest" width="100%"
  height= "auto">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="temp_img\download (2).jpg" alt="Northern Lights" width="100%"
  height= "auto">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="temp_img\images (2).jpg" alt="Mountains" width="100%"
  height= "auto">
    </a>
  </div>
</div>




<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="temp_img\download.jpg" alt="Cinque Terre" width="100%"
  height= "auto">
    </a>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="temp_img\images (1).jpg" alt="Forest" width="100%"
  height= "auto">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="temp_img\download (2).jpg" alt="Northern Lights" width="100%">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="temp_img\images (2).jpg" alt="Mountains"   height= "auto">
    </a>
  </div>
</div>


<!-- <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="temp_img\download (3).jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>


</div><div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="temp_img\download (4).jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>


</div><div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="temp_img\download (5).jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div> -->

      

    </div> <!--right side div  end-->

  


</body>
</html>
<?php
} //End of check if sess  id
else
{
  echo header('location:user_login.php');
} //End of else part check if sess  id
?>