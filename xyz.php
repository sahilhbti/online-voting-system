<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
     <?php
          $x =  $_REQUEST['add'];
          $y = $_REQUEST['vot'];
          $z = $_REQUEST['acc'];
         $conn  = new mysqli("localhost","root","","election");
         $sql  =  "SELECT COUNT(*) FROM bharat WHERE aadhar  = '$x' AND vote_id = '$y' AND phone = '$z' AND done = 'false'"; 
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc())
       {
          $GLOBALS['check']   = $row["COUNT(*)"];
       } 
      if ($check == '0') {
      	
      }
      else 
      {
      	
           $apiKey = urlencode('IZq/OQ26W18-pBn3cKDVBj5j3MZQ3dTZHjdI8PIpqB');
  // Message details
  $numbers = array($z);
  $sender = urlencode('TXTLCL');
  $nu  = rand(10000,19999);
  $message = rawurlencode($nu);
 
  $numbers = implode(',', $numbers);
 
  // Prepare data for POST request
  $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
  // Send the POST request with cURL
  $ch = curl_init('https://api.textlocal.in/send/');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  
         $sql = "UPDATE bharat SET otp='$nu'  WHERE aadhar  = '$x' AND vote_id = '$y' AND phone = '$z' AND done = 'false'";
          $result =  $conn->query($sql);
           echo 1234;


      }
      ?>
</body>
</html>
