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
  height: 540px;
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
  margin-left: 80px;
  
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

<div class="row">
<div class="column">
<div class="box">

  <?php

  $bus_Id = $_GET['coach_id'];
  $date = $_GET['date'];

  ?>

  <form action="ticket booking3.php?bus_Id=<?php echo $bus_Id; ?> & date=<?php echo $date; ?>" method="post">
    <pre> <h2>             Choose yout seat</h2></pre><br>
    <div style="font-size: 20px">
    
    <pre>
      Gate                 Driver<br><br>

    <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * FROM booking WHERE bus_Id='".$bus_Id."' AND seat_no='1' AND date='".$date."' ";
      $r0 = mysqli_query($conn, $q0); 
      if(mysqli_num_rows($r0)==0){
      $out=""; $out.='<input type="checkbox" id="A1" name="A[]" value="1">';

    echo $out; }
    else echo "  ";}?><label for="A1">A1</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * FROM booking WHERE bus_Id='".$bus_Id."' AND seat_no='2' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="A2" name="A[]" value="2">';

    echo $out; }
    else echo "  ";}?><label for="A2">A2</label>          <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='3' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="A3" name="A[]" value="3">';

    echo $out; }
    else echo "  "; }?><label for="A3">A3</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='4' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);

      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="A4" name="A[]" value="4">';

    echo $out; }
    else echo "  "; }?><label for="A4">A4</label>
    <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='5' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="B1" name="A[]" value="5">';

    echo $out; }
    else echo "  "; }?><label for="B1">B1</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='6' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="B2" name="A[]" value="6">';

    echo $out; }
    else echo "  "; }?><label for="B2">B2</label>          <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='7' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="B3" name="A[]" value="7">';

    echo $out; }
    else echo "  "; }?><label for="B3">B3</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='8' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="B4" name="A[]" value="8">';

    echo $out; }
    else echo "  "; }?><label for="B4">B4</label>
    <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='9' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="C1" name="A[]" value="9">';

    echo $out; }
    else echo "  "; }?><label for="C1">C1</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='10' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="C2" name="A[]" value="10">';

    echo $out; }
    else echo "  "; }?><label for="C2">C2</label>          <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='11' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="C3" name="A[]" value="11">';

    echo $out; }
    else echo "  "; }?><label for="C3">C3</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='12' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="C4" name="A[]" value="12">';

    echo $out; }
    else echo "  "; }?><label for="C4">C4</label>
    <?php
    $bus_Id = $_GET['coach_id'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='13' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="D1" name="A[]" value="13">';

    echo $out; }
    else echo "  "; }?><label for="D1">D1</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='14' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="D2" name="A[]" value="14">';

    echo $out; }
    else echo "  "; }?><label for="D2">D2</label>          <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='15' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="D3" name="A[]" value="15">';

    echo $out; }
    else echo "  "; }?><label for="D3">D3</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='16' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="D4" name="A[]" value="16">';

    echo $out; }
    else echo "  "; }?><label for="D4">D4</label>                  
    <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='17' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="E1" name="A[]" value="17">';

    echo $out; }
    else echo "  "; }?><label for="E1">E1</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='18' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="E2" name="A[]" value="18">';

    echo $out; }
    else echo "  "; }?><label for="E2">E2</label>          <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='19' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="E3" name="A[]" value="19">';

    echo $out; }
    else echo "  "; }?><label for="E3">E3</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='20' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="E4" name="A[]" value="20">';

    echo $out; }
    else echo "  "; }?><label for="E4">E4</label>
    <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='21' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="F1" name="A[]" value="21">';

    echo $out; }
    else echo "  "; }?><label for="F1">F1</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='22' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="F2" name="A[]" value="22">';

    echo $out; }
    else echo "  "; }?><label for="F2">F2</label>          <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='23' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="F3" name="A[]" value="23">';

    echo $out; }
    else echo "  "; }?><label for="F3">F3</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='24' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="F4" name="A[]" value="24">';

    echo $out; }
    else echo "  "; }?><label for="F4">F4</label>
    <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='25' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="G1" name="A[]" value="25">';

    echo $out; }
    else echo "  "; }?><label for="G1">G1</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='26' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="G2" name="A[]" value="26">';

    echo $out; }
    else echo "  "; }?><label for="G2">G2</label>          <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='27' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="G3" name="A[]" value="27">';

    echo $out; }
    else echo "  "; }?><label for="G3">G3</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='28' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="G4" name="A[]" value="28">';

    echo $out; }
    else echo "  "; }?><label for="G4">G4</label>
    <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='29' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="H1" name="A[]" value="29">';

    echo $out; }
    else echo "  "; }?><label for="H1">H1</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='30' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="H2" name="A[]" value="30">';

    echo $out; }
    else echo "  "; }?><label for="H2">H2</label>          <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='31' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="H3" name="A[]" value="31">';

    echo $out; }
    else echo "  "; }?><label for="H3">H3</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='32' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="H4" name="A[]" value="32">';

    echo $out; }
    else echo "  "; }?><label for="H4">H4</label>                  
    <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='33' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="I1" name="A[]" value="33">';

    echo $out; }
    else echo "  "; }?><label for="I1">I1</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='34' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="I2" name="A[]" value="34">';

    echo $out; }
    else echo "  "; }?><label for="I2">I2</label>          <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='35' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="I3" name="A[]" value="35">';

    echo $out; }
    else echo "  "; }?><label for="I3">I3</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='36' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="I4" name="A[]" value="36">';

    echo $out; }
    else echo "  "; }?><label for="I4">I4</label>
    <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='37' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="J1" name="A[]" value="37">';

    echo $out; }
    else echo "  "; }?><label for="J1">J1</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='38' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="J2" name="A[]" value="38">';

    echo $out; }
    else echo "  "; }?><label for="J2">J2</label>          <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='39' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="J3" name="A[]" value="39">';

    echo $out; }
    else echo "  "; }?><label for="J3">J3</label>  <?php
    $bus_Id = $_GET['coach_id'];
    $date = $_GET['date'];
    $conn = mysqli_connect('localhost', 'root', '', 'web project');
    if(!$conn)
    {
      echo "connection failed";
    }
    else
    {
      $q0 = "SELECT * from booking where bus_Id='".$bus_Id."' AND seat_no='40' AND date='".$date."'";
      $r0 = mysqli_query($conn, $q0);
      $n0 = mysqli_num_rows($r0);
    
      if($n0==0){
      $out=""; $out.='<input type="checkbox" id="J4" name="A[]" value="40">';

    echo $out; }
    else echo "  "; }?><label for="J4">J4</label>
              </pre>
    </div>

  <pre>                        <input type="submit" value="Confirm"> </pre><br><br>

  </form>

</div>
</div>

<div class="column"> 
  <img src="seat2.jpg" alt="LOGO" width="660" height="540">
 </div>

</div>


<br>
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
