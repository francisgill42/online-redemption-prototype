<?php


$db = mysqli_connect('localhost','root','','ibft_redemption')
 or die('Error connecting to MySQL server.');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

$ac_title =  $_GET['ac_title'];
$acc_no =  $_GET['acc_no'];


$sql = "SELECT * FROM ibft";
$result = mysqli_query($db, $sql);
$arr = []; 

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // echo $row["ac_no"]."<br>". $row["ac_title"]."<br>".$row["cnic_no"]. "<br>";

       if ($acc_no == $row['ac_no'] && $ac_title == $row['ac_title']) {
   	
   		$arr[]=$row;

    	}


     
    }
     echo json_encode($arr);	
} 

mysqli_close($db);





?>