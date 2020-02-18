<?php

$options = array("location" =>  "http://localhost/pro/webservices/service.php",
"uri" => "http://localhost");

$client = new SoapClient(null, $options);

$data = $client->get_service(); 

?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<div class="container">

<!-- Start IBFT Dedemption Modal -->  

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color: #3C9646; margin-top: 20px;">IBFT Redemption</h4>
</div>


<div class="contoner"> 
<form method="post"> 

<div class="row">

<br>

<div class="col-md-6">

<label id="fn">Fund Name:</label>
</div>

<div class="col-md-6">

<label id="fname" name="fname"></label>

</div>

</div>

<div class="row">

<div class="col-md-6">

<label id="ra">Redemption amount:</label>

</div>

<div class="col-md-6">

<label id="red_amnt" name="red_amnt"></label>

</div>

</div>

<div class="row">

<div class="col-md-6">

<label id="bn">Bank Name:</label>

</div>

<div class="col-md-6">

<label id="bnk_name" name="bnk_name"></label>

</div>

</div>

<div class="row">

<div class="col-md-6">

<label id="ac_n">Account Number:</label>

</div>

<div class="col-md-6">

<label id="ac_num" name="ac_num"> </label>

</div>

</div>

<div class="row">

<div class="col-md-6">

<label id="ac_t">Account Title:</label>

</div>

<div class="col-md-6">

<label id="ac_tit" name="ac_tit"></label>

</div>

</div>

<div class="row">

<div class="col-md-6">

<label id="nic">CNIC:</label>

</div>

<div class="col-md-6">

<label id="cnic_noo" name="cnic_noo"></label>

</div>

</div>

<div class="row">

<div class="col-md-6">


<label> OTP Transaction Password </label> 


<input type="text" class="form-control" id="otp" placeholder="" name="otp" value="" required>


<div style="padding-top: 10px; padding-bottom:10px;">
<button name="submit" type="button" class="btn btn-success" data-toggle="modal" id="otpbtn">Submit</button>
</div>

</div>

<div class="col-md-6"></div>  

</div>
</form>

</div>

<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>

</div>

<!-- closed IBFT Dedemption Modal -->




<!-- start Transaction Successfully Modal -->

<div class="container">

<!-- Modal -->
<div class="modal fade" id="miModal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" id="tsc_cl" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color: #3C9646; margin-top: 20px;">IBFT Redemption</h4>
</div>

<div class="contoner"> 

<h4 class="modal-title" style="color: #3C9646; margin-top:20px; text-align: center;">Transaction Successfully completed</h4>

<div class="row">

<br>

<div class="col-md-6">

<label id="fn">Fund Name:</label>
</div>

<div class="col-md-6">

<label id="ffname"></label>

</div>

</div>

<div class="row">

<div class="col-md-6">

<label id="ra">Redemption amount:</label>

</div>

<div class="col-md-6">

<label id="rred_amnt"></label>

</div>

</div>

<div class="row">

<div class="col-md-6">

<label id="bn">Bank Name:</label>

</div>

<div class="col-md-6">

<label id="bbnk_name"></label>

</div>

</div>

<div class="row">

<div class="col-md-6">

<label id="ac_n">Account Number:</label>


</div>

<div class="col-md-6">

<label id="aac_num"> 

</label>

</div>

</div>

<div class="row">

<div class="col-md-6">

<label id="ac_t">Account Title:</label>

</div>

<div class="col-md-6">

<label id="aac_tit"></label>

</div>

</div>

<div class="row">

<div class="col-md-6">

<label id="nic">CNIC:</label>

</div>

<div class="col-md-6">

<label id="ccnic_noo"></label>

</div>

</div>

</div>

<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal" id="tsc_ok">Ok</button>

</div>
</div>

</div>
</div>

</div>


<!-- closed Transaction Successfully Modal -->

<!-- start HBL Asset Management Limited Form -->


<div class="con-main" id="con_main">
<h2 style="text-align: center; color: #3C9646;">HBL Asset Management Limited</h2>
<div class="container cont2">

<form id="target" class="frm" action="" method="post">

<div class="col-md-6" style="background-color:#fff;">

<div class="form-group">

<label class="lb_flo" for="flo">Folio No:</label>

<select name="id" class="form-control" id="folio">
<?php foreach ($data as $data) {
?>
<option value="<?php echo $data['id'] ;?>" class="o1"><?php echo $data['id'] ;?></option>

<?php }?>

</select>

</div>

<div class="form-group">

<label class="lb_flo" for="email">User Name:</label>

<input readonly="" name="user_name" class="form-control" id="usname"> 

</div>

<div class="form-group">
<label for="email">Fund Name:</label>
<select class="form-control" id="fundname" placeholder="All Funds"></select>
</div>

<div class="form-group">
<label for="pwd">Amount:</label>	
<input value="" type="number" class="form-control" id="amnt" placeholder=""  name="amnt">
<div id="amount_show" style="color: #EA4137;"></div>
</div>

<div class="form-group">
<label for="pwd">Select Bank:</label>
<input readonly type="text" class="form-control" id="bnk" name="bnk">
</div>

<div class="form-group">
<label for="pwd">Bank Account Title:</label>
<input readonly type="text" class="form-control" id="ac_title"  name="ac_title">
</div>

<div class="form-group">
<label for="pwd">Bank Account Number:</label>
<input readonly type="text" class="form-control" id="ac_no" name="ac_no">
</div>

<div class="form-group">
<label for="pwd">CNIC NO:</label>
<input readonly="" type="text" class="form-control" id="cnic_no" name="cnic_no">
</div>

</div>

<div class="col-md-6" style="min-height: 601px;background-color: #d7ebf5;">

<div class="form-group">
<label class="lb_blnce" for="pwd">Balance:</label>

<input readonly type="text" class="form-control" id="blnc" name="balance" value="">

</div>

<div class="form-group">
<label for="limit">IBFT Limit:</label>
<input readonly type="number" class="form-control" id="ibft" name="ibft">
</div>

<div class="form-group">
<label for="rbc">Remaining Balance:</label>
<input readonly type="number" class="form-control" id="remain_bl"  name="remain_bl">
</div>

<div class="form-group">
<label id="result" style="color: #EA4137;">Transaction Limit <span>05</span></label>
</div>

<button name="btncancel" style="" type="submit" class="btn btn-default">Cancel</button> 
<button name="btn" type="button" class="btn btn-success" data-toggle="modal"  id="smt">Submit</button>

</div>	

<label id="otp1" style="color: #EA4137; display: none;">otp </label>

</form>
</div>

</div>

</body>
</html>

<!-- end HBL Asset Management Limited Form -->


<script type="text/javascript">


var all_data = [];


$('#folio').change(function(){

let id = this.value;

$.get('http://localhost/pro/webservices/api.php?id='+id,function(data){
var obj = JSON.parse(data);

// console.log(obj.funds);
$('#usname').val(obj.user_name);

$('#fundname').empty();

for(i in obj.funds)
{
$('#fundname').append('<option value="'+obj.funds[i].fundname+'" class="o1">'+obj.funds[i].fundname+'</option>');
}

// console.log(obj.select_bank);
$('#bnk').val(obj.select_bank);

// console.log(obj.account_no);
$('#ac_no').val(obj.account_no);

$('#ac_title').val(obj.account_title);

$('#cnic_no').val(obj.cnic_no);

});

});


$('#fundname').change(function(){

let fdname = this.value;
let id = $('#folio').val();

$.get('http://localhost/pro/webservices/fundapi.php?id='+id+'&fundname='+fdname,function(data){

var ab = JSON.parse(data);

$('#blnc').val(ab[0].bal);
$('#ibft').val(ab[0].limit);

$('#remain_bl').val(ab[0].remaining_bal);


});
});

var count =5;

$('#smt').click(function() {

var id1 = parseInt($('#amnt').val()); 
var id2 = parseInt($('#ibft').val()); 

if (id1 < id2) { 

$('#myModal').modal('show');

let acc_no = parseInt($('#ac_no').val());
let ac_title = $('#ac_title').val();

$.get('http://localhost/pro/webservices/server.php?acc_no='+acc_no+'&ac_title='+ac_title,function(data){
var newdata = JSON.parse(data);
all_data = newdata;
console.log(newdata);
if (newdata.length > 0) {

$('#fname').text($('#fundname').val());
$('#red_amnt').text(id1);
$('#bnk_name').text(newdata[0].bank);
$('#ac_num').text(newdata[0].ac_no);
$('#ac_tit').text(newdata[0].ac_title);
$('#cnic_noo').text(newdata[0].cnic_no);

console.log(shuffle('0123456789'));

var shfle = shuffle('0123456789');
localStorage.setItem("otp1", shfle);
console.log(shfle);

}

});

}

else {

$('#amount_show').text('Title mis matched');

}


});

$( "#amnt" ).keyup(function() {

var id1 = parseInt($('#amnt').val()); 
var id2 = parseInt($('#ibft').val()); 

if (id1 > id2) {
$('#amount_show').text('Amount is greater than IBFT Limit amount');

// setTimeout(function(){
// this.location.reload('#amount_show');
// }, 10000);

}
else
{
  $('#amount_show').text('');
}
});



function shuffle(param) {
var a = param.split(""),
n = a.length;

for(var i = n - 1; i > 0; i--) {
var j = Math.floor(Math.random() * (i + 1));
var tmp = a[i];
a[i] = a[j];
a[j] = tmp;


}

return a.join("").substr(0,5);

}

var count =0;

$('#otpbtn').click(function()

{
let otpp = $('#otp').val();
let ottp = localStorage.getItem('otp1');

// if ($('#otp').val() == ''){ 
//   alert('otp is required');
// }




if(otpp == ottp) 
{

// var data = {
// fname:$('#fname').text(),
// red_amnt:$('#red_amnt').text(),
// bnk_name:$('#bnk_name').text(),
// ac_tit:$('#ac_num').text(),
// ac_num:$('#ac_tit').text(),
// cnic_noo:$('#cnic_noo').text(),
// };
// console.log(all_data);
$('#ffname').text($('#fname').text());
$('#rred_amnt').text($('#red_amnt').text());
$('#bbnk_name').text($('#bnk_name').text());
$('#aac_num').text($('#ac_num').text());
$('#aac_tit').text($('#ac_tit').text());
$('#ccnic_noo').text($('#cnic_noo').text());

$('#miModal').modal('show');


}

else
{


count = count +1;
if(count >= 3)

{
alert('OTP Expired'); 
document.location.replace('main.php');
}
else{
  alert('Invalid OTP');
}

}


if(otpp == ottp) 
{
$("#myModal").hide();
}


});

$("#tsc_ok").click(function(){
// $("#myModal").modal("hide");
document.location.replace('main.php');
});

$("#tsc_cl").click(function(){
document.location.replace('client.php');


});










</script>

