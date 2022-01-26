<!DOCTYPE html>
<html>
<head>
  <title>Ticket Booking</title>
<style>

.row {
  display: flex;
}

.column {
  flex: 50%;
  
  height: 580px;
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
  border: 5px solid red;
  margin-left: 60%;
  margin-right: 10%;
  margin-top: -35%;
  color: red;
}

.input-container{
  margin-left: 50px;
  padding-bottom: 30px;
  width: 100%;
  font-size: 25px;
}
.input-field {
  width:70%;
  margin-left: 50px;
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

.submt{
  text-align: center;
  margin-left: 150px;
}

.tmp{
  background-color: lightgrey;
}
.tmp2{
  
  margin-left: 500px;
  margin-right: 500px;
  margin-top: -160px;
  text-align: left;
}
.tmp3{
  margin-left: 10px;
  margin-right: 1000px;
  text-align: left;
}
.tmp4{
  
  margin-left: 1000px;
  margin-top: -160px;
  text-align: left;
}

.tmp5{
  background-color: lightblue;
  margin-bottom: 10px;
}

.tmp6{
  
  text-align: center;
}

</style>

<script type="text/javascript">
    function validateForm(){
      var x = document.forms["myForm"]["contact"].value;
      if(x==""){
        alert("contact number must be filled out"); return false;
      }
      var l = x.length;
      if(l<11 || l>11){
        alert("contact number is too sort or too large"); return false;
      }

      var xx = x.toString();
      var s = xx.slice(0,3);
      if(!(s=="017" || s=="019" || s=="015" || s=="013" || s=="014" || s=="016" || s=="018")){
        alert("contact code is not valid"); return false;
      }

      var cnt1 = 0;
      for(var i=0; i<l; i++)
      {
        if(xx[i]>='0' && xx[i]<='9')
          ;
        else cnt1 = cnt1+1;
      }

      if(cnt1!=0){
        alert("Please insert correct contact number");
        return false;
      }
      
    }
  </script>


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

<?php

$bus_Id = $_GET['bus_Id'];
$date = $_GET['date'];

//echo $bus_Id. " ". $date. "<br>";

if(!empty($_POST['A'])){
$list = $_POST['A'];
$str = serialize($list);
$str2 = urlencode($str);
  
  ?>

<div style="border: 5px solid grey">
  <img src="seat3.jpg" alt="LOGO" width="50%" height="540">
  <img src="seat4.jpg" alt="LOGO" width="49%" height="540">
  <div class="box">
    <h1 style="text-align: center">Give your basic info <br>and <br>Confirm your ticket</h1><br>
    <form name="myForm" action="ticket booking4.php?bus_Id=<?php echo $bus_Id; ?> & date=<?php echo $date; ?>& seat_no=<?php echo $str2; ?>" method="post" onsubmit="return validateForm()"><br>
      <label class="input-container">Name:</label><br>
      <input type="text" name="name" class="input-field" required><br><br>
      <label class="input-container"> Contact Number:</label>
      <input type="text" name="contact" class="input-field" required><br><br><br>
      <input type="submit" value="Confirm" class="submt"><br><br>
    </form>
  </div>

  <br><br><br>

  <?php
}
else
{
  echo '<script type="text/javascript">alert("You have not choosen any seat.")</script>';
  ?>
  <meta http-equiv="refresh" content="0; URL='ticket booking2.php?coach_id=<?php echo $bus_Id; ?> & date=<?php echo $date; ?>'"/> 
  <?php
}

?>

</div>


<br><br><hr>
<div class="tmp">
<a style="text-align: center;">
<br><h2>Availabe Bus Routes</h2>

<div class="tmp3">
  Dhaka To Chittagong<br>
  Dhaka To Rajshahi<br>
  Dhaka To Khulna<br>
  Dhaka To Barishal<br>
  Dhaka To Mymensingh<br>
  Dhaka To Rangpur<br>
  Dhaka To Chuadanga<br>
  Dhaka To Kushtia<br>
  Dhaka To Comilla<br> 
</div>

<div class="tmp2">
  Chittagong To Dhaka<br>
  Rajshahi To Dhaka<br>
  Khulna To Dhaka<br>
  Barishal To Dhaka<br>
  Mymensingh To Dhaka<br>
  Rangpur To Dhaka<br>
  Chuadanga To Dhaka<br>
  Kushtia To Dhaka<br>
  Comilla To Dhaka<br> 
</div>

<div class="tmp4">
  Rajshahi To Chittagong<br>
  Barishal To Rajshahi<br>
  Comilla To Khulna<br>
  Kushtia To Barishal<br>
  Chuadanga To Mymensingh<br>
  Rajshahi To Rangpur<br>
  Chittagong To Chuadanga<br>
  Bhola To Kushtia<br>
  Sylhet To Comilla<br> 
</div>


</a>
<br><br>
</div>

<br>
<hr>

<div class="tmp5">
  <br>

  <div class="tmp6">
    Developed and Maintained by <br><br>
    Saifuzzaman Saif <br>
    Md Shariful Islam<br><br>
  </div>

</div>
<hr>

</body>
</html>
