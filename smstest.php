<?php        
$to = "01998220242";
$token = "5621181e8b95dcf09c5bece7d798112c";
$message = "Test SMS From Using API from foobar";

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

//Result
echo $smsresult;

//Error Display
echo curl_error($ch);

?>


/*
 $to = $contact;;
$token = "5621181e8b95dcf09c5bece7d798112c";
$message = "Your request for booking ticket(from "; $message.=$from; $message.=" to "; $message.=$to; $message.=" on date: "; $message.=$jdate; $message.=" has been confirmed."; $message.=" Total fare "; $message.=$tot; $message.=" tk.";  */