  

<?php
require_once "controllers/logincontroller.php" ;
?>




<!DOCTYPE html>
<html>
<head>

	 

	<title> Login Page</title>
	<style type="text/css">
	
.f{
	margin: auto;
	height: 37%;
	width:13%;
	margin-top: 15%;
	margin-left: 40%;
	border-color: skyblue;

}
.button{
	text-decoration: none;
	text-align: center;
	width:100%;
	color: whitesmoke;
	background-color: rgb(73,127,175);
	border: 1px solid red;
	padding: 5px;
	
}
.button:hover{
				background-color:teal;
			}


.hover{

}
.hover:hover{
	border-color: cyan;
	
}
.font{
				font-size:25px;
				
				
				font: serif;
				color: palevioletred;
				
			}
			.block{
				color: green;
			}
			.signup{
				
				text-align: center;
				

			}
			.textfield{
				height: 25px;
				
			}

			
            body{
                background-color:#E3ECE3;
                
            }
       
 
   


</style>


</head>
<body>
	<style>
            body{
                background-color:#E3ECE3;
                
            }
       
     </style> 


	<fieldset class="f">

		<form action="" method="post">
			
    
				<table align="" >
		     <tr>
		         <td><img src="img/cafe.jpg" height = "80px" width = "90px"></td>
				 <td><h1 align="center">&nbsp;  <span  style="color: #d41b1b;">Jolly</span> Roger </h1> <blockquote class="block">-Eat Good, Feel Good </blockquote> </td>
			 </tr>
		</table>
		<br>
		<br>

			<table align="left">
				<tr>
					    <td><span class="font">Choose an account type:</span></td>
						<td>
						    <select name="type">
							     <option disabled selected>Chose One</option>
						         <option>Buyer</option>
								 <option>Admin</option>
								 <option>Delivery Man</option>
							</select>
							<span id="err_type"><?php echo $err_type;?></span></td>
						</td>
					</tr>

					
</table>
   

			
		
			<table align="">
				

				<tr>
				<td> <span class="font">User Id: </span></td>
				<td><input class="hover textfield" id="userid" type="text"  name="userid" placeholder="id" size="30%"> 					
					<span id="err_userid"><?php echo $err_userid;?></span></td>
				</tr>


				<tr>
				<td><span class="font mytextfield">Password: </span></td>
				<td><input class="hover textfield" id="password" type="password" name="password" size="30px" placeholder="password"> 
					<span id="err_password"><?php echo $err_password;?></span></td>
				</tr>
			</table>

		

				

         
     		       <tr>
                        <td><input class="button" type="submit" name="login" value="Log in" ></td>
                    </tr>
                    <br>
                    <br>
                <div class="signup">
                    <a href="signup.php" style="text-decoration: none; color: skyblue;"> Cann't log in? </a> 
                        
               </div>

<br>







			
			
		</form>
		
		
	</fieldset>

<script src="jscontrollers/logincontroller.js"></script>









            
</body>
</html>