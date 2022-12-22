<?php

// j'importe ma boite a outils.
require'./utils/connexion.php';
require_once'./utils/fonction.php';

unset($_SESSION['id']);
unset($_SESSION['email']);
error_log("register".print_r($_SESSION, 1));

if (isset($_POST["register"])){

    $prenom = $_POST['prénom'];
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $sexe = $_POST['sexe'];
    $taille = $_POST['taille'];
    $poids = $_POST['poids'];

    if( !empty($prenom) &&
        !empty($nom) &&
        !empty($age) &&
        !empty($email) &&
        !empty($tel) &&
        !empty($sexe) &&
        !empty($taille) &&
        !empty($poids)

        ){
        

        //$now = date("d/m/Y H:i:s", time());
        $sql = "INSERT INTO users VALUES (:id, :prénom, :nom, :age, :email, :tel, :sexe, :taille, :poids)";
        
        $sql = $pdo->prepare($sql);
        $sql->bindParam('id', $id, PDO::PARAM_INT);
        $sql->bindParam('prénom', $prenom, PDO::PARAM_STR);
        $sql->bindParam('nom', $nom, PDO::PARAM_STR);
        $sql->bindParam('age', $age, PDO::PARAM_INT);
        $sql->bindParam('email', $email, PDO::PARAM_STR);
        $sql->bindParam('tel', $tel, PDO::PARAM_INT);
        $sql->bindParam('sexe', $sexe, PDO::PARAM_STR);
        $sql->bindParam('taille', $taille, PDO::PARAM_INT);
        $sql->bindParam('poids', $poids, PDO::PARAM_INT);
        $sql->execute();
  
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $pdo->lastInsertId();
    
            header("Location: index.php");
    }
}




    $page = [
        "title" => "Track Calorie - Register"
    ];

    
    include_once('includes/header.php');
?>

<h1 style="background-color:rgb(233, 159, 11); padding:10px; text-align:center">Register Page</h1>


    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST">
                    <div class="mb-3">
                        <label for="prénom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prénom" name="prénom" aria-describedby="emailHelp" placeholder="Enter firstname" required>
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp" placeholder="Enter lastname"required>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Enter age" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="form-label">Téléphone</label>
                        <input type="tel" class="form-control" id="tel" name="tel" placeholder="Enter telephone" required>
                    </div>
                    <br>
                    <div class="mb-3">
                        <select class="form-select" id="sexe" name="sexe" aria-label="Floating label select example" required>
                            <option selected>Sexe</option>
                            <option value="1">Homme</option>
                            <option value="2">Femme</option>
                            <option value="3">Non binaire</option>
                        </select>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="taille" class="form-label mt-2">Taille</label>
                        <input type="range" class="form-range" id="taille" name="taille" min="170" max="190" step="1" oninput="sliderChangeSize(this.value)" required>
                        <output id="outputSize">175</output>
                    </div>
                    <div class="mb-3">
                        <label for="poids" class="form-label">Poids</label>
                        <input type="range" class="form-range" id="poids" name="poids" min="60" max="80" step="1" oninput="sliderChangeWeight(this.value)" required>
                        <output id="outputWeight">70</output>
                    </div>
                    <br>
                        <button type="submit" name="register" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
  

<?php

    include_once('includes/footer.php');

?>