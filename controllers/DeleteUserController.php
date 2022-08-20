<?php 
	 require_once 'models/db_config.php';

	 $jid="";
	 $err_jid= "";
	 $type="";
    $userid="";
    $username="";
    $password="";
    $phone=""; 
   $email="";
$address="";


$gender="";


$bdate= "";


	 $hasError=false;
     if(isset($_POST["delete_user"]))	 
	 {
		     if(empty($_POST["jid"])){
				 $err_jid="Jolly Roger Id Required";
			 }
			
			 else{
				 $jid=$_POST["jid"];
			 }

			 if(!$hasError){
				deleteuser($jid,$type,$userid,$username,$password,$phone,$email,$address,$gender,$bdate);
			 }
		 }
			function deleteuser($jid,$type,$userid,$username,$password,$phone,$email,$address,$gender,$bdate){
			$query="DELETE FROM USER WHERE jid='$jid'";
			 $result = execute($query);
			}
?>