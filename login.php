<?php

session_start();
include "config/commande.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login -kenaline </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
        <br>
        <br>
        <br>
        <br>
        <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6">
                  <form metho="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" style="width: 80% ">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="motdepasse"  style="width: 80% ">
                        </div>
                        <input type="submit" class="btn btn-success" name="envoyer" value="se connecter">
                  </form>
                </div>
            <div class="col-md-3"></div>
        </div>
    </div>


</body>
</html>

<?php

if(isset($_POST['envoyer'])){
    if(!empty($_POST['email']) AND !empty($_POST['motdepasse'])){
        $email=htmlspecialchars($_POST['email']);
        $motdepasse=htmlspecialchars($_POST['motdepasse']);

        $Admin= GetAdmins($email, $password);

        if($Admin){

            $_SESSION['ronaldinho']=$Admin;

            header("location: admin/");

        }
        else{
            echo "il y'a un probleme !";
        }
    }
}

?>
