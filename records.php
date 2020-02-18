<?php

class service{

    public function get_service(){

    	$data = array(

    		 array(
 				'id'=>'Select Folio Number', 	
			),

 				 array(
 				'id'=>6605,
 			 	'user_name' => 'Shoukat',
 			 	 'funds' =>[
 			 	 		 
 			 	 		 [
 			 	 		'fundname'=>'Select Fund',
		 			 	 ],
 			 	 	[
 			 	 		'fundname'=>'Cash Fund',
 			 	 		'bal'=>415454,
 			 	 		'limit'=>140000,
						'remaining_bal'=>60000,

		 			 	 ],[
 			 	 		'fundname'=>'Fundtwo',
 			 	 		'bal'=>444,
 			 	 		'limit'=>140000,
						'remaining_bal'=>60000,

		 			 	 ],
 			 	 ],
				
				'select_bank'=>'JS Bank',
				'account_title'=>'Shoukat Ali',
				'account_no'=>12345478901122387,
				'cnic_no'=>1234547890112,

			),

  			array('id'=>6604,
  				'user_name' => 'Ali',
  				 'funds' =>[
  				 	 	 [
 			 	 		'fundname'=>'Select Fund',
		 			 	 ],
 			 	 		[
 			 	 		'fundname'=>'Fundthree',
 			 	 		'bal'=>2343434,
 			 	 		'limit'=>150000,
						'remaining_bal'=>70000,

		 			 	 ],[
 			 	 		'fundname'=>'Fundfour',
 			 	 		'bal'=>4325444,
 			 	 		'limit'=>440000,
						'remaining_bal'=>640000,

		 			 	 ],
 			 	 ],
				'select_bank'=>'MSB Bank',
				'account_title'=>'Ali raza',
				'account_no'=>22345478901122387,
				'cnic_no'=>1134547890112,
			),

  			 array('id'=>6603,
  			 	'user_name' => 'Tanveer',
  			 	 'funds' =>[
 						 [
 			 	 		'fundname'=>'Select Fund',
		 			 	 ],

 			 	 	[
 			 	 		'fundname'=>'Cash Fund',
 			 	 		'bal'=>4435435,
 			 	 		'limit'=>45450,
						'remaining_bal'=>2454540,

		 			 	 ],[
 			 	 		'fundname'=>'Income Fund',
 			 	 		'bal'=>4543544,
 			 	 		'limit'=>454522,
						'remaining_bal'=>423454,

		 			 	 ],
 			 	 ],
  			 	
				'select_bank'=>'Alied Bank',
				'account_title'=>'tanveer raza',
				'account_no'=>33345478901122387,
				'cnic_no'=>2234547890112,
			),

  			array('id'=>6602,
  				'user_name' => 'Aslam',
  				 'funds' =>[
  				 		 [
 			 	 		'fundname'=>'Select Fund',
		 			 	 ],
 			 	 	[
 			 	 		'fundname'=>'Fundseven',
 			 	 		'bal'=>7415454,
 			 	 		'limit'=>1230000,
						'remaining_bal'=>760000,

		 			 	 ],[
 			 	 		'fundname'=>'Fundeight',
 			 	 		'bal'=>786476,
 			 	 		'limit'=>452652,
						'remaining_bal'=>125000,

		 			 	 ],
 			 	 ],
  				
				'select_bank'=>'UBL Bank',
				'account_title'=>'Aslam khan',
				'account_no'=>44345478901122387,
				'cnic_no'=>3334547890112,
			),
 
  );

	
			
	return $data;
	
    }

}

?>