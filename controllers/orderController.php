<?php
    require_once 'models/db_config.php' ;	
      
   
	 $fname="";
    $err_fname="";
  
    $iname="";
    $err_iname="";
    $inamee = "";
    $err_inamee="";


    $quantity="";
    $err_quantity="";
    $requirement="";
    $err_requirement="";

    $phone="";
    $err_phone ="";
    
   $email="";
$err_email="";

$address="";
$err_address="";
	$hasError=false;
	

		
	
	
		
			 
			  if(isset($_POST["place_Order"])){

             





		 
			    if(empty($_POST["fname"]))
            {
                $hasError = true ;
                $err_fname = "Item Name required!" ;
            }
            else 
            {
                $fname = $_POST["fname"] ;
            }



            if(empty($_POST["iname"]))
            {
                $hasError = true ;
                $err_iname = "Item Name required!" ;
            }
            else 
            {
                $iname = $_POST["iname"] ;
            }

            if(empty($_POST["inamee"]))
            {
                $hasError = true ;
                $err_inamee = "Item Name required!" ;
            }
            else 
            {
                $inamee = $_POST["inamee"] ;
            }



            if(empty($_POST["quantity"]))
            {
                $hasError = true ;
                $err_quantity = "Quantity required!" ;
            }
            else 
            {
                $quantity = $_POST["quantity"] ;
            }


            if(empty($_POST["requirement"]))
            {
                $hasError = true ;
                $err_requirement = "Additional Requirement required!" ;
            }
            else 
            {
                $requirement = $_POST["requirement"] ;
            }






              if(empty($_POST["phone"])){
                 $err_phone="Insert Your Phone Number";
             }
             elseif(!is_numeric($_POST["phone"])){
                 $err_phone="[Phone number should contain Numeric values only]";
             }
             elseif(strlen($_POST["phone"])<11){
                 $err_phone="Phone Number Must Be 11 Charachter Long";
             }
             elseif(strlen($_POST["phone"])>11){
                 $err_phone="Phone Number Must Be 11 Charachter Long";
             }
             else{
                 $phone=$_POST["phone"];
             }





          if (empty($_POST["email"])) {
                 $err_email = "Email is required";
             }
             elseif(!strpos($_POST["email"],"@")){
                 $err_email="[Email must contain @]";
             }           
             else {
                 $email =$_POST["email"];
             }


             if(empty($_POST["address"]))
            {
                $hasError = true ;
                $err_address = "Address required!" ;
            }
            else 
            {
                $address = $_POST["address"] ;
            }

			 insertPlaceorder ($fname,$iname,$inamee,$quantity,$requirement,$phone,$email,$address);
		}

		
	
	function insertPlaceorder($fname,$iname,$inamee,$quantity,$requirement,$phone,$email,$address)
    {
        $query = "INSERT INTO placeorder VALUES (NULL,'$fname','$iname','$inamee','$quantity','$requirement','$phone','$email','$address')" ;
     
        execute($query) ;
		 
    }

   
	 
	 
    
?>