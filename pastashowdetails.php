<?php

     $choiceofsauce ="";
     $err_choiseofsauce = "";

     $spicylevel = "";
     $err_spicylevel = "";


     $addons = "";
     $err_addons = "";

     $specialinstructions = "";
     $err_specialinstructions = "";


     if($_SERVER["REQUEST_METHOD"]=="POST") 
     {

        if(empty($_POST["choiceofsauce"])) {

            $err_choiseofsauce = " Choice of sauce Required";
        }
        else{
            $choiceofsauce= $_POST["choiceofsauce"];
        }

        





        if(empty($_POST["spicylevel"])) {

            $err_spicylevel = " Spicy Level Required";
        }
        else{
            $spicylevel= $_POST["spicylevel"];
        }







       


     }

?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Pasta Show Details</title>
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

        Choice of sauce

            </div>


            <div class="card-des">

          <tr> 
                <td> <span>Choice of sauce</span> </td>
                    <td>
                        :<br><input type="radio" name="choiceofsauce" value="mayonnaise"><span> Mayonnaise</span> <br>
                        <input type="radio" name="choiceofsauce" value="garlicsauce"><span> Garlic sauce</span> <br>
                        <input type="radio" name="choiceofsauce" value="chillisauce"><span> Chilli sauce</span> 
                         <span><?php echo $err_choiseofsauce;?></span>
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

        Spicy Level

            </div>


            <div class="card-des">

          <tr> 
                <td> <span>Spicy Level</span> </td>
                    <td>
                        :<br><input type="radio" name="spicylevel" value="mild"><span> Mild</span> <br>
                        <input type="radio" name="spicylevel" value="spicy"><span> Spicy</span> <br>
                        <input type="radio" name="spicylevel" value="veryspicy"><span> Very Spicy</span><br>
                        <input type="radio" name="spicylevel" value="naga"><span> Naga</span> 
                             <span><?php echo $err_spicylevel;?></span>
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

        Add ons

            </div>


            <div class="card-des">

          <tr> 
                <td> <span>Addons</span> </td>
                    <td>:<br>
                        <input type="checkbox" value= "cheese" name="addons[]"> <span>Cheese </span> <br>
                         <input type="checkbox" value= "pepperoni" name="addons[]"> <span>Pepperoni  </span><br>
                         <input type="checkbox" value= "beefbacon" name="addons[]"> <span>Beef Bacon</span> <br>
                         <input type="checkbox" value= "sausage" name="addons[]"> <span>Sausage</span> <br>
                         <span><?php echo $err_addons;?></span>
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
                    <td> <input type="text" name="specialinstructions" placeholder="Give us a Instruction if you have any" size="37px">
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