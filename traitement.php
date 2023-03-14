<?php
require_once "config/commande.php";
require_once "config/connexion.php";
?>




<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <form  method="POST">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titre de l'image</label>
            <input type="name" class="form-control" name="image" id="exampleInputEmail1" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
            <input type="text" class="form-control" name="nom" id="exampleInputPassword1" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prix</label>
            <input type="number" class="form-control" name="prix" id="exampleInputPassword1" required>
        </div>
        

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea class="form-control" name="desc" required></textarea>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <button type="submit"  name="valider" class="btn btn-primary">Ajouter</button>
       
            <a href="index.php"  name="valider" class="btn btn-primary">voir les produits </a>
        </div>
        </form>

      </div>
    </div>
</div>      
       
</body>
</html>

<?php
if(isset($_POST['valider'])){

    if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['desc'])){
        if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['desc'])){

            $image =htmlspecialchars($_POST['image']);
            $nom =htmlspecialchars($_POST['nom']);
            $prix =htmlspecialchars($_POST['prix']);
            $desc =htmlspecialchars($_POST['desc']);
            try{
            ajouter($image,$nom,$prix,$desc);
            }
            catch(Exception $e){
                $e->getMessage();
            }
            

        }  
    }
}
?>