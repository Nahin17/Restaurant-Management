<?php
   session_start();

   if(!isset($_SESSION["user"])){
   //  if(!isset($_COOKIE["user"])){
    
     header("Location: login.php");
    }
  
?>

<!DOCTYPE html>
<html>
<head>
	
	<title></title>
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

.card-title{

 font-size: 2rem;

 text-align: center;

}

.card-des{

 text-align: justify;

 line-height: 1.5;

 padding: 5px;

 }

.containers{

 box-sizing: border-box;

 display: flex;

 padding: 50px 150px;

 justify-content: right;

 align-items: center;

 flex-wrap: wrap;

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

 font-size: 3rem;

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






	</style>
</head>
<body>

    
  



	<div class = "nom" font="fantasy">  <span  style="color: #d41b1b;">Jolly</span> Roger </div>
	<div class = "navbar"> 
		<img src="img/cafe.jpg" height = "50px" width = "70px">
	
         <a href = "home.php"> Home </a>
         <a href = "profile.php "> Profile</a>
         <a href="menu.php">Menu</a>
         <a href = " mart.php "> Roger Mart </a>
         <a href = " combooffer.php "> Combo Offer </a>
         <a href = " specialoffer.php "> Special Offer </a>
         <a href = " location "> Location </a>
         <a href = " cart.php "> Cart </a>
        
          <a href="home.php"> Welcome, <?php echo $_SESSION["user"];?> </a>  
         <a href = "login.php"> Logout   </a>

	</div>
<br> <hr>


<div class="img">
	<img src="img/jolly_logo.jpg" height="650px" >

</div>


    <div class="float"></div>






       <div class="containers">

            <div class="card">

 <img src="img/jb.jpg" class= "imagestyle" >

            <div class="card-body">

            <div class="card-title">

         Jolly Roger

            </div>


            <div class="card-des">

            <p>Welcome To Jolly Roger's cafe.<b> Eat Good and Feel Good.</b> <br><br> Jolly Roger is a restaurant where you can found best fast food in dhaka. It is a family restaurent so you can always bring anyone precious to you. You are always welcome. <br> Rating: 9.2/10 </p>

            </div>

            </div>
          

            </div>
        </div>




     


</body>
</html>