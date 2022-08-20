<?php
   session_start();
if(!isset($_SESSION["user"])){
     //if(!isset($_COOKIE["user"])){
    
     header("Location: login.php");
    }
  

	 require_once 'models/db_config.php';
	 $query="SELECT * from placeorder";
	         $result =get($query);
?>

<html>
     <head></head>
	 <body>
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
.btn{

    text-decoration: none;
    color: white;
    border: 2px solid black;
    background-color: orange;

}
.btn-red{

    text-decoration: none;
    color: white;
    border: 2px solid black;
    background-color: green;

}
		</style>
	  <!-- navbar -->
  <div class = "nom" font="fantasy">  <span  style="color: #d41b1b;">Jolly</span>  Roger</div>
  <div class = "navbar search" > 
    <img src="img/cafe.jpg" height = "58px" width = "70px">
  
         <a href = "deliveryhome.php"> Home </a>
         <a href = "orderdashboard.php "> Dashboard</a>
         <a href="menu.php">Menu</a>
        
         <a href = " location "> Location </a>
   
         <a href="home.php"> Welcome, <?php echo $_SESSION["user"];?> </a>  

     <!--     <a href="home.php"> Welcome, <?php // echo $_COOKIE['user'];?>   </a>  -->
    
         <a href = "login.php"> Logout  <?php //session_destroy(); ?> </a> 
           <!--session destroy use korle logout e link e login deya jabe nah -->
 
  </div>



	      <fieldset>




              <legend align="center"><h1> User Dashboard</h1></legend>
		       <table align="center", border ="5" cellpadding="30", cellspacing="5">
				 <tr>
				 	    <th>Order Id</th>
						<th>Full name</th>
						<th>Item name 1</th>
						<th>Item Name 2</th>
						<th>Quantity</th>
						<th>Requirement</th>
						<th>Phone</th>
						
						<th>Email</th>
						<th>Address</th>
						
						<th></th>
						<th></th>
				 </tr>					 
<?php
	foreach($result as $row){
		echo "<tr>";
		echo "<td>".$row["oid"]."</td>";
		echo "<td>".$row["fname"]."</td>";
		echo "<td>".$row["iname"]."</td>";
	    echo "<td>".$row["inamee"]."</td>";
		echo "<td>".$row["quantity"]."</td>";
		echo "<td>".$row["requirement"]."</td>";
		echo "<td>".$row["phone"]."</td>";
		echo "<td>".$row["email"]."</td>";
		echo "<td>".$row["address"]."</td>";

	
		
		
		echo '<td><a href="orderplaced.php" class="btn-red">Order Placed  </a></td>'; //mainly delete button er kaj korbe
		echo "</tr>";
	} 
?>
			  </table>
	</fieldset>
	</body>
</html>