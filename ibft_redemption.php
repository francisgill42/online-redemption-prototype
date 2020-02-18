<!DOCTYPE html>
<html lang="en">
<head>
  <title>ibfi redemption</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container conts" style="width: 50%;">
  <h2 style="color: #3C9646; margin-top: 50px;">IBFT Redemption</h2>
  <table class="table">
   
    <tbody>
      <tr>
        <td>Fund Name: </td>
        <td id="csh"></td>
      </tr>

      <tr>
        <td>Redemption amount: </td>
        <td id="r_amnt"></td>
      </tr>

      <tr>
        <td>Bank Name</td>
        <td id="bnk"></td>     
      </tr>

      <tr>
        <td>Account Number:</td>
        <td><label id="ac_no"></label></td>     
      </tr>

      <tr>
        <td>Account Title:</td>
        <td id="ac_title"></td>     
      </tr>

      <tr>
        <td>CNIC: </td>
        <td id="ccnic"></td>     
      </tr>

       

      

    </tbody>
  </table>

       
        <div class="row">

        <div class="col-md-4">
        
       
       <label> OTP Transaction Password </label> 
        

        <input type="text" class="form-control" id="otp" placeholder="" name="otp" value="">
     

        <br>
        
        <button type="button" class="btn btn-success">Submit</button> 

        </div>

         <div class="col-md-8"></div>  


        </div>

</body>
</html>
