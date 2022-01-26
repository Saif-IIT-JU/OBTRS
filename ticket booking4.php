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
  height: 550px;
  border: 3px solid grey;
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
  margin-left: 5%;
  margin-right: 35%;
  margin-top: -40%;
  color: red;
}
.box2{
  margin-right: 35%;
  margin-top: -41%;
  color: red;
  font-size: 17px;
}

.input-container{
  margin-left: 50px;
  padding-bottom: 30px;
  width: 100%;
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

<div class="row">
  <div class="column">

<?php

$bus_Id = $_GET['bus_Id'];
$date = $_GET['date'];
$list = $_GET['seat_no'];
$seat_no = unserialize(urldecode($list));

$name = $_POST['name'];
$contact = $_POST['contact'];

//echo $bus_Id. " ". $date. " ". gettype($seat_no). "<br>";

$conn = mysqli_connect('localhost', 'root', '', 'web project');
if(!$conn){

  echo '<script type="text/javascript"> alert("Connection Failed.Please try again!")</script>';
  ?>
  <meta http-equiv="refresh" content="0; URL='ticket booking2.php?coach_id=<?php echo $bus_Id; ?> & date=<?php echo $date; ?>'"/> 

  <?php
  
}
else
{
  $id = 1; $status = 'no';
  for($tmp = 1; $tmp<=10000; $tmp++){

  $tmp2 = (string)$tmp;
  $q1 = "SELECT * FROM booking WHERE booking_id='".$tmp2."'";
  $r1 = mysqli_query($conn, $q1);
  if(mysqli_num_rows($r1)==0){
    $id = $tmp; break;
  }
}

    $flag = 0;
    $q2 = "SELECT * FROM buses WHERE bus_Id='".$bus_Id."'";
    $r2 = mysqli_query($conn, $q2);
    while($row2=mysqli_fetch_assoc($r2))
    {
      $type = $row2["type"];
      if($type=="AC") $flag = 1;
    }

    $tot = 0;
    $ln = count($seat_no);
    
    for($i=0; $i<$ln; $i++)
    {
      if($flag==0) $tot += 500;
      else $tot += 800;
       $stNo = $seat_no[$i];

       $q0 = "INSERT INTO booking(bus_Id, seat_no, name, contact, date, booking_id, status, jdate) VALUES('".$bus_Id."', '".$stNo."', '".$name."', '".$contact."', '".$date."', '".$id."', '".$status."', '".$date."')";
       $r0 = mysqli_query($conn, $q0);
    }

    // echo "connection successfull";
      $q0 = "SELECT * FROM booking WHERE booking_id='".$id."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
      $sts="( ";
        $jdate="";
        $tot = 0;
        $bus_Id;
        $name="";
        $status="";
        $flag="";
        $from = "";
        $to = "";
        $contact="";   $hudai = 0;
        while($row0=mysqli_fetch_assoc($r0))
        {
          $jdate = $row0["date"];
          $bus_Id = $row0["bus_Id"];
          $name = $row0["name"];
          $flag=$row0["status"];
          $contact=$row0["contact"];
          $m = (int)$row0["seat_no"];
          $dv = $m/4; $rm = $m%4; if($rm==0) $rm = 4;
          $ch = chr(65+$dv);
          $stn = ""; if($hudai==1) $stn.=", ";
          $stn.=$ch; $stn.="-"; $stn .=(string)$rm;
          $sts.=$stn; $hudai = 1;
        }
        $sts.=" )";

        if($flag=="no") $status = "NOT PAID";
        else $status = "PAID";

        $date = date('Y-m-d');
        
          $q1 = "SELECT * FROM buses WHERE bus_Id='".$bus_Id."'";
          $r1 = mysqli_query($conn, $q1);
          $type;
          while($row1=mysqli_fetch_assoc($r1))
          {
            $type = $row1["type"];
            $from = $row1["from_city"];
            $to = $row1["to_city"];
          }
          if($type=="AC") $tot = 800*$n0;
          else $tot = 500*$n0;

         // echo $tot;

         $amq = "UPDATE booking SET amount = '".$tot."' WHERE booking_id='".$id."'";
         $amr = mysqli_query($conn, $amq);
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
              Total Number of Seat <?php echo "   : ". $n0. " ". $sts; ?><br>
              Your Booking_ID      <?php echo "   : ". $id; ?><br>
              Coach ID  <?php echo "              : ". $bus_Id; ?><br>
              Coach Type <?php echo "             : ". $type; ?><br>
              Total Amount of Money <?php echo "  : ". $tot; ?><br>
              Payment Status <?php echo "         : ". $status?><br>
            </pre>
              
            </div>
          </div>
          <pre>
                           <input type="button" onclick="PrintContent('printableArea')" value="Print Your Ticket">
          </pre>

          <?php


$des = $to;
$to = $contact;;
$token = "31365fa19e14026fd6cd32e51dc95717";
$message = "Your request for booking ticket(from "; $message.=$from; $message.=" to "; $message.=$des; $message.=" on date: "; $message.=$jdate; $message.=") has been confirmed."; $message.=" Total fare "; $message.=$tot; $message.=" tk("; $message.=$status; $message.="). Your booking id is "; $message.=$id; $message.=" .";

$url = "http://api.greenweb.com.bd/api.php?json";


$data= array(
'to'=>"$to",
'message'=>"$message",
'token'=>"$token"
); // Add parameters in key value
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);
$er = curl_error($ch);

//Result
//echo $smsresult;
$sq = "INSERT INTO sms(contact, result, er) VALUES('".$contact."', '".$smsresult."', '".$er."')";
$rq = mysqli_query($conn, $sq);

//Error Display
//echo curl_error($ch);


}

?>
</div>
<div class="column">
  <img src="seat5.jpg" alt="LOGO" width="100%" height="550">
</div>
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
