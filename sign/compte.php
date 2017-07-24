<?php
  session_start();
  if (!isset($_SESSION['signed-in'])){
    header('location: sign-in.php');
  }
 ?>
<html>
	<head>
		<title>Elements - Projection by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="./../assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
	</head>
	<body class="subpage">
<<<<<<< HEAD

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="./compte.php" class="logo"><strong>Bienvenue,<?= $_SESSION['username']?></strong> </a>
					<nav id="nav">
						<a href="./../index.php">Home</a>
						<a href="generic.html">Generic</a>
						<a href="elements.html">Elements</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

      <br><br><br><br><br><center><h2>Your Shop</h2></center><br><br><br><br>
      <?php
=======
		<header id="header">
			<div class="inner">
				<a href="index.html" class="logo"><strong>Bienvenue,<?= $_SESSION['username']?></strong> </a>
				<nav id="nav">
					<a href="./../index.php">Home</a>
					<a href="generic.html">Generic</a>
					<a href="elements.html">Elements</a>
				</nav>
				<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			</div>
		</header>
    <br><br><br><br><br><center><h2>Your Shop</h2></center><br><br><br><br>
    <?php
>>>>>>> 292fad7446123035af4e3246368bb078542e8571
      $db = mysqli_connect('35.160.127.179','butterflies','butter2017','butterflies');
      $result = $db->query("SELECT * FROM annonces where prix=500");
      while ($row = $result->fetch_array())
      {
    ?>
    <div class="row" >
      <div class="col-md-3"></div>
      <div class="col-md-6" style="background:#f5f5f5;">
        <div class="row">
          <div class="col-md-6">
            <img src="./../deposer_annonce/<?php echo $row['image'];?>" width="180px" height="130px">
          </div>
          <div class="col-md-6">
            <h4>  <?php echo $row['titre']; ?> </h4><br>
            <h5>  <?php echo $row['prix']; ?> DT<br></h5>
            <?php echo $row['region']; ?>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <?php
      }
    ?>
  </body>
</html>
