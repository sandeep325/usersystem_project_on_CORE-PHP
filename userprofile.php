<?php
session_start();
$db=mysqli_connect("localhost","root","","ragistration");

?>
<!DOCTYPE html>

<html>
<head>
	<title>login user</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#f2f2f2 ">
</body>
<div class="text-center">
<h5><?php echo "Wellcome ".$_SESSION["user_sess_name"]."<br>"?></h5>
</div>
<?php
$email=$_SESSION["user_sess_name"];
  $q="SELECT * FROM rag WHERE email='$email' ";
  $result=mysqli_query($db,$q);
  ?>
     <table class="table table-hover  table-bordered">
  	      <tr>
  	          <th>ID</th>
  	          <th>First Name</th>
  	          <th>Last_Name</th>
  	          <th>Date of Birtth</th>
       	      <th>Email</th>
  	          <th>contact No.</th>
  	          <th>Password</th>
              <th>Registered Date</th> 
         </tr>

  <?php
 while($row = $result->fetch_assoc())
 {
 	?>
    <tr>
 	<td><?php echo $row['id']; ?></td>
 	<td><?php echo $row['first_name']; ?></td>
 	<td><?php echo $row['last_name']; ?></td>
 	<td><?php echo $row['dob']; ?></td>
 	<td><?php echo $row['email']; ?></td>
 	<td><?php echo $row['contact_no']; ?></td>
 	<td><?php echo $row['password']; ?></td>
 	<td><?php echo $row['creation_date']; ?></td>

 	</tr>
 <?php

 } 

?>
</table>
<a href="logout.php"><button style="border-radius:35px"  type="button" class="btn btn-info">Log out</button></a>
</body>
</html>