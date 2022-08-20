<?php
     include 'controllers/DeleteUserController.php';
?>
<html>
     <head>	<style type="text/css">
	
.f{
	margin: auto;
	height: 30%;
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
			
     </style>
				<table align="" >
		     <tr>
		         <td><img src="img/cafe.jpg" height = "80px" width = "90px"></td>
				 <td><h1 align="center">&nbsp;  <span  style="color: #d41b1b;">Jolly</span> Roger </h1> <blockquote class="block">-Eat Good, Feel Good </blockquote> </td>
			 </tr>
		</table>
		<br>
		<br>

			
   

			
		
			<table align="">
				

				


			         <tr>
					   <td> <span class="font">Joly Roger Id: </span></td>
					   <td><input class="hover textfield" type="text"  name="jid" placeholder="Jolly Roger id" size="30%"> 

						
						<span id="err_jid"><?php echo $err_jid;?></span></td>
					</tr>

			</table>

		

				

         
     		       <tr>
                        <td><input class="button" type="submit" name="delete_user" value="Delete" ></td>
                    </tr>
                

			
		</form>
		
		
	</fieldset>





				
	</body>
</html>