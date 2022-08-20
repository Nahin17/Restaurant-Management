<?php

   

     $amountofnumber= "";
     $err_amountofnumber = "";

     

     $specialinstructions = "";
     $err_specialinstructions = "";


     if($_SERVER["REQUEST_METHOD"]=="POST") 
     {






     	if(empty($_POST["amountofnumber"])) {

     		$err_amountofnumber = " Amount of number Required";
     	}
     	else{
     		$amountofnumber= $_POST["amountofnumber"];
     	}


       


     }

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Burger Show Details</title>
	<style>
	





.navbar{
    background-color: teal;
    display: flex; /*div ke column e pashapashi ana hoise */
    justify-content: flex-end; /*div ke right side e ana hoise */
}

.navbar a{
    color : gold;
    font-size: 1.2rem;
    text-decoration: none;
    padding: 20px;
}


.navbar a:hover{
    background-color: dimgray;
}



    .submit{

    background-color: teal;
 display: flex; /*div ke column e pashapashi ana hoise */

    justify-content: center; /*div ke right side e ana hoise */
}

.submit a{

    color : gold;

    font-size: 2.1 rem;

    text-decoration: none;

    padding: 20px;
}


.submit a:hover{
    background-color:  mediumpurple;
}









 .nom{
    float: left;
    padding: 30px;
    font-size: 2rem;
    font-weight: bold;
    padding: 15px; 
    font-style: italic;  
    color: mediumpurple;
}

.img{	
	height: 10px;
	width: 1100px;
}

//////

.card{
     box-sizing: border-box;
     width: 300px;
     text-align: justify;
     margin: 10px;
     box-shadow: 1px 2px 6px violet;
     background-color: rgb(180, 239, 241);
     margin: 0 auto;
     margin-top: 50px;
     position: relative;
}

.card-body{
 padding: 2px;
 color:green;

}

.card-des{
 text-align: justify;
 line-height: 1.5;
 padding: 5px;

 }

.containers{
 box-sizing: border-box;
 display: flex;
 padding: 0px 0px;
 justify-content: center;
 align-items: center;
 flex-wrap: wrap;
//////



}

.card{
 box-sizing: border-box;
 width: 300px;
 text-align: justify;
 margin: 10px;
 background-color: rgb(180, 239, 241);

}

.card-body{
 padding: 2px;
 color:black;

}

.card-title{
     font-size: 1.7rem;
     text-align: left;
    color: orangered;

}

.card-des{

 text-align: justify;

 line-height: 1.5;

 padding: 0px;

}

.imagestyle{

 width: 100%;
}

</style>
</head>
<body>
	 <style>
            body{
                background-color:#E3ECE3;
                
            }
       
     </style> 

     <h1> User's Choice</h1>
     <form action="" method="post">

    

               


         




               <div class="containers">


            <div class="card">

 

            <div class="card-body">

            <div class="card-title">

      Amont Of Number

            </div>


            <div class="card-des">

          <tr> 
                <td> <span>Spicy Level</span> </td>
                    <td>
                        :<br><input type="number" name="amountofnumber" value="number"> <br>
                        
                      <span><?php echo $err_amountofnumber;?></span>

                    </td>
        
        </tr>

            </div>
            </div>

            </div>
        </div> <hr>







          <div class="containers">



            <div class="card">

 

            <div class="card-body">

            <div class="card-title">

        Special Instruction

            </div>


            <div class="card-des">

          <tr> 
                <td> <span>Instruction:</span> </td>
                    <td> <input type="tex" name="specialinstructions" placeholder="Give us a Instruction if you have any" size="37px 25px" >
                        <span><?php echo $err_specialinstructions;?></span>
                    </td>
        
        </tr>

            </div>
            </div>

            </div>
       </div>






<div class="submit">

     		       <tr>
                        <td><input type="submit" name="addtocart" value="Add To Cart" ></td>
                    </tr>

           </div>



     
     	

     </form>


</body>
</html>