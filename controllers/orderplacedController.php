<?php 
	 require_once 'models/db_config.php';
//order e kintu oid nei nai just database e chilo ekhane del er kaje oid neya lagse mainly ashche orderplaced theke
	 $oid="";
   $err_oid="";
	 
	$hasError=false;


	 $hasError=false;
     if(isset($_POST["order_placed"]))	 
	 {
		     if(empty($_POST["oid"])){
				 $err_jid="Order Id Required";
			 }
			
			 else{
				 $oid=$_POST["oid"];
			 }

			 if(!$hasError){
				deleteplaceorder($oid);
			 }
		 }
			function deleteplaceorder($oid){
			$query="DELETE FROM PLACEORDER WHERE oid='$oid'";
			 $result = execute($query);
			}
?>