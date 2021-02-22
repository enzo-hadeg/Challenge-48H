<?php include("inc/header.inc.php"); ?>

<?php 

$db = new PDO('mysql:host=localhost;dbname=challenge 48h', 'root','');



?>

<body id="page-top">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="../index2.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="annonce.php">Mes Annonces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="profile.php">Mon Profil</a>
        </li>
        </li>
        </li>
  </form>
</nav>
      </ul>
    </div>
  </nav>
  <?php 



$pdo = new PDO("mysql:host=localhost;dbname=challenge 48h", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));



if (!empty($_POST)) {

    $_POST["titre"] = htmlentities($_POST["titre"], ENT_QUOTES); 
    $_POST["prix"] = htmlentities($_POST["prix"], ENT_QUOTES);
    $_POST["description"] = htmlentities($_POST["description"], ENT_QUOTES);
    $_POST["date"] = htmlentities($_POST["date"], ENT_QUOTES);
    $_POST["statut"] = htmlentities($_POST["statut"], ENT_QUOTES);
    
    $msg = "";

      // If upload button is clicked ...
      if (isset($_POST['upload'])) {
        // Get image name
        $image = $_FILES['image']['name'];
      
        // image file directory
        $target = "../images/".basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          $msg = "Image uploaded successfully";
        }else{
          $msg = "Failed to upload image";
        }
      }
    $requeteSQL = "INSERT INTO objet_annonce (titre, prix, description, date, statut, image) VALUES ('$_POST[titre]', '$_POST[prix]', '$_POST[description]', '$_POST[date]', '$_POST[statut]', '$image')"; 
    $result = $pdo->exec($requeteSQL); 
  }
?>
<h1>Creation de l'annonce</h1>



<div class="starter-template">  
    <form method="POST" action="" enctype='multipart/form-data'>   <!-- Permet aux personnes de télécharger à la fois du texte et des fichiers -->

        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre">
        </div>

        <div class="form-group">
            <label for="prix">prix</label>
            <input type="text" class="form-control" id="prix" name="prix">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea rows="10" class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>

        <div class="form-group">
            <input type="hidden" class="form-control" id="statut" name="statut" value="Actif">
        </div>
        <input type="hidden" name="size" value="1000000">
  	   <div>
  	  <input type="file" name="image">
  	   </div>

        <button  name="upload" type="submit" class="btn btn-primary" id="OK">Enregistrer</button>

    </form>
</div>

<br><br>

<a href="../index2.php#experience" class="btn btn-primary">Accueil</a>
