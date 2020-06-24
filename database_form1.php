<?php
$db=mysqli_connect("localhost","root","","ragistration");
if(isset($_POST['ragister']))
{

$f_name= $_POST['fn'];
$l_name= $_POST['ln'];
$dob= $_POST['dob'];
$email= $_POST['email'];
$cno= $_POST['cno'];
$country= $_POST['country'];
$pass1= $_POST['pass1'];
$pass2= $_POST['pass2'];
$user_gender=$_POST['user_gender']; //gender

 $files=$_FILES['upload-img'];
  $filename=$files['name'];
  $fileerror=$files['error'];
  $filetmp=$files['tmp_name'];
  $fileext=explode('.', $filename);
 $filecheck=strtolower(end($fileext));
 $fileextstored = array('png','jpg','jpeg');
 if(in_array($filecheck, $fileextstored))
 {
  $destinationfile='userprofile/'.$filename;
  move_uploaded_file($filetmp, $destinationfile);
 }




$create_date= date('Y-m-d');//take automatic date form system when user egister him self
   if($_POST['pass1']!=$_POST['pass2'])
   {
    
    ?>
      <script>
  alert("Password missmatch");
 window.location='index.php';
  
</script>
    <?php
    // exit("<h3 style='color:red;'>Password mismatch please re-enter...</h3>");
    // echo "Mismatch password.";
    //  header('Location:index.php');
    //  exit();

   }
   else
   {


$create_date= date('y-m-d');


 $q = "INSERT INTO rag(first_name, last_name,dob,gender,email,contact_no,country,password,image,creation_date) 
	VALUES ('$f_name','$l_name','$dob','$user_gender','$email','$cno','$country','$pass1','$destinationfile','$create_date')";
 $data=mysqli_query($db,$q);  //exicute the query......
   if($data)
       {
        ?>
               <script>
         alert("'your data is saved ");
       window.open('index.php','_self');
       </script>
       <?php
 }
    else
    {
?>
           <script>
         alert("Technical error!");
       window.open('index.php','_self');
       </script>

<?php

    }
}
}

else
{
  
}
mysqli_close($db);
 exit();

?>


<!-- <html>
<head>
  <title>User info</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #f5f5f0">

 <table border="2px solid black;" style="background-color: lightblue;" align="center">
 	<tr>
 		<th>First Name</th>
        <th>last Name</th>
        <th> Date of birth</th>
        <th>Email</th>
        <th>contact no.</th>
        <th>Country</th>
        <th>Password</th>
        <th>Img</th>
</tr>
<tr>
   <td> <?php echo $f_name ?></td>
   <td><?php echo $l_name ?></td>
   <td><?php echo $dob ?></td>
   <td><?php echo $email ?></td>
   <td><?php echo $cno ?></td>
   <td><?php echo $country ?></td>
   <td><?php echo $pass1 ?></td>
    <td><?php echo $imgs ?></td>


	</tr>

 </table> <br>

<a href="index.php"><button type="button" class="btn btn-info">Go back !</button></a>


</body>
</html> -->