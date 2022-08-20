<?php

     $choiceofbun ="";
     $err_choiseofbun = "";

     $spicylevel = "";
     $err_spicylevel = "";

     $amountofsauce= "";
     $err_amountofsauce = "";

     $addons = "";
     $err_addons = "";

     $specialinstructions = "";
     $err_specialinstructions = "";


     if($_SERVER["REQUEST_METHOD"]=="POST") 
     {

     	if(empty($_POST["choiceofbun"])) {

     		$err_choiseofbun = " Choice of Bun Required";
     	}
     	else{
     		$choiceofbun= $_POST["choiceofbun"];
     	}

     	





     	if(empty($_POST["spicylevel"])) {

     		$err_spicylevel = " Spicy Level Required";
     	}
     	else{
     		$spicylevel= $_POST["spicylevel"];
     	}







     	if(empty($_POST["amountofsauce"])) {

     		$err_amountofsauce = " Amount of sauce Required";
     	}
     	else{
     		$amountofsauce= $_POST["amountofsauce"];
     	}


       


     }

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Burger Show Details</title>
	<style>
	



.f{
    margin: auto;
    height: 100%;
    width:24%;
    margin-top: 5%;
    margin-left: 35%;
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
                height: 40px;
                
            }






.imagestyle{

 width: 100%;
}

</style>
</head>
<body>
    <fieldset class="f">
	  <style>
            body{
                background-color:pink;        
            }
     </style>

     <h1> User's Choice</h1>
     <form action="" method="post">

    


          <tr> 
               
                    <td>
                        <span> Choice of Bun</span>
                        :<br><input type="radio" name="choiceofbun" value="seedbun"><span> Seed Bun</span> <br>
                        <input type="radio" name="choiceofbun" value="garlicbun"><span> Garlic Bun</span> <br>
                        <input type="radio" name="choiceofbun" value="briochebun"><span> Brioche Bun</span> <br>
                         <span><?php echo $err_choiseofbun;?></span>
                    </td>
                    <br> <br>
        
        </tr>

           
       

           
                    <td>
                        <span>Spicy level</span>
                        :<br><input type="radio" name="spicylevel" value="mild"><span> Mild</span> <br>
                        <input type="radio" name="spicylevel" value="spicy"><span> Spicy</span> <br>
                        <input type="radio" name="spicylevel" value="veryspicy"><span> Very Spicy</span><br>
                        <input type="radio" name="spicylevel" value="naga"><span> Naga</span>  <br>
                             <span><?php echo $err_spicylevel;?></span>
                    </td>
         <br> <br>
        </tr>

           
                    <td>
                        <span>Amount of sauces</span>
                        :<br><input type="radio" name="amountofsauce" value="less"><span> Less</span> <br>
                        <input type="radio" name="amountofsauce" value="regular"><span> Regular</span> <br>
                        <input type="radio" name="amountofsauce" value="more"><span> More</span><br>
                      <span><?php echo $err_amountofsauce;?></span>

                    </td>
         <br> <br>
        </tr>

            









                    <td>
                        <span>Add ones:</span>  <br>
                        <input type="checkbox" value= "cheese" name="addons[]"> <span>Cheese </span> <br>
                         <input type="checkbox" value= "pepperoni" name="addons[]"> <span>Pepperoni  </span><br>
                         <input type="checkbox" value= "beefbacon" name="addons[]"> <span>Beef Bacon</span> <br>
                         <input type="checkbox" value= "sausage" name="addons[]"> <span>Sausage</span> <br>
                         <span><?php echo $err_addons;?></span>
                    </td>
         <br> <br>
        </tr>
<tr>
            <span>Special Instructuin:</span>
                    <td> <input type="text" name="specialinstructions" placeholder="Give us a Instruction if you have any" size="37px 25px" > <br>
                        <span><?php echo $err_specialinstructions;?></span> <br>
                    </td>
        
        </tr>

           

        
                   <tr>
                        <td><input class="button" type="submit" name="add" value="Add to Cart" ></td>
                    </tr>
                    <br>
                    <br>




     </fieldset>
     	

     </form>


</body>
</html>