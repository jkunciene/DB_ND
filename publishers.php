<?php require_once('db_functions.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DB_ND</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
<div class="container">
nav>
</header>
<div class="row mb-5 mt-5">
  <div class="col">
    <?php echo "<a type='button' class='btn btn-warning' href= 'city_create_forma.php'>".Yuo_can_create_new_City ."</a>";?>
  </div>
</div>
        <div class="card" style="width: 18rem;">
          <div class="card-body  text-center">
            <?php
            $ats = getCountry_ID($_GET['nr']);
            //print($ats['id']);
            $miestai = getCity_pgl_countryID($ats['id']);
            $miestas = mysqli_fetch_assoc($miestai);
            while (  $miestas == true ) {
                        echo "<p class='card-text'>"."City ID  ". $miestas['id']."</p>";
                        echo "<h3 class='card-title'>"."City  ". $miestas['city']."</h3>";
                        echo "<h6 class='card-subtitle mb-2 text-muted'>"."Area  ".$miestas['cityarea']."</h6>";
                        echo "<p class='card-text'>"."Population  ".$miestas['citypopulation']."</p>";
                        echo "<p class='card-text'>"."Code  ".$miestas['citycode'] ."</p>";
                        $k=$miestas['id'];
                        echo "<a class='card-link' href= 'city_update_forma.php?nr=$k'>".Update."</a>";
                        echo "<a class='card-link' href= 'citydelete.php?nr=$k'>".Delete."</a>";
                        echo "<hr />";
                      $miestas = mysqli_fetch_assoc($miestai);}
             ?>
        </div>
      </div>
</div>
