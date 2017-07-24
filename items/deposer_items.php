<?php
if(isset($_POST['submit']))
  {
$tmp_name=$_FILES['image']['tmp_name'];
$filename=time().".jpg";
    $categ=$_POST["categ"];
    $prix=$_POST["prix"];
    $reg=$_POST["reg"];
    $titre=$_POST["titre"];
    $nom=$_POST["nom"];
    $email=$_POST["email"];
    $tel=$_POST["tel"];
    $passe=$_POST["passe"];
    $desc=$_POST["desc"];

    move_uploaded_file($tmp_name,$filename);

    $db = mysqli_connect('35.160.127.179','butterflies','butter2017','butterflies');
    //mysqli_connect server username password database
    if($db)
    {
    //$result = mysqli_query($db,$sql);
    //foreach ($result as $personne) {
    //  $personne->name;
    //}
    mysqli_query($db,"INSERT INTO annonces (titre,prix,nom_prenom,email,tel,passe,categorie,region,description,image) VALUES ('$titre','$prix','$nom','$email','$tel','$passe','$categ','$reg','$desc','$filename')");
    }
    //$db->query("INSERT INTO ilyess VALUES (NULL,'$name','$phone_number')");

    /*$result= $db->query('SELECT * FROM contact_ilyess');
    echo '<ul>';
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
 ?>
