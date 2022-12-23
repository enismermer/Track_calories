<?php

// j'importe ma boite a outils.
require './utils/connexion.php';
require_once './utils/fonction.php';

if (isset($_POST['email'])) {
    //ici je recupère mon mail
    $email = stripslashes($_REQUEST['email']);
    //var_dump($email);
    //ici je fais un select avec ma table users et mon mail
    $sql = "SELECT * FROM users WHERE email='$email'";
    $select = $pdo->prepare($sql);
    $select ->execute();
    //print_r('coucou');
    $count = $select->rowCount();
    if ($count === 1) {
        $_SESSION['email'] = $email;
        header("Location: index.php");
    } else {
        echo "Le nom d'utilisateur est incorrect ou n'existe pas.";
    }
}

    $page = [
        "title" => "Login"
    ];

    
    include_once('includes/header.php');
?>

<h1 style="background-color:rgb(233, 159, 11); padding:10px; text-align:center">Login Page</h1>


    <div class="container">
            <div class="row">
                <div class="col">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" id="submit" value="login" class="btn btn-primary">Submit</button>
                        <br>
                        <br>
                        <a href="register.php" style="text-decoration:none">Register</a>
                    </form>

                </div>
            </div>
        </div>
<?php

    include_once('includes/footer.php');

?>