
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<style>
	




      
.navbar{

    background-color: teal;

    display: flex; /*div ke column e pashapashi ana hoise */

    justify-content: flex-end; /*div ke right side e ana hoise */
   
}

.navbar a{

    color : lightgoldenrodyellow;

    font-size: 1rem;

    text-decoration: none;
 
    border-radius: 10px;

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

    .showbar{

    background-color: teal;

    display: flex; /*div ke column e pashapashi ana hoise */

    justify-content: flex-end; /*div ke right side e ana hoise */
}

.showbar a{

    color : gold;

    font-size: 1.2rem;

    text-decoration: none;

    padding: 20px;
}


.showbar a:hover{
    background-color:  mediumpurple;
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
 padding: 50px 100px;
 justify-content: right;
 align-items: center;
 flex-wrap: wrap;
//////



}

.card{
 box-sizing: border-box;
 width: 400px;
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
     text-align: center;
    color: orangered;

}

.card-des{

 text-align: justify;

 line-height: 1.5;

 padding: 5px;

}

.imagestyle{

 width: 100%;
}

//








	</style>
</head>
<body>
    
       
     <style>
            body{
                background-color:#E3ECE3;
                
            }
       
     </style> 
  


	  <div class = "nom" font="fantasy">  <span  style="color: #d41b1b;">Jolly</span>  Roger</div>
	  <div class = "navbar"> 
		 <img src="img/cafe.jpg" height = "58px" width = "70px">
	
         <a href = "home.php"> Home</a>
         <a href = "dashboard.php"> Dashboard</a>
         <a href="menu.php">Menu</a>
         <a href = " mart.php "> Roger Mart</a>
         <a href = " combooffer.php "> Combo Offer </a>
         <a href = " specialoffer.php "> Special Offer </a>
         <a href = " location "> Location </a>
         <a href = "order.php">Place Order </a>
        <!--   <a href="home.php"> Welcome, <?php echo $_SESSION["user"];?> </a>
         <a href="home.php"> Welcome, <?php //echo $_COOKIE['user'];?>   </a>   -->
         <a href = " logout "> Logout </a>
	</div>
<br> 
<hr>

<div class="img">
	<img src="img/jolly_logo.jpg" height="650px" >

</div>


    <div class="float"></div>






       <div class="containers">

            <div class="card">

 <img src="img/jb.jpg" class= "imagestyle" >

            <div class="card-body">

            <div class="card-title">

        Snacks

            </div>


            <div class="card-des">

            <p>A snack is a small portion of food generally eaten between meals. Snacks come in a variety of forms including packaged snack foods and other processed foods, as well as items made from fresh ingredients at home. </p>
            <div class="showbar">
 <a href="snacks.php">Show Details</a>
            </div>
            </div>
            </div>

            </div>
<br>
<br>


    <div class="card">

 <img src="img/jb.jpg" class= "imagestyle" >

            <div class="card-body">

            <div class="card-title">

       Frozen Snacks

            </div>


            <div class="card-des">

            <p>Freezing food preserves it from the time it is prepared to the time it is eaten. Since early times, farmers, fishermen, and trappers have preserved grains and produce in unheated buildings during the winter season.
                  <div class="showbar">
 <a href="/deathnote">Show Details</a>
            </div>
            </div>
            </div>

            </div>

              </div>


              <br>





       <div class="containers">



                  <div class="card">

 <img src="img/jb.jpg" class= "imagestyle" >

            <div class="card-body">

            <div class="card-title">

         Beverage 

            </div>


            <div class="card-des">

            <p>A drink is a liquid intended for human consumption. In addition to their basic function of satisfying thirst, drinks play important roles in human culture. </p>
            <div class="showbar">
 <a href="/deathnote">Show Details</a>
            </div>
            </div>
            </div>

            </div>



                  <div class="card">

 <img src="img/jb.jpg" class= "imagestyle" >

            <div class="card-body">

            <div class="card-title">

         Ice Cream

            </div>


            <div class="card-des">

            <p>Jolly Roger is a restaurant where you can found best fast food in dhaka. It is a family restaurent so you can always bring anyone precious to you. You are always welcome. <br> Rating: 9.2/10 </p>
            <div class="showbar">
 <a href="/deathnote">Show Details</a>
            </div>
            </div>
            </div>

            </div>


                  <div class="card">

 <img src="img/jb.jpg" class= "imagestyle" >

            <div class="card-body">

            <div class="card-title">

         Chocolate

            </div>


            <div class="card-des">

            <p>Jolly Roger is a restaurant where you can found best fast food in dhaka. It is a family restaurent so you can always bring anyone precious to you. You are always welcome. <br> Rating: 9.2/10 </p>
            <div class="showbar">
 <a href="/deathnote">Show Details</a>
            </div>
            </div>
            </div>

            </div>







                  <div class="card">

 <img src="img/jb.jpg" class= "imagestyle" >

            <div class="card-body">

            <div class="card-title">

        Baby Food

            </div>


            <div class="card-des">

            <p>Jolly Roger is a restaurant where you can found best fast food in dhaka. It is a family restaurent so you can always bring anyone precious to you. You are always welcome. <br> Rating: 9.2/10 </p>
            <div class="showbar">
 <a href="/deathnote">Show Details</a>
            </div>
            </div>
            </div>

            </div>









                  <div class="card">

 <img src="img/jb.jpg" class= "imagestyle" >

            <div class="card-body">

            <div class="card-title">

         Pet Food

            </div>


            <div class="card-des">

            <p>Jolly Roger is a restaurant where you can found best fast food in dhaka. It is a family restaurent so you can always bring anyone precious to you. You are always welcome. <br> Rating: 9.2/10 </p>
            <div class="showbar">
 <a href="/deathnote">Show Details</a>
            </div>
            </div>
            </div>

            </div>



            </div>

        

<hr>

      <section class="social">  
        <div class="container text-center">  
             
             <ul>
                <li> <a href="f"> <img src="https://img.icons8.com/color/48/000000/facebook-new.png"/> </a>
                </li>
                   
                   <li> <a href="f"> <img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></a>
                </li>

                <li> <a href="f"> <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png"/> </a>
                </li>



             </ul>





           </div>

      </section>

       <!-- footer -->
      <section class="footer">  
        <div class="container text-center"> 
               <p> All rights reserved, Designed by <a href=""> Nahinul Abedin Nahin</p>
           </div>

      </section>






     


</body>
</html>