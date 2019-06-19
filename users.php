<?php
session_start();

include("database/database.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>USERS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
	
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <style>
    body {
        background-color: #9370DB;
        background-size: cover;
   font-family: "Times New Roman", Times, serif;
  font-weight: bold;
        height: 100vh;
}

.container {
  width: 80%;
  height: 40px;
  position: relative;
  top: 40px;
  margin: 0 auto;
}





        .hero h1{
             
            margin-top: 18px;
            font-family: "Times New Roman", Times, serif;
            font-size: 80px;
            letter-spacing: 4px;
            color: white;
            
             
        } 
        
        .button { 
            font-family: "Times New Roman", Times, serif;
            font-weight: normal;
            font-size: 12px;
            margin-top: 40px;
            
             
        }
        
        .btn2:hover{
            text-decoration: none;
            color: black;
        }
        
        .btn2{
            padding: 12px 25px;
            background: #f4f6f8;
            text-decoration: none;
            color: #000;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
             
        }
		
		.topright {
          position: absolute;
          top: 8px;
          right: 16px;
          font-size: 20px;
          color:white;
}



#customers {
  font-family: "Times New Roman", Times, serif;
  border-collapse: collapse;
  width: 100%;
  
  
  
}

#customers td, #customers th {
  border: 5px solid #ddd;
    padding: 1px 2px 2px 2px;
}


#customers tr:nth-child(even){background-color: #f2f2f2;
font-size: 18px;
}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000080;
  color: white;
 font-size: 22px;
}

    </style>
</head>
<body>
    <div class="container">
  
  <section class="hero">
      <h1><center>Users</center></h1>
     
  </section>
  
   <a href="index.php" class="topright">Home</a>
   
   <br>
   <br>
   
   <table id="customers" align="center" >
    <thead>
      <tr>
        <th>Name</th>
        <th>Email Id</th>
        <th>Total Credit</th>
		<th>View User</th>
		
      </tr>
    </thead>
    <tbody>
	
     <?php
	 
	   
	   $database->fetch();
	   
	      
	  ?>
	  
    </tbody>
  </table>
    
  <?php         
  if(isset($_POST['select']))
  {
  $database->search_user();
  
  $src=$_POST['search'];
   $_SESSION['cnt']=$src;
  
  }
  ?>  
  
 
  
</div>
<script>
    var navButton = document.querySelector('.navigation-button');
var navMenu = document.querySelector('.navigation-menu');
var win = window;

function openMenu(event) {
  
  navButton.classList.toggle('active');
  navMenu.classList.toggle('active');

  event.preventDefault();
  event.stopImmediatePropagation();
}
  
function closeMenu(event) {
  if (navButton.classList.contains('active')) {
    navButton.classList.remove('active');
    navMenu.classList.remove('active');
  }
}
  navButton.addEventListener('click', openMenu, false);

win.addEventListener('click',closeMenu, false);
    
</script>
</body>
</html>