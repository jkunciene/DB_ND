<?php require_once('db_functions.php') ?>
<!DOCTYPE html>
<html>
    <head>
      <title>DB_ND</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">

<div class="row mb-3 mt-3">
  <div class="col">
    <?php echo "<a type='button' class='btn btn-warning' href= 'country_create_forma.php?nr=$i'>".Yuo_can_create_new_BOOK ."</a>";?>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <table border="1" cellpadding="4">
    <tr>
        <td bgcolor="#CCCCCC"><strong>Book</strong></td>
        <td bgcolor="#CCCCCC"><strong>Title</strong></td><td bgcolor="#CCCCCC"><strong>Author</strong></td><td bgcolor="#CCCCCC"><strong>Date</strong></td><td bgcolor="#CCCCCC"><strong>Price</strong></td><td bgcolor="#CCCCCC"><strong>Update</strong></td><td bgcolor="#CCCCCC"><strong>Delete</strong></td></tr>
    <?php
    $knygos = getBooks();
    $knyga = mysqli_fetch_assoc($knygos);
      for($i=1; $i < HOME_NUMBER_OF_ARTICLES; $i++){
      while($knyga == true){
        $trans = $knyga[id];
    ?>
                <tr>
                <td><? echo "<a  class='card-title h6' href= 'publishers.php?nr=$trans'>".$knyga['book_title']."</a>"; ?></td>
                <td><? echo $knyga['author']; ?></td>
                <td><? echo $knyga['publish_date']; ?></td>
                <td><? echo $knyga['publisher']; ?></td>
                <td><? echo $knyga['selling_price']; ?></td>
                <td><? echo "<a class='card-link' href= 'books_update_forma.php?nr=$trans'>".Update."</a>"; ?></td>
                <td><? echo "<a class='card-link' href= 'booksdelete.php?nr=$trans'>".Delete."</a>"; ?></td>
                </tr>
                <?php $salis = mysqli_fetch_assoc($salys); ?>
    <?php
    }
    };
    ?>
    </table>
</div>
</div>
</div>
