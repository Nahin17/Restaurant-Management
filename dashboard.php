<?php
   session_start();
if(!isset($_SESSION["user"])){
     //if(!isset($_COOKIE["user"])){
    
     header("Location: login.php");
    }
  

	 require_once 'models/db_config.php';
	 $query="SELECT * from user";
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
    background-color: red;

}
		</style>
		  <!-- navbar -->

<div class = "nom" font="fantasy">  <span  style="color: #d41b1b;">Jolly</span>  Roger</div>
  <div class = "navbar search" > 
     <img src="img/cafe.jpg" height = "58px" width = "70px">
  
         <a href = "home.php"> Home </a>
         <a href = "dashboard.php "> Dashboard</a>
         <a href="menu.php">Menu</a>
         <a href = " mart.php "> Roger Mart </a>
         <a href = " combooffer.php "> Combo Offer </a>
         <a href = " specialoffer.php "> Special Offer </a>
         <a href = " location "> Location </a>
         <a href = "order.php">Place Order </a>
         <a href="home.php"> Welcome, <?php echo $_SESSION["user"];?> </a>  
            <!--   <a href="home.php"> Welcome, <?php // echo $_COOKIE["user"];?>   </a> -->
         
    
         <a href = "login.php"> Logout </a>

  </div>


	      <fieldset>




              <legend align="center"><h1> User Dashboard</h1></legend>
		       <table align="center", border ="5" cellpadding="30", cellspacing="5">
				 <tr>
				 	    <th>Id</th>
						<th>JId</th>
						<th>type</th>
						<th>User Id</th>
						<th>Name</th>
						<th>Password</th>
						<th>Phone</th>
						
						<th>Email</th>
						<th>Address</th>
						<th>Gender</th>
						<th>bdate</th>
					
						
						<th></th>
						<th></th>
				 </tr>					 
 <?php
	foreach($result as $row){
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["jid"]."</td>";
		echo "<td>".$row["type"]."</td>";
	    echo "<td>".$row["userid"]."</td>";
		echo "<td>".$row["username"]."</td>";
		echo "<td>".$row["password"]."</td>";
		echo "<td>".$row["phone"]."</td>";
		echo "<td>".$row["email"]."</td>";
		echo "<td>".$row["address"]."</td>";
		echo "<td>".$row["gender"]."</td>";
		echo "<td>".$row["bdate"]."</td>";
	
		
		echo '<td><a href="updateuser.php" class="btn">Edit</a></td>';

		echo "</tr>";
	} 
?>
			  </table>
	</fieldset>
	</body>
</html>