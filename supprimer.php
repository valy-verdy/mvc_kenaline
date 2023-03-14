<?php


session_start();

if(!isset($_SESSION['ronaldinho'])){
  header("location: ../login.php/");
}
if(!empty($_SESSION['ronaldinho'])){
  header("location: ../login.php/");
}
require_once "config/commande.php";
require_once "config/connexion.php";

$Produits=GetAll();

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

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">identifiant du produit</label>
            <input type="number" class="form-control" name="idproduit" id="exampleInputPassword1" required>
        </div>
        

        <div class="d-flex justify-content-between align-items-center">
            <button type="submit"  name="valider" class="btn btn-danger">Supprimer</button>
       
            <a href="index.php"  name="valider" class="btn btn-primary">voir les produits </a>
        </div>
        </form>

      </div>



      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php foreach($Produits as $produit): ?>
        <div class="col">
          <div class="card shadow-sm">
                <img  src="<?=$produit->image?>" >
                <h3><?=$produit->id?></h3>
          </div>
            
            <div class="card-body">
             
              
            </div>
         
        </div>
      <?php endforeach; ?>
 

      </div>
    </div>
</div>      
       
</body>
</html>

<?php
if(isset($_POST['valider'])){

    if(isset($_POST['idproduit'])){
        if( !empty($_POST['idproduit']) AND is_numeric($_POST['idproduit'])){

            $idproduit =htmlspecialchars($_POST['idproduit']);
           
            try{
                supprimer($idproduit);
            }
            catch(Exception $e){
                $e->getMessage();
            }
            

        }  
    }
}
?>