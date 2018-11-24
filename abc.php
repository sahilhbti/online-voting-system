
<?php   

   $otp =  $_REQUEST['otp'];
   $party = $_REQUEST['party'];
   $add  = $_REQUEST['add'];
   $vot = $_REQUEST['vot'];
   $acc = $_REQUEST['acc'];

$conn = new mysqli("localhost","root","","election");
$sql = "SELECT otp FROM bharat WHERE aadhar  = '$add' AND vote_id = '$vot' AND phone = '$acc' AND done = 'false' " ; 
$result =  $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $otp1  = $row["otp"];
    }
}
if(!strcmp($otp,$otp1)) 

{
	  $sq = "UPDATE bharat SET done='true'  WHERE aadhar  = '$add' AND vote_id = '$vot' AND phone = '$acc' AND done = 'false'";
          $result =  $conn->query($sq);
          $sl =  "UPDATE bharat SET party ='$party'  WHERE aadhar  = '$add' AND vote_id = '$vot' AND phone = '$acc' ";
          $result = $conn->query($sl);
   echo "a";
  
}
else
{ 
 
}
?>

