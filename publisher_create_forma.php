<?php require_once('db_functions.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DB_ND</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
<body>
<div class="container">
  <header>
          <h2 class="bg-light p-3 text-center">Create Publisher</h2>
  </header>
<form action="publishercreate.php" method="get">
    <div class="form-group">
      <label for="Publisher">Publisher</label>
      <input type="text" id="publisher_name" name="publisher_name" class="form-control" placeholder="Publisher">
    </div>
    <div class="form-group">
      <label for="book_title">Book Title</label>
      <input type="text" id="book_title" name="book_title" class="form-control" placeholder="Book Title">
    </div>
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" id="author" name="author" class="form-control" placeholder="Author">
    </div>
    <div class="form-group">
      <label for="printed_quantity">Printed quantity</label>
      <input type="text" id="printed_quantity" name="printed_quantity" class="form-control" placeholder="Printed quantity">
    </div>
    <div class="form-group">
      <label for="printing_price">Printing Price</label>
      <input type="text" id="printing_price" name="printing_price" class="form-control" placeholder="Printing Price">
    </div>
    <button type="submit" value="Submit" class="btn btn-primary" onclick="myFunction()">Create</button>
</form>
</div>
</body>
<script>
function myFunction() {
  var txt;
  if (confirm("yuo will create Publisher!")) {
    txt = "Tu sukursi naują leideja!";
  } else {
    txt = "You pressed Cancel!";
  }

}
</script>
