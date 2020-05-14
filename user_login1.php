<?php

$db=mysqli_connect("localhost","root","","ragistration");
$email= $_POST['email'];
$pass=$_POST['pass'];
$q ="SELECT * FROM rag WHERE email='$email' and password='$pass' LIMIT 1";
$r=mysqli_query($db, $q);
$row=mysqli_num_rows($r);

if($row<1)
{

?>
<script>
	alert("May be user name or password mismatch.");
	window.open('user_login.php','_self');
</script>
<?php

}
else
{
	$f_row=mysqli_fetch_assoc($r);
	$u_id=$f_row['id'];
     $username=$f_row['first_name'];
     $user_last_name=$f_row['last_name'];  //this session used in friend list file for user fullname
	 $u_pass=$f_row['password'];
     $email=$f_row['email'];
     $u_dob=$f_row['dob'];
	session_start();
	$_SESSION['u_login_id']=$u_id;
	$_SESSION["user_sess_name"]= $username;
	$_SESSION["user_last_name"]= $user_last_name;   //this session used in friend list for user fullname
	$_SESSION["user_sess_email"]= $email; //set username in to a session variable.
     $_SESSION["user_sess_pass"]=$u_pass;
     $_SESSION["user_sess_dob"]=$u_dob;
 header('location:userprofile.php');
}


?>
