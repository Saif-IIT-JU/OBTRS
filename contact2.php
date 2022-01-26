<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>

	<?php

		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$subj = $_POST['subject'];
		$msg = $_POST['message'];

		$conn = mysqli_connect('localhost', 'root', '', 'web project');
  if(!$conn){
  echo '<script type="text/javascript">alert("Connection failed. Please try again!")</script>';
}else{

$q1 = "INSERT INTO msgbox(name, email, contact, subject, message) VALUES('".$name."', '".$email."', '".$contact."', '".$subj."', '".$msg."')";
$r1 = mysqli_query($conn, $q1);

if($r1){

  echo '<script type="text/javascript">alert("Thanks! We have received your message.")</script>';
}
else
{
  echo '<script type="text/javascript">alert("Connection failed. Please try again2!")</script>';
}
}

?>

<meta http-equiv="refresh" content="0; URL='contact.php'"/> 

</body>
</html>