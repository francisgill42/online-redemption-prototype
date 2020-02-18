
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

         <div class="row">

          <div class="col-md-6">
           
            <label id="fn">Fund Name:</label>
          </div>

          <div class="col-md-6">
            
            <label id="fname"></label>
          
          </div>

        </div>

          <div class="row">

           <div class="col-md-6">
          
            <label id="ra">Redemption amount:</label>
          
           </div>

          <div class="col-md-6">
         
          <label id="red_amnt"></label>
          
          </div>

        </div>

        <div class="row">

           <div class="col-md-6">
          
            <label id="bn">Bank Name:</label>
          
           </div>

          <div class="col-md-6">
         
          <label id="bnk_name"></label>
          
          </div>

        </div>

        <div class="row">

           <div class="col-md-6">
          
            <label id="ac_n">Account Number:</label>


           </div>
      
          <div class="col-md-6">
         
        <label id="ac_num"> 

        </label>
    
          </div>

        </div>

        <div class="row">

           <div class="col-md-6">
          
            <label id="ac_t">Account Title:</label>
          
           </div>

          <div class="col-md-6">
         
          <label id="ac_tit"></label>
          
          </div>

        </div>

         <div class="row">

           <div class="col-md-6">
          
            <label id="nic">CNIC:</label>
          
           </div>

          <div class="col-md-6">
         
          <label id="cnic_noo"></label>
          
          </div>

        </div>





        
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<div class="con-main">
<h2 style="text-align: center; color: #3C9646;">HBL Asset Management Limited</h2>
<div class="container cont2">

<form id="target" class="frm" action="ibft_redemption.php" method="post">

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
<!--    <input type="text" class="form-control" id="result" placeholder="" name="result"> -->
</div>

<button name="btncancel" style="" type="submit" class="btn btn-default">Cancel</button> 
<button name="btn" type="button" class="btn btn-success" data-toggle="modal"  id="smt">Submit</button>
<!-- <button name="btnn" type="submit" class="btn btn-success" id="smt">Submit</button> -->

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

$('#cnic_no').val(obj.cnic_no);


});



});






$('#fundname').change(function(){

let fdname = this.value;

let id = $('#folio').val();

// alert(fdname);

$.get('http://localhost/pro/webservices/fundapi.php?id='+id+'&fundname='+fdname,function(data){

var ab = JSON.parse(data);

// console.log(ab);    
$('#blnc').val(ab[0].bal);

$('#ibft').val(ab[0].limit);

$('#remain_bl').val(ab[0].remaining_bal);



// console.log(data);


});

});

$("#folio").click(function() {
    $(this).closest('form').find("#blnc").val("");
    $(this).closest('form').find("#ibft").val("");
    $(this).closest('form').find("#remain_bl").val("");
    $(this).closest('form').find("#amnt").val("");
});


var count =5;

$('#smt').click(function() {

var id1 = parseInt($('#amnt').val()); 
var id2 = parseInt($('#ibft').val()); 


if (id1 < id2) { 

$('#myModal').modal('show');

let acc_no = $('#ac_no').val();

let ac_title = $('#ac_title').val();

// console.log(ac_title); 

$.get('http://localhost/pro/webservices/server.php?acc_no='+acc_no+'&ac_title='+ac_title,function(data){

var ax = JSON.parse(data);

if (ax.length > 0) {

$('#ac_num').text(ax[0].ac_no);
$('#ac_tit').text(ax[0].ac_title);
$('#cnic_noo').text(ax[0].cnic_no);

$('#fname').text(ax.funds);
$('#red_amnt').text(ax.bal);
$('#bnk_name').text(ax.select_bank);

console.log(ax);


// console.log(ax);
  // window.location.href = "http://localhost/pro/webservices/ibft_redemption.php";










 



}

else
{
  alert('title mismatech');
  window.location.reload();
}



});




count = count-1;

if(count > 0){
$('#result span').text('0' +count);

}

else

{
$('#result').text('Transaction Limit exceed'); 
setTimeout(function(){ 
 location.reload();
}, 20000);
$('#smt').hide();


}



}

else if(id1 > id2)
{
$('#result').text('Your amount is greater than IBFT Limit');
setTimeout(function(){ 
 location.reload();
}, 20000);

}


else
{
$('#result').text('Please fill your specific amount');
setTimeout(function(){ 
 location.reload();
}, 20000);

}


});










</script>

