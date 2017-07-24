<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="aa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
  </head>
  <body>

    <?php
    $search = $_POST['cherche'];
    $category = $_POST['category'];
    $region = $_POST['region'];
    $db = mysqli_connect('35.160.127.179','butterflies','butter2017','butterflies');
    if($search==""and$category!=""and $region!=""){
    $result = $db->query("SELECT * FROM product where categorie='$category'and region='$region'");
    }
    else{
        $result = $db->query("SELECT * FROM product");
    }
    while ($row = $result->fetch_array())
    {
    ?>
    <div class="abc">

    <div class="row">
      <div class="col-md-4">
       <img class="jj" src="../items/<?php echo $row['image'];?>" width="180px" height="130px">
      </div>
      <div class="col-md-5 ">
      <h4>  <?php echo $row['titre']; ?> </h4><br>
      <h5>  <?php echo $row['prix']; ?> DT<br></h5>
            <?php echo $row['region']; ?>
      </div>
    </div>
    </div>
    <hr>
    <?php
    }
    ?>

  </body>
</html>
