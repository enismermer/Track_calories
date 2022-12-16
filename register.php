<?php

    $page = [
        "title" => "Track Calorie - Register"
    ];

    
    include_once('includes/header.php');
?>

<h1 style="background-color:rgb(233, 159, 11); padding:10px; text-align:center">Register Page</h1>


    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter firstname">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter lastname">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" placeholder="Enter age">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="form-label">Téléphone</label>
                        <input type="tel" class="form-control" id="tel" placeholder="Enter telephone">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Url</label>
                        <input type="url" class="form-control" id="url"  placeholder="https://example.com">
                    </div>
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Homme</option>
                        <option value="2">Femme</option>
                        <option value="3">Nonbinaire</option>
                    </select>
                    <br>
                    <div class="mb-3">
                        <label for="size" class="form-label">Taille</label>
                        <input type="range" class="form-control" id="size" min="170" max="190" step="0.5">
                    </div>
                    <div class="mb-3">
                        <label for="poids" class="form-label">Poids</label>
                        <input type="number" class="form-control" id="poids">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="size" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>

                    <a href="login.php"></a>
                        <button type="button" class="btn btn-primary">Login</button>
                    </a>
                </form>

            </div>
        </div>
    </div>
  

<?php

    include_once('includes/footer.php');

?>