<?php
// connexion à la BDD
// un user s'est connecté
// on stock les informations de user dans une variable

$user=[
  "id"=>1,
  "name"=>"Enis",
  "age "=>22,
  "sexe"=>"Homme",
  "weight"=>75,
  "size"=>185,
  "IMC"=>25,
  "email"=>"enis@mail.com",
  "isLogged"=>true
];
if(!$user ["isLogged"]){
    header("location:login.php");
    exit;
}

$page=[
    "title" => "Track Calorie - Accueil"
];

include_once('includes/header.php');

?>

<div class="containerApp">
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h1>Track Calories</h1>
                </div>
                <div class="col-auto">
                    <div class="profil"><i class="bi bi-person"></i>
                    <?php echo $user['name']; ?>
                </div>
            </div>
        </div>


    </header>
    <main>
        <section class="dataUser">

            <div class="doughnut">
                <canvas id="myChart"></canvas>
                <div class="kcal">1200 kcal</div>
            </div>

            <div>IMC</div>
            <div><?php echo $user['weight']; ?>Kg</div>
            <div class="custom-shape-divider-bottom-1671192619">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </section>

        <section class="date" align="center" style="font-size:1.5em; padding:20px;">
            <div><?php
        //date default timezone
       // date_default_timezone_set('Europe/Paris');
        //instnaciation a new dateTime object
        //$dateTimeObj= new DateTime('now', new DateTimeZone('Europe/Paris'));
        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
        echo $formatter->format(time()); ?>
            </div>

        </section>

        <section class="list">
            <div class="container">
                <div class="row">
                    <div class="food">
                        <div class="titleFood">Big mac</div>
                        <div class="calorieFood">400kcal</div>
                    </div>
                    <div class="food">
                        <div class="titleFood">Pain au chocolat</div>
                        <div class="calorieFood">250kcal</div>
                    </div>
                    <div class="food">
                        <div class="titleFood">Pâtes carbonara</div>
                        <div class="calorieFood">1200kcal</div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer style="padding:10px;">
        
    <!-- Button trigger modal -->
    <div class="text-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter</button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter une calorie</h1>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="food" class="form-label">Plat cuisine</label>
                        <input type="text" class="form-control" id="food" placeholder="Enter a cooked dish">
                    </div>
                    <div class="mb-3">
                        <label for="calories" class="form-label">Calories (kcal)</label>
                        <input type="text" class="form-control" id="calories" placeholder="Enter a calorie value">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="addData()">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
    </footer>
</div>


<?php include_once('includes/footer.php'); ?>