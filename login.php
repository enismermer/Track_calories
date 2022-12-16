<?php

    $page = [
        "title" => "Track Calorie - Login"
    ];

    
    include_once('includes/header.php');
?>

<h1 style="background-color:rgb(233, 159, 11); padding:10px; text-align:center">Login Page</h1>


    <div class="container">
            <div class="row">
                <div class="col">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </form>

                    <a href="register.php">Register</a>
                </div>
            </div>
        </div>
<?php

    include_once('includes/footer.php');

?>