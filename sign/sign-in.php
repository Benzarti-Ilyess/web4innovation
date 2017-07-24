<?php
include('../config.php');

if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE email = '$email' AND pass = '$password'";
  $result = mysqli_query($db, $query);
  $row = $result->fetch_array();

  if (isset($row)){
    session_start();
    $_SESSION['signed-in'] = true;
    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];
    header('location: home.php');
  }else{
    header('location: sign-in.php?error');
  }
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Carthage Bay | Sign In</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="./../assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
	</head>
	<body class="subpage">
		<header id="header">
			<div class="inner">
				<a href="index.html" class="logo"><strong>Projection</strong> by TEMPLATED</a>
				<nav id="nav">
					<a href="./../index.php">Home</a>
					<a href="generic.html">Generic</a>
					<a href="elements.html">Elements</a>
				</nav>
				<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			</div>
		</header>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form method="post" action="sign-in.php">
          <input type="text" placeholder="email" name="email"/>
          <br>
          <input type="password" placeholder="password" name="password" />
          <br>
          <center><button type="submit" name="submit">Sign in</button></center>
          <?php if (isset($_GET['error'])):?>
          <center><h3 style="color:red;">Invalid Email or Password</h3></center>
          <?php endif; ?>
        </form>
        <center><a href="sign-up.php" class="button special" >Sign up</a></center>
      </div>
    </div>
	</body>
</html>
