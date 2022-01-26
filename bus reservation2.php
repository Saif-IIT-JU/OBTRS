<!DOCTYPE html>
<html>
<head>
<title>Bus reservation</title>
<style>

.row {
  display: flex;
}

.column {
  flex: 50%;
  padding: 10px;
  height: 600px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
.box{
  border: 2px solid grey;
  margin-left: 35%;
  margin-right: 35%;
}

.input-container{
  padding-bottom: 30px;
  width: 100%;
}
.input-field {
  width:70%;
  padding: 10px;
  background:#EEEAE9;
  outline: none;
  border: 1px transparent;  
}
         
.input-field:focus {
  border: 1px grey;
}

.input-field2
{
  margin-left: 5%;
  padding: 2%;
}
.input-field3
{
  font-size: 20px;
}
.input-field4 {
  width:75%;
  padding: 10px;
  background:#EEEAE9;
  outline: none;
  border: 1px transparent;  
}

</style>


</head>
<body>

<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="bus reservationn.php">Bus Reservation</a></li>
  <li><a href="make payment.php">Verify Payment Method</a></li>
  <li><a href="cancel ticket.php">Cancel Ticket</a></li>
  <li><a href="bus schedule.php">Bus Schedule</a></li>
  <li><a href="make complain.php">Make Complain</a></li>
  <li style="float:right"><a href="contact.php">Contact us</a></li>
  <li style="float:right"><a href="about.php">About</a></li>
</ul><br><br>
<br>


<?php

$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$address = $_POST['address'];
$date = $_POST['date'];
$ac_cnt = $_POST['ac_cnt'];
$non_ac_cnt = $_POST['non_ac_cnt'];

if((int)$ac_cnt==0 && (int)$non_ac_cnt==0){
  echo '<script type="text/javascript">alert("Please Enter at least an AC or NON_AC bus")</script>';
}
else{

  $currDate = date('Y-m-d');
  if($date<=$currDate){
  echo '<script>alert("Please select a future date.")</script>';
}else{

  $conn = mysqli_connect('localhost', 'root', '', 'web project');
  if(!$conn){
  echo '<script type="text/javascript">alert("Connection failed. Please try again!")</script>';
}else{

  $id = 1;
  for($tmp = 1; $tmp<=1000; $tmp++){

  $tmp2 = (string)$tmp;
  $q0 = "SELECT * FROM reservation WHERE id='".$tmp2."'";
  $r0 = mysqli_query($conn, $q0);
  if(mysqli_num_rows($r0)==0){
    $id = $tmp; break;
  }
}
$idd = (string)$id;
$id = $idd; $id.=(string)(rand());

$q1 = "INSERT INTO reservation(name, contact, email, address, date, ac, non_ac, id) VALUES('".$name."', '".$contact."', '".$email."', '".$address."', '".$date."', '".$ac_cnt."', '".$non_ac_cnt."', '".$id."')";
$r1 = mysqli_query($conn, $q1);

if($r1){

      $to = $email;
      $subj = "Confirmation Message";
      $body = "Hello "; $body.=$name;
      $body .= " ! Your reservation request has been confirmed on the date "; $body.=$date; $body.=". Total number of buses(AC + NON-AC) :   "; $body.=(string)((int)$ac_cnt+(int)$non_ac_cnt); $body.=" . Your reservation id is "; $body .= $id; $body .= " .";
      $header =  "This mail has been created automatically by our website.";

      if(mail($to, $subj, $body, $header)){
        //echo "mailed success";
      }else{
        //echo "Mail failed";
      }

  echo '<script type="text/javascript">alert("Your reservaion request has been received by us. We have sent you a reservation ID via mail. Please keep it for further use.")</script>';
}
else
{
  echo '<script type="text/javascript">alert("Connection failed. Please try again!")</script>';
}
}
}
  
}

?>


<meta http-equiv="refresh" content="0; URL='bus reservationn.php'"/> 

</body>
</html>
