<?php
$db = mysqli_connect('35.160.127.179','butterflies','butter2017','butterflies');
$id = $_GET['id'];
$result = $db->query('SELECT * FROM product where id='.$id);
$row=$result->fetch_array();
$x=$row['email'];
/*.$row['email']*/
$res = $db->query('SELECT * FROM users where email="manali1@live.fr"');
$rowe=$res->fetch_array();
 ?>


<html>
	<head>
		<title>Elements - Projection by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="./../assets/css/main.css" />
    <link rel="stylesheet" href="aa.css">
    <style type="text/css">
        img{
            height: 200px;
            width: 280px;
            border-radius:50px;
            overflow:hidden;
            }
    </style>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
				 <strong class="logo">Site web pour la commerce des artisanats</strong>
					<nav id="nav">
						<a href="./../index.php">Home</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
      <br><br><br><center><h2><b><?php echo $row['titre'];?>(<?php echo $row['region'];?>)</b></h2></center><br>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="background:#f5f5f5;">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <br>
                <img src="../items/<?php echo $row['image'];?>">
                <br><br>,
                <img src="../items/<?php echo $row['image2'];?>">
                <br>
            </div>
            <div class="col-md-7">
              <br>
              <h3><b>Prix: </b><?php echo $row['prix'];?> DT</h3>
              <h3><b>Quantite Restante: </b><?php echo $row['quantite'];?> </h3>
              <h3><b>Description: </b></h3><p style="font-size:150%;"><?php echo $row['description'];?></p>
              <h3><b>Informations sur le vendeur:</b></h3>
              Nom Complet:&nbsp;<?php echo $rowe['name'];?>&nbsp;<?php echo $rowe['surname'];?>
              <br>
              mail:&nbsp;<?php echo $rowe['email'];?>
              <br>
              Numero de telephone:&nbsp;<?php echo $rowe['tel'];?>
            </div>
          </div>
          <br><br>
        </div>
      </div>
    </body>
  </html>
