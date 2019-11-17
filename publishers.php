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

</header>
<div class="row mb-5 mt-5">
  <div class="col">
    <?php echo "<a type='button' class='btn btn-warning' href= 'publisher_create_forma.php'>".Yuo_can_create_new_Publisher ."</a>";?>
  </div>
</div>
        <div class="card" style="width: 18rem;">
          <div class="card-body  text-center">
            <?php
            $ats = getBook_Publisher($_GET['nr']);
            //print($ats['publisher']);
            $leidejai = getPublisher_pgl_Book($ats['publisher']);
            $leidejas = mysqli_fetch_assoc($leidejai);
            while (  $leidejas == true ) {
                        echo "<p class='card-text'>"."Publisher ID  ". $leidejas['id']."</p>";
                        echo "<h3 class='card-title'>"."Publisher name  ". $leidejas['publisher_name']."</h3>";
                        echo "<h6 class='card-subtitle mb-2 text-muted'>"."Book Title  ".$leidejas['book_title']."</h6>";
                        echo "<p class='card-text'>"."Author  ".$leidejas['author']."</p>";
                        echo "<p class='card-text'>"."Printed quantity  ".$leidejas['printed_quantity'] ."</p>";
                        echo "<p class='card-text'>"."Printing price  ".$leidejas['printing_price'] ."</p>";
                        $k=$leidejas['id'];
                        echo "<a class='card-link' href= 'publisher_update_forma.php?nr=$k'>".Update."</a>";
                        echo "<a class='card-link' href= 'publisherdelete.php?nr=$k'>".Delete."</a>";
                        echo "<hr />";
                      $leidejas = mysqli_fetch_assoc($leidejai);}
             ?>
        </div>
      </div>
</div>
