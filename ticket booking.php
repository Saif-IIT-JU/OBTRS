<!DOCTYPE html>
<html>
<head>
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
  margin-left: 30%;
  margin-right: 30%;
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


<?php

$id = $_GET['coach_id'];
$date = $_GET['date'];
echo $id. " ". $date;

?>


<div class="box">

  <form action="bus reservation2.php" method="post">
    <div class="input-field2">
      <label class="input-field3">Name </label><br>
      <input class="input-field" type="text" name="name" required><br>
    </div>
    
    <div class="input-field2">
      <label class="input-field3">Contact Number </label><br>
      <input class="input-field" type="text" name="contact" required><br>
    </div>

    <div class="input-field2">
      <label for="from" class="input-field3">From:</label><br>
            <select class="input-field4" type="text"  name="from" id="from">
            <option value="Enter city">Enter city</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Khulna">Khulna</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Mymensingh">Mymensingh</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Jessor">Jessor</option>
            <option value="Chuadanga">Chuadanga</option>
            <option value="Kustia">Kustia</option>
            <option value="Rangamati">Rangamati</option>
            <option value="Cox's Bazar">Cox's Bazar</option>
            </select><br>
    </div>

    <div class="input-field2">
      <label for="to" class="input-field3">To:</label><br>
            <select class="input-field4" type="text"  name="to" id="to">
            <option value="Enter city">Enter city</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Khulna">Khulna</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Mymensingh">Mymensingh</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Jessor">Jessor</option>
            <option value="Chuadanga">Chuadanga</option>
            <option value="Kustia">Kustia</option>
            <option value="Rangamati">Rangamati</option>
            <option value="Cox's Bazar">Cox's Bazar</option>
            </select><br>
    </div>

    <div class="input-field2">
      <label class="input-field3">Journey Date</label><br>
      <input class="input-field" type="Date" name="date" required><br>
    </div>

    <div class="input-field2">
      <label for="time" class="input-field3">Time:</label><br>
            <select class="input-field4" type="text"  name="time" id="time" required>
            <option value="12:00 AM">12:00 AM</option>
            <option value="05:00 AM">05:00 AM</option>
            <option value="06:00 AM">06:00 AM</option>
            <option value="07:00 AM">07:00 AM</option>
            <option value="08:00 AM">08:00 AM</option>
            <option value="09:00 AM">09:00 AM</option>
            <option value="10:00 AM">10:00 AM</option>
            <option value="12:00 PM">12:00 PM</option>
            <option value="02:00 PM">02:00 PM</option>
            <option value="04:00 PM">04:00 PM</option>
            <option value="05:00 PM">05:00 PM</option>
            <option value="06:00 PM">06:00 PM</option>
            <option value="07:00 PM">07:00 PM</option>
            <option value="08:00 PM">08:00 PM</option>
            <option value="09:00 PM">09:00 PM</option>
            <option value="10:00 PM">10:00 PM</option>
            </select><br>
    </div>

    <div class="input-field2">
      <label for="coach type" class="input-field3">Coach-Type:</label><br>
            <select class="input-field4" type="text"  name="type" id="type" required>
            <option value="AC">AC</option>
            <option value="NON-AC">NON-AC</option>
            </select><br>
    </div><br>

    <p style="text-align: center;"><input type="submit" value="Submit"></p><br><br>

  </form>

</div>


<br><br><br>

</body>
</html>
