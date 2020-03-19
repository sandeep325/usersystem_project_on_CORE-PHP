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
	mysqli_fetch_assoc($r);
	session_start();
	$_SESSION["user_sess_name"]= $email; //set username in to a session variable.

 header('location:userprofile.php');
}


?>
