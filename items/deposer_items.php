<?php
session_start();
 if (!isset($_SESSION['signed-in'])){
   header('location: ../sign/sign-in.php');
 }

 $email=$_SESSION['email'];

if(isset($_POST['submit']))
  {

$tmp_name1=$_FILES['img1']['tmp_name'];
$tmp_name2=$_FILES['img2']['tmp_name'];
$filename1=time().".jpg";
    $prix=$_POST["prix"];
    $reg=$_POST["Régions"];
    $titre=$_POST["titre"];
    $desc=$_POST["desc"];
    $quantite=$_POST["qte"];
$filename2=time()."1.jpg";
$categorie=$_POST['categorie'];
   move_uploaded_file($tmp_name1,$filename1);
    move_uploaded_file($tmp_name2,$filename2);
    $db = mysqli_connect('35.160.127.179','butterflies','butter2017','butterflies');
    //mysqli_connect server username password database
    if($db)
    {
    //$result = mysqli_query($db,$sql);
    //foreach ($result as $personne) {
    //  $personne->name;  //}
    mysqli_query($db,"INSERT INTO product VALUES (NULL,'$email','$titre','$reg','$categorie','$quantite','$prix','$filename1','$desc','$filename2')");

echo $db->error;
    }
    //$db->query("INSERT INTO ilyess VALUES (NULL,'$name','$phone_number')");

    /*$result= $db->query('SELECT * FROM contact_ilyess');
    echo '<ul>';$filename1=time().".jpg";
    while ($row = $result->fetch_array()) {

    echo '<li><a class="btn btn-default" href="printing.php?id='.$row['id'].'" >'.$row['name'].'</a></li></br>';
    }
    echo '</ul>';

    //foreach ($result as $personne) {
    //  $personne->name;
    //}

    }
    else {
    echo 'dsle frere';
    }

    */
  }
  else{
    die("mwaher frere");
  }

  header('location: retour_principale.php');
 ?>
