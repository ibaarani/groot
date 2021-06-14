<?php
include("db.php");
SESSION_START();
if($_POST['email'] !='') {
$user = $_POST['email'];
$pass = $_POST['password'];
$sq = "SELECT * FROM login where name='".$user."' and phone='".$pass."'";

	$count = $db_handle->numRows($sq);
	if($count==1) {
	$resultsa=$db_handle->runQuery($sq);
	foreach($resultsa as $data) {
		$_SESSION['motheresaadmin']	=	$data['username'];
	}
	//echo "Login Successfully!";
echo '<script>location.replace("dash.php");</script>';
	}
	else {  
	$_SESSION['message']='Details are wrong!Please enter correct details';
	echo '<script>
	location.replace("index.php");</script>';}
}
				?>

				<!-- error cleard works fine - barani dharan  mention here becauuse code should not be shared >