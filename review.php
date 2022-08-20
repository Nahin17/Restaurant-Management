 
<html>
     <head>
	<style>
	




	
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
				height: 100px;
				
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
	      <fieldset align = "center">
              <legend align="center"><h1 id="font">Review Section</h1></legend>
		       <form action="" method="post" onsubmit="return validate()">
		       <table align="center">
			        
					
					
					
					<tr>
                        <th><span class="font mytextfield">Review: </span></th>
                        <td><input class="hover textfield" type="text" id="review" name="review" size="70%"  placeholder="review please" >
                        <span id="err_review"></span></td>
                    </tr>
					
					
						<td colspan="2"><input class="button" type="submit" name="reviewed" value="Submit"></td>
					</tr>
			  </table>
		</form>
		<script>
				function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("review").value == ""){
						get("err_review").innerHTML="Name Required";
						get("err_review").style.color="orange";
						hasError=true;
					}
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp()
				{
					get("err_review").innerHTML="";
				}
				
</script>
		
		
		
	</fieldset>
	</body>
	
	</html> 