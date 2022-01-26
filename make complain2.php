<!DOCTYPE html>
<html>
<head>
  <title>Make Complain</title>
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
  border: 5px solid grey;
  margin-left: 30%;
  margin-right: 30%;
  background-color: lightgrey;
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
  border: 1px solid grey;
}
         
.input-field:focus {
  border: 1px grey;
}

.input-field2
{
  margin-left: 20%;
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

.input-field5
{
  margin-left: 115px;
  font-size: 20px;
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

.contact-in-textarea {
  width: 56%;
  height: 140px;
  margin-bottom: 20px;
  margin-left: 115px;
  
  outline: none;
  padding-top: 5px;
  padding-left: 5px;
  background-color: #EEEAE9;
  border: 1px solid grey;
  color: black;
  font-size: 12px;
  font-weight: 300;
  font-family: 'Poppins', sans-serif;
}

.contact-in-textarea::placeholder {
  color :black;
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
<body style="background-image: url();">

<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="bus reservationn.php">Bus Reservation</a></li>
  <li><a href="make payment.php">Verify Payment Method</a></li>
  <li><a href="cancel ticket.php">Cancel Ticket</a></li>
  <li><a href="bus schedule.php">Bus Schedule</a></li>
  <li><a href="make complain.php">Make Complain</a></li>
  <li style="float:right"><a href="contact.php">Contact us</a></li>
  <li style="float:right"><a href="about.php">About</a></li>
</ul>


    <?php

      $name = $_POST['name'];
      $contact = $_POST['contact'];
      $email = $_POST['email'];
      $msg = $_POST['msg'];

      $conn = mysqli_connect('localhost', 'root', '', 'web project');

      if(!$conn)
      {
        echo '<script>alert("Connection failed. Try again Please.")</script>';
      }
      else
      {
        $q = "INSERT INTO complain(name, contact, email, message) VALUES('".$name."', '".$contact."', '".$email."', '".$msg."')";
        $r = mysqli_query($conn, $q);

        if(!$r)
        {
          echo '<script>alert("Connection failed. Try again Please.")</script>';
        }
        else
        {
          echo '<script>alert("Thanks! We have received your complain. We will contact you later.")</script>';
        }
      }

    ?>


<meta http-equiv="refresh" content="0; URL='make complain.php'"/> 
<br><br><br></div><hr>
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
