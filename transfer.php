<?php

session_start();

include("database/database.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TRANSFER</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <style>
 body {
        background-size: cover;
		background-color : #4169E1;
   font-family: "Times New Roman", Times, serif;
  font-weight: bold;
        height: 100vh;
		text-align: left;
}

.container {
  width: 80%;
  height: 100px;
  position: relative;
  top: 40px;
  margin: 0 auto;
}


.button {
  background-color: #E6E6FA;
  button-size:30px;
  font-family: "Times New Roman", Times, serif;
  font-weight: normal;
  font-size: 25px;
}
.topright {
          position: absolute;
          top: 8px;
          right: 16px;
          font-size: 20px;
          color:#ffffff;
}

.centerr {
          font-size: 80px;
          color:#ffffff;
}
.name {
          text-align: center;
          font-size: 70px;
          color:#ffffff;
}

select {
  width: 50%;
  padding: 10px 10px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
  font-size: 20px;
}

p.a {
  font-family: "Times New Roman", Times, serif;
  color:white;
  font-size:22px;
}



    </style>

</head>


<body>
    <div class="container">
        <!--<a  class="centerr"><i class="fa fa-user"></i></a>
		 <br>

-->

		<a  class="name">
		<?php  print $database->getname();     ?></a>

   <a href="session_close.php" class="topright">Back</a>


  <br><br><br><br>


<form  method="post" >
<p class="a"> Send To :</p>
  <select name="emails">
    <?php    $database->fetch_email(); ?>
    </select>

  <br><br>
<p class="a"> Amount of Credit :</p>
<input type="number"  min="1" name="amount"  style="height:36px" required>

  <br><br>
   <button type="submit" name="transfer" class="button">Transfer Credits</button>
</form>




<?php
  if(isset($_POST['transfer']))
  {


    $emails=$_POST['emails'];
    $amount=$_POST['amount'];


  $database->transfers($emails,$amount);




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
