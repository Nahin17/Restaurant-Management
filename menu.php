<!DOCTYPE html>
<html>
<head>
	
	<title>Menu</title>
		<style>


			
				.sidenav{
				  height: 100%;
				  width: 200px;
				  position: fixed;
				  z-index: 100;
				  top: 0;
				  left: 0;
				  background-color: teal;
				  
				  padding-top: 15px;
				}

				.sidenav a{
					color : gold;
					font-size: 1.5 rem;
					text-decoration: none;
                    padding: 20px;
    			    font-size: 30px;
				    color: lightyellow;
				  display: block;
				}

				.sidenav a:hover {
				  background-color:  dimgray;
				}

					.main {
					  margin-left: 200px; 
					  font-size: 30px;
					  color : red;
					 float:left ;
					

                    

                  padding: 20px;
                   font-style: italic; 
}

 

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

 padding: 150px 0px;

 justify-content: center;

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

 font-size: 2rem;

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
	  <style>
            body{
                background-color:#E3ECE3;
                
            }
       
     </style> 



		 
		<div class="sidenav">
				  <a href="fastfood.php"><span class="hover">Fastfood </span></a>
				  <a href="snacks.php">Snacks</a>
				  <a href="lunch.php"> Lunch</a>
				  <a href="dinner.php"> Dinner </a>
				  <a href="dessert.php"> Dessert </a>
				    <a href="seafood.php"> Sea Food </a>
				  <a href="drinks.php"> Drinks </a>
				  <a href="cart.php"> See Cart </a>
				  <a href="home.php"> Back </a>
				
				</div>
		

				<div class="main">
				  <h1 align = "center "> <b> <i> <u> Food Menu </u> </i> </b></h1>
				  <img src = "img/fm.jpg"  height = "500px" width = "800px">
				  
				 </div> 



       <div class="containers">

            <div class="card">

 <img src="img/be.jpg" class= "imagestyle" >

            <div class="card-body">

            <div class="card-title">

         Jolly Roger

            </div>


            <div class="card-des">

            <p>Jolly Roger is a restaurant where you can found best fast food in dhaka. It is a family restaurent so you can always bring anyone precious to you. You are always welcome. <br> Rating: 9.2/10 </p>

            </div>

            </div>
          

            </div>
        </div>

				   

</body>
</html>