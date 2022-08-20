<?php
 require_once "controllers/orderController.php" ;
  
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
     <style >
       
.navbar{

    background-color: teal;

    display: flex; /*div ke column e pashapashi ana hoise */

    justify-content: flex-end; /*div ke right side e ana hoise */
   
}

.navbar a{

    color : lightgoldenrodyellow;

    font-size: 1rem;

    text-decoration: none;
 
   

    padding: 20px;
}


.navbar a:hover{
    background-color: dimgrey;
}



 .nom{

    float: left;

   

    font-size: 1.5rem;

    font-weight: bold;

    padding: 15px; 

    font-style: italic;  
   
}


.f{
	margin: auto;
	height: 37%;
	width:13%;
	margin-top: 5%;
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
	padding: 15px;
	font-size: 100%;
	
}
.button:hover{
				background-color:teal;
				color: cyan;
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
				height: 45px;
				
			}

			
            body{
                background-color:#E3ECE3;
                
            }
       
 h1{
 	color: black;
 }








     </style>
    
</head>
<body>



	<fieldset class="f">

		<form action="" method="post">
			
    
				<table align="" >
		     <tr>
		         <td><img src="img/cafe.jpg" height = "80px" width = "90px"></td>
				 <td><h1 align="center">&nbsp; <span  style="color: #d41b1b;">Jolly</span>  Roger</h1> <blockquote class="block">-Eat Good, Feel Good </blockquote> </td>
			 </tr>
		</table>
		<br>
		<br>
   

			
		
			<table align="">

					  
					
					



             


				

				<tr>
			
				<td><input class="hover textfield" type="text" id="fname"  name="fname" placeholder="Full Name" size="60%" > 
						
					    <span id="err_fname"><?php echo $err_fname;?></span></td>
				</tr>


				<tr>
				
				<td><input class="hover textfield" type="text" name="iname"  id="iname" size="60px" placeholder="Item Name 1"> 
					<span id="err_iname"><?php echo $err_iname;?></span></td>
				</tr>

				<tr>
				
				<td><input class="hover textfield" type="text"  name="inamee" size="60px" placeholder="Item Name 2"> 
				
				</tr>   


				<tr>
			
				<td><input class="hover textfield" type="text" id="quantity" name="quantity" size="60px" placeholder="Quantity"> 
					<span id="err_quantity"><?php echo $err_quantity;?></span></td>
				</tr>

					<tr>
			
				<td><input class="hover textfield" type="text"  name="requirement" placeholder="Additional Requirement" size="60%" > 
					
				</tr>  


				<tr>
				
				<td><input class="hover textfield" type="phone" id="phone" name="phone" size="60px" placeholder="Phone"> 
					<span id="err_phone"><?php echo $err_phone;?></span></td>
				</tr>


				<tr>
			
				<td><input class="hover textfield" type="email" id="email" name="email" size="60px" placeholder="Email"> 
					<span id="err_email"><?php echo $err_email;?></span></td>
				</tr>





				<tr>
			
				<td><input class="hover textfield" type="text" id="address" name="address" size="60px" placeholder="Address"> 
					<span id="err_address"><?php echo $err_address;?></span></td>
				</tr>








			</table>

		

				

         
     		       <tr>
                        <td><input class="button" type="submit" name="place_Order" value="Place Order" ></td>
                    </tr>
                    <br>
                    <br>
               

<br>
			
		</form>


		
	</fieldset>



</body>
</html>