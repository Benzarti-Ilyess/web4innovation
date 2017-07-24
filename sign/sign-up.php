<?php
	include('../config.php');

  if (isset($_POST['submit'])) {
    $username = $_POST['name'];
		$email = $_POST['email'];
    $password = $_POST['password'];
		$sex = $_POST['sex'];

    $query = "INSERT INTO fakher_users VALUES ('{$username}', '{$password}', NULL)";
    $result = mysqli_query($db, $query);
    if($result){
      session_start();
      echo '<p>Sign up successful</p><br><br>';
      $_SESSION['signed-in'] = true;
      $_SESSION['username'] = $username;
      header('location: ../index.php');

    }else{
      echo '<p>Sign up unsuccessful<br>'
            . 'ERROR_WHILE_INSERTING_TO_DATABASE</p><br>'
            . "<a href=\"sign-up.php\">Retry</a><br><br>";
    }
  }

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Carthage-Bay | Sign-up</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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
	<div class="row">
	  <div class="col-md-4"></div>
	  <div class="col-md-4">
			<center>
	    	<form  action="sign-up.php" method="post">
	      	<br><br><br><br><br>
					<center>
						<h2>Créer nouveau compte</h2>
					</center>
					<br><br><br>
		    	<div class="row">
		      	<div class="col-md-6">
		      		<input type="text" name="name" placeholder="Nom" />
		      	</div>
						<div class="col-md-6">
							<input type="text" name="surname" placeholder="Prénom" />
						</div>
		    	</div>
		    	<br><br>
		    	<input type="text" name="email" placeholder="Numero de telephone ou adresse e-mail" />
		    	<br><br>
		    	<input type="password" name="password" placeholder="Nouveau mot de passe" />
		    	<br><br>
					<input type="radio" id="demo-priority-low" name="sex" value="man" checked>
			    <label for="demo-priority-low">Homme</label>
			    <input type="radio" id="demo-priority-normal" name="sex" value="woman">
			    <label for="demo-priority-normal">Femme</label>
		    	<br><br><br>
		    	<center>
						<button type="submit" name="submit">Créer Compte</button>
					</center>
		    </form>
	  	</center>
		</div>
	</div>
</body>
</html>
