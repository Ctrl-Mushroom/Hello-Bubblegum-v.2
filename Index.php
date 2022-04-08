<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Log In.php');
  }

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: Log In.php");
  }

?>

<!DOCTYPE html>

<html>
<head>

	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="All Around Design.css">
  <link rel="icon" type="image/icon" href="Hello.png">

</head>
<body>

  <center>
    
    <div class="header">
      <br>
      <img src="Hello.png" class="iconindex">
      <h3 class="wordindex">BubbleGum</h3>
    </div>

    <div class="content">

    <!-- Shit division bert... -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- tawagin ko pangalan mo -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p><h3>Welcome to the Club!.. <strong><?php echo $_SESSION['username']; ?>...</h3></strong></p>
      <p> <a href="Index.php?logout='1'" style="" class="logout">Log Out</a> </p>
    <?php endif ?>

    </div>
    
  </center>

</body>

</html>