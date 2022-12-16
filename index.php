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

        <section class="date" align="center" style="font-size: 1.5em;">
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
                        <div class="titleFood">Big burger</div>
                        <div class="calorieFood">504kcal</div>
                    </div>
                    <div class="food">
                        <div class="titleFood">Big burger</div>
                        <div class="calorieFood">504kcal</div>
                    </div>
                    <div class="food">
                        <div class="titleFood">Big burger</div>
                        <div class="calorieFood">504kcal</div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="text-center">
            <button class="btn btn-primary">+</button>
        </div>
    </footer>

</div>


<?php include_once('includes/footer.php'); ?>