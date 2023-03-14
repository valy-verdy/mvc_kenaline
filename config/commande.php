<?php
require "config/connexion.php";
require_once "config/connexion.php";





function ajouter($image,$nom,$prix,$desc){

    if(require("connexion.php")){

        // $req= $access->prepare("INSERT INTO produits (image,nom, prix, description) VALUES (:image, :nom ,:prix, :description)");
        // $req->bindValue(':image', $image, PDO::PARAM_STR);
        // $req->bindValue(':nom', $nom, PDO::PARAM_STR);
        // $req->bindValue(':prix', $prix,PDO::PARAM_INT);
        // $req->bindValue(':description', $description, PDO::PARAM_STR);
        // $ret=$req->execute();
        

        $req=$access->prepare(" INSERT INTO produits (image, nom, prix, description) VALUES (?,?,?,?)");

        $req->execute(array($image ,$nom ,$prix ,$desc));
        $req->closeCursor();
    }
}


function GetAll(){

    if(require("connexion.php")){

        $req=$access->prepare("SELECT * FROM produits ORDER BY id DESC");
        $req->execute();
        $data=$req->fetchAll(PDO::FETCH_OBJ);

        return $data;
        $req->closeCursor();
    }

}


function supprimer($id){

    if(require("connexion.php")){

        $req=$access->prepare("DELETE FROM  produits WHERE id=?");
        $req->execute(array($id));
    }
}


function modifier($id){
    if(require("connexion.php")){

        $req->$access->prepare("UPDATE  produits(image,nom,prix,description) WHERE id=?");
        $req->execute(array($id));
        $req->closeCursor();
    }
}


function GetAdmins($email,$password){
    if(require("connexion.php")){

        $req=$access->prepare(" SELECT *FROM admin WHERE email=? AND password=?");

        $req->execute(array($email,$password));

            if($req->rowcount()==1){
                $data=$req->fetch();

                return $data;
            }
            else{
                 
                return false;
            }
        $req->closeCursor();
    }
}

?>