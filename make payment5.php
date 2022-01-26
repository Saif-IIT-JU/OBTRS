<!DOCTYPE html>
<html>
<head>
  <title>Make Payment</title>
<style>

.row {
  display: flex;
}

.column {
  flex: 50%;
  border: 3px solid lightgrey;
  height: 520px;
}

.top {
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

.input-container{
  padding-bottom: 30px;
  width: 100%;
}
.input-field {
  width:40%;
  padding: 10px;
  background: lightgrey;
  outline: none;
  border: 2px transparent;  
  margin-left: 11%;
}
         
.input-field:focus {
  border: 2px grey;
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
.input-field5 {
  width:67%;
  padding: 10px;
  background:#EEEAE9;
  outline: none;
  border: 1px transparent;  
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

.rsb
{
  border: 2px solid;
  margin-left: 42%;
  margin-right: 48%;
  padding: 10px;
  font-size: 16px;
  background-color: lightgrey;
  
}

.btck
{
  border: 2px solid;
  margin-left: 200px;
  margin-right: 400px;
  margin top: -100px;
}
.box
{
  text-align: left;
  margin-left: 31%;
}
  
</style>

<script type="text/javascript">
  function PrintContent(conts){
    var printcontents = document.getElementById(conts).innerHTML;
    var origin = document.body.innerHTML;

    document.body.innerHTML = printcontents;
  //  alert(printcontents);
    window.print();

    document.body.innerHTML = origin;
  }
</script>

</head>
<body>

<ul class="top">
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="bus reservationn.php">Bus Reservation</a></li>
  <li><a href="make payment.php">Verify Payment Method</a></li>
  <li><a href="cancel ticket.php">Cancel Ticket</a></li>
  <li><a href="bus schedule.php">Bus Schedule</a></li>
  <li><a href="make complain.php">Make Complain</a></li>
  <li style="float:right"><a href="contact.php">Contact us</a></li>
  <li style="float:right"><a href="about.php">About</a></li>
</ul><br><br>

  <div class="row">
    <div class="column">
  <img src="bus9.jpg" height="500" width="600">
</div>
    <div class="column">

    <?php

    $id = $_POST['transaction_no'];
    $tot = $_GET['amount'];
    $booking_id=$_GET['booking_id'];

    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo '<script>alert("Connection Failed. Try again please.")</script>';
      ?><meta http-equiv="refresh" content="0; URL='make payment3.php'"/> <?php
    }
    else
    {
     // echo "connection successfull";
      $q0 = "SELECT * FROM transactions WHERE id='".$id."' AND amount='".$tot."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
      if($n0==0)
      {
        echo '<script>alert("Wrong transaction id.")</script>';
        ?><meta http-equiv="refresh" content="0; URL='make payment3.php'"/> <?php
      }
      else
      {
       // echo "saif";
       
        $q1 = "UPDATE booking SET status='yes' WHERE booking_id='".$booking_id."' ";
        $r1 = mysqli_query($conn, $q1);
        if($r1)
        {
          echo '<script>alert("Your payment successfully done.")</script>';
          $q2 = "INSERT INTO usedTransaction(id, amount) VALUES('".$id."', '".$tot."')";
          $r2 = mysqli_query($conn, $q2);
          $q100 = "DELETE FROM transactions WHERE id='".$id."'";
          $r100 = mysqli_query($conn, $q100);

          $q3 = "SELECT * FROM booking WHERE booking_id='".$booking_id."'";
          $r3 = mysqli_query($conn, $q3);
          $seat_cnt = mysqli_num_rows($r3);
          $name=""; $contact=""; $jdate=""; $bus_id=""; $tot=""; $flag=""; $from=""; $to=""; $type="";
          while($row3 = mysqli_fetch_assoc($r3))
          {
              $name = $row3["name"];
              $contact = $row3["contact"];
              $jdate = $row3["jdate"];
              $bus_id = $row3["bus_Id"];
              $tot = $row3["amount"];
              $flag = $row3["status"];
          }
          $status = "PAID";

          $q4 = "SELECT * FROM buses WHERE bus_Id='".$bus_id."'";
          $r4 = mysqli_query($conn, $q4);
          
          while($row4 = mysqli_fetch_assoc($r4))
          {
              $from = $row4["from_city"];
              $to =  $row4["to_city"];
              $type = $row4["type"];
          }

            ?>
            <div class="">
              <div id="printableArea"> <br><br>
                <pre><h3>                       Passenger Ticket</h3></pre><br>
              <pre>
              Name of Passenger <?php echo "      : ". $name; ?><br>
              Contact Number <?php echo "         : ". $contact; ?><br>
              Journey Starts From <?php echo "    : ". $from; ?><br>
              Journey Ends In <?php echo "        : ". $to; ?><br>
              Date of Journey  <?php echo "       : ". $jdate; ?><br>
              Total Number of Seat <?php echo "   : ". $seat_cnt; ?><br>
              Your Booking_ID      <?php echo "   : ". $booking_id; ?><br>
              Coach ID  <?php echo "              : ". $bus_id; ?><br>
              Coach Type <?php echo "             : ". $type; ?><br>
              Total Amount of Money <?php echo "  : ". $tot; ?><br>
              Payment Status <?php echo "         : ". $status?><br>
            </pre>
              
            </div>
          </div>
          <pre>
                           <input type="button" onclick="PrintContent('printableArea')" value="Print Your Ticket">
          </pre> <?php

        }

      }
    }

  ?>
</div>
</div>
    

<br><hr>

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
