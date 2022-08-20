

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Restaurant Website</title>
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
     </style>
    

</head>
<body>
	  <!-- navbar -->
  <div class = "nom" font="fantasy">  <span  style="color: #d41b1b;">Jolly</span>  Roger</div>
  <div class = "navbar search" > 
    <img src="img/cafe.jpg" height = "58px" width = "70px">
  
         <a href = "home.php"> Home </a>
      
         <a href="menu.php">Menu</a>
         <a href = " mart.php "> Roger Mart </a>
         <a href = " combooffer.php "> Combo Offer </a>
         <a href = " specialoffer.php "> Special Offer </a>
         <a href = " location.php "> Location </a>
         <a href = "order.php">Place Order </a>
        <!-- <a href="home.php"> Welcome, <?php echo $_SESSION["user"];?> </a>  -->

     <!--     <a href="home.php"> Welcome, <?php // echo $_COOKIE['user'];?>   </a>  -->
            <a href = "about.php"> About </a>
         <a href = "login.php"> Logout  <?php //session_destroy(); ?> </a> 
            <!--session destroy use korle logout e link e login deya jabe nah -->
 
  </div>


 
	   <!-- Food search -->
	  <section class="food-search text-center">  
	  	<div class="container">
            
           <form action=" "> 
              <input type="search" name="search" placeholder="search for food">
              <input type="submit" name="submit" value="search" class="searchbtn btn-primary">

            </form>
          </div> 
	  </section>




	   <!-- category --> 
	  <section class="categories">  
	  	<div class="container"> 
              <h1 class="text-center">Categories </h1>
          <a href="">
           <div class="box-3 float-container">
             <a href = "burger.php"><img src="image/food3.jpg" alt="Burger" class="img-responsive"></a>
           <!--  <img src="image/momo5.jpg" alt="momo" class="img-responsive" >  same jinish e just upore link kore disi -->
           

            	<h3 class="float-text">Burger</h3>
            </div></a>


            <a href="">
             <div class="box-3 float-container">
                  <a href = "pizza.php"><img src="image/pizza.jpg" alt="Pizza" class="img-responsive"></a>
            

            	<h3 class="float-text">Pizza</h3>
            </div>

                </a>


           <a href="">
             <div class="box-3 float-container">
                  <a href = "burger.php"><img src="image/momo5.jpg" alt="Burger" class="img-responsive"></a>
            	

            	<h3 class="float-text">Momo</h3>
            </div>
        </a>


             <div class="clearfix"></div>

          </div>

	  </section>


         <!-- food menu -->
	  <section class="food-menu">  
	  	<div class="container"> 
              <h1 class="text-center">Explore Foods </h1>
          

          <div class="food-menu-box"> 
          	   
          	    	<div class="food-menu-img">
          	    		<img src="image/pizza5.jpg" alt="Chicken Pizza" class="img-responsive">
          	    	</div>

          	    	<div class="food-menu-desc">
          	    		<h4><br><br><br> <br> &nbsp; &nbsp; Pizza</h4>
          	    		<p>&nbsp;&nbsp; 400 TAKA</p>
          	    		<p>  &nbsp; &nbsp;Made With sauce, Chicken  </p>
          	    		<br><br> &nbsp; &nbsp;
          	    		<a href="order.php" class="searchbtn btn-primary"> &nbsp;Order Now </a>
          	    	</div> 	    
            </div>



              <div class="food-menu-box"> 
          	   
          	    	<div class="food-menu-img">
          	    		<img src="image/steak8.jpg" alt="Chicken Pizza" class="img-responsive" sizes="350px">
          	    	</div>

          	    	<div class="food-menu-desc">
          	    		<h4><br><br><br><br> &nbsp; &nbsp;Steak</h4>
          	    		<p>&nbsp;&nbsp; 1200 TAKA</p>
          	    		<p>  &nbsp; &nbsp;Made With sauce, Chicken  </p>
                    
         
            
          	    		<br><br> &nbsp; &nbsp;
          	    		<a href="order.php" class="searchbtn btn-primary"> &nbsp;Order Now </a>
          	    	</div> 	    
            </div>




            <div class="food-menu-box"> 
          	   
          	    	<div class="food-menu-img">
          	    		<img src="image/cmilk.jpg" alt="Chicken Pizza" class="img-responsive">
          	    	</div>

          	    	<div class="food-menu-desc">
          	    		<h4><br><br><br><br>  &nbsp; &nbsp;Chocolate Milk Shake</h4>
          	    		<p>&nbsp;&nbsp; 300 TAKA</p>
          	    		<p>  &nbsp; &nbsp;Made With sauce, Chicken  </p>
          	    		<br><br> &nbsp; &nbsp;
          	    		<a href="order.php" class="searchbtn btn-primary"> &nbsp;Order Now </a>
          	    	</div> 	    
            </div>




              <div class="food-menu-box"> 
          	   
          	    	<div class="food-menu-img">
          	    		<img src="image/butterscotch.jpg" alt="" class="img-responsive">
          	    	</div>

          	    	<div class="food-menu-desc">
          	    		<h4><br><br><br><br>  &nbsp; &nbsp; Butterscotch Delight</h4>
          	    		<p>&nbsp;&nbsp; 400 TAKA</p>
          	    		<p>  &nbsp; &nbsp;Made With butter, cream cheese  </p>
          	    		<br><br> &nbsp; &nbsp;
          	    		<a href="order.php" class="searchbtn btn-primary"> &nbsp;Order Now </a>
          	    	</div> 	    
            </div>









          <div class="clearfix"></div>
      </div>



	  </section>


	   <!-- social  -->
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