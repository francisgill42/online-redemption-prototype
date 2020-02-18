<?php

 $db = mysqli_connect('localhost','root','','ibft_redemption')
 or die('Error connecting to MySQL server.');

// if(isset($_POST['submit']))

{

$fname = $_POST['fname'];
$red_amnt = $_POST['red_amnt'];
$bnk_name = $_POST['bnk_name'];
$ac_num = $_POST['ac_num'];
$ac_tit = $_POST['ac_tit'];
$cnic_noo = $_POST['cnic_noo'];
 		

$sql = "INSERT INTO ibft_redembtion_t(fd_name, rd_amount, bnk_name, ac_num, ac_tit, cnic_new) VALUES ('$fname', '$red_amnt', '$bnk_name', '$ac_num', '$ac_tit', '$cnic_noo')";

if(mysqli_query($db,$sql))
{
	$arrr = [$fname,$red_amnt,$bnk_name,$ac_num,$ac_tit,$cnic_noo];

	echo json_encode($arrr);	
}

}












?>
