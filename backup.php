<?php

$options = array("location" =>  "http://localhost/pro/webservices/service.php",
"uri" => "http://localhost");





$client = new SoapClient(null, $options);

$data = $client->get_service(); 


if(isset($_POST['btn']))

{

$id = $_POST['id'];

foreach ($data as $a) {
if($id == $a['id']){	
$arrayName = $a['fundname'];
}



}


// foreach ($data as $ball) 
// {	
// if($ == $bal)	{
// $ball = $bal['bal'];
// }

// }


// if (!is_array($arrayName)) {
// 	$s = $arrayName;
// }
// else
// {}

}


// if(isset($_POST['id'])){
//   $id = $_POST['id'];

// }
// echo '<pre>';
// print_r($data);










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


<div class="con-main">
<h2 style="text-align: center; color: #3C9646;">HBL Asset Management Limited</h2>
<div class="container cont2">
<form class="frm" action="client.php" method="post">

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
<select class="form-control" id="fundname"></select>
</div>


<div class="form-group">
<label for="pwd">Amount:</label>	

<input value="" type="number" class="form-control" id="amnt" placeholder=""  name="amnt">

</div>

<div class="form-group">
<label for="pwd">Select Bank:</label>
<input readonly type="text" class="form-control" id="bnk" placeholder="Habib Bank Ltd" name="bnk">
</div>

<div class="form-group">
<label for="pwd">Account Title:</label>
<input readonly type="text" class="form-control" id="ac_title" placeholder="" name="ac_title">
</div>

<div class="form-group">
<label for="pwd">Account Number:</label>
<input readonly type="text" class="form-control" id="ac_no" placeholder="36748-67299-16836-87" name="ac_no">
</div>

</div>

<div class="col-md-6" style="min-height: 528px;background-color: #d7ebf5;">

<div class="form-group">
<label class="lb_blnce" for="pwd">Balance:</label>

<input readonly type="text" class="form-control" id="blnc" placeholder="" name="balance" value="balance">

</div>

<div class="form-group">
<label for="limit">IBFT Limit:</label>
<input readonly type="number" class="form-control" id="ibft" placeholder="" name="ibft">
</div>

<div class="form-group">
<label for="rbc">Remaining Balance:</label>
<input readonly type="number" class="form-control" id="remain_bl" placeholder="" name="remain_bl">
</div>

<div class="form-group">
<label id="result" style="color: #EA4137;">Transaction Limit <span>05</span></label>
<!--    <input type="text" class="form-control" id="result" placeholder="" name="result"> -->
</div>

<button name="btncancel" style="" type="submit" class="btn btn-default">Cancel</button> 
<button name="btn" type="button" class="btn btn-success" id="smt">Submit</button>

</div>	



</form>
</div>


</div>





</body>
</html>



<script type="text/javascript">

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


});
});


$('#fundname').change(function(){

let fdname = this.value;

let id = $('#folio').val();

// alert(fdname);

$.get('http://localhost/pro/webservices/fundapi.php?id='+id+'&fundname='+fdname,function(data){

var ab = JSON.parse(data);

console.log(ab);    
$('#blnc').val(ab[0].bal);

$('#ibft').val(ab[0].limit);

$('#remain_bl').val(ab[0].remaining_bal);

// console.log(data);


});
});


var count =5;

$('#smt').click(function() {
var id1 = parseInt($('#amnt').val()); 
var id2 = parseInt($('#ibft').val()); 

if (id1 < id2) {  

count = count-1;

if(count > 0){
$('#result span').text('0' +count);


}
else
{
$('#result').text('Transaction Limit exceed'); 
}


// console.log(count); 
}

else    
{
$('#result').text('you can not proceed');
}







});






</script>
