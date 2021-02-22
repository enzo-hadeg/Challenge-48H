<?php include("inc/header.inc.php"); 
$pdo = new PDO("mysql:host=localhost;dbname=challenge 48h", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));



if (!empty($_POST)) {

    $_POST["titre"] = htmlentities($_POST["titre"], ENT_QUOTES); 
    $_POST["description"] = htmlentities($_POST["description"], ENT_QUOTES);
    $_POST["instantcons"] = htmlentities($_POST["instantcons"], ENT_QUOTES);
    $_POST["ciblecli"] = htmlentities($_POST["ciblecli"], ENT_QUOTES);
    $_POST["ambiance"] = htmlentities($_POST["ambiance"], ENT_QUOTES);
    $_POST["familleprod"] = htmlentities($_POST["familleprod"], ENT_QUOTES);
    $_POST["comprepa"] = htmlentities($_POST["comprepa"], ENT_QUOTES);
    $_POST["preciprod"] = htmlentities($_POST["preciprod"], ENT_QUOTES);
    $_POST["vue"] = htmlentities($_POST["vue"], ENT_QUOTES);
    $_POST["region"] = htmlentities($_POST["region"], ENT_QUOTES);
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
    $requeteSQL = "INSERT INTO objet_annonce (titre, description,instantcons ,ciblecli ,ambiance ,familleprod ,comprepa ,preciprod ,vue , region , date, statut, image) VALUES ('$_POST[titre]', '$_POST[description]','$_POST[instantcons]','$_POST[ciblecli]','$_POST[ambiance]','$_POST[familleprod]','$_POST[comprepa]', '$_POST[date]','$_POST[preciprod]','$_POST[vue]','$_POST[region]', '$_POST[statut]', '$image')"; 
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
            <label for="description">Description</label>
            <textarea rows="10" class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="prix">Instant de consomation </label>
            <input type="text" class="form-control" id="instantcons" name="Instant de consomation">
        </div>
        <div class="form-group">
            <label for="prix">Cibles Clients </label>
            <input type="text" class="form-control" id="ciblecli" name="Cibles Clients">
        </div>
        <div class="form-group">
            <label for="prix">Ambiance / univers exprimés </label>
            <input type="text" class="form-control" id="ambiance" name="Ambiance / univers exprimés">
        </div>
        <div class="form-group">
            <label for="prix">Familles de produit </label>
            <input type="text" class="form-control" id="familleprod" name="Familles de produit">
        </div>
        <div class="form-group">
            <label for="prix">Composante du repas </label>
            <input type="text" class="form-control" id="comprepa" name="Composante du repas">
        </div>
        <div class="form-group">
            <label for="prix">Précisions sur le produit </label>
            <input type="text" class="form-control" id="preciprod" name="Précisions sur le produit">
        </div>
        <div class="form-group">
            <label for="prix">Prise de vue </label>
            <input type="text" class="form-control" id="vue" name="Prise de vue">
        </div>
        <div class="form-group">
            <label for="prix">Région </label>
            <input type="text" class="form-control" id="region" name="Région">
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

