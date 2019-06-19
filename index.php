<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CREDIT MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <style>
    body {
     background-size: cover;
	 background-color : #4169E1;
     font-family: "Times New Roman", Times, serif;
     font-weight: bold;
     height: 100vh;
	 text-align: center;
}

.container {
  width: 80%;
  height: 40px;
  position: relative;
  top: 40px;
  margin: 0 auto;
}
.navigation-wrapper {
  position: relative;
}



        .hero h1{
             
            margin-top: 108px;
            
            font-family: "Times New Roman", Times, serif;
            font-size: 26px;
            letter-spacing: 4px;
            color: white;
            
             
        } 
        
        span{
            font-size: 65px;
            letter-spacing: 2px;
            font-family: "Times New Roman", Times, serif;
        }
        
        .button {
            
             
            font-family: "Times New Roman", Times, serif;
            font-weight: normal;
            font-size: 17px;
            margin-top: 40px;
            
             
        }
        .btn1:hover{
            text-decoration: none;
            color: black;
        }
        .btn2:hover{
            text-decoration: none;
            color: black;
        }
        
        
        
        .btn1{
            padding: 12px 25px;
            background: #f4f6f8;;
            text-decoration: none;
            color: black;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
             -->
        }
        .btn2{
            padding: 12px 25px;
            background: #f4f6f8;
            text-decoration: none;
            color: black;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
             -->
        }
    </style>
</head>
<body>
    <div class="container">
  
  <div class="navigation-wrapper">
  </div>
  <section class="hero">
      <h1> <br> <span>Credit Management System </span></h1>
      <div class="button">
          <a href="users.php" class="btn1"><strong>View Users</strong></a>
          <a href="transaction.php" class="btn2"><strong>Transactions</strong></a>
      </div>
  </section>
  
</div>
<script>
    <!--var navButton = document.querySelector('.navigation-button');
<!--var navMenu = document.querySelector('.navigation-menu');
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