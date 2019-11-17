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
          <h2 class="bg-light p-3 text-center">Update Book</h2>
  </header>
<form action="booksupdate.php" method="get">
    <div class="form-group">
      <label for="book">Book ID</label>
      <input type="text"  id="id" name="id" class="form-control" value="<?php $ats = getBook_ID($_GET['nr']); echo $ats['id']; ?>" name="id" >
    </div>
    <div class="form-group">
      <label for="book_title">Title</label>
      <input type="text" id="book_title" name="book_title" class="form-control" placeholder="Book">
    </div>
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" id="author" name="author" class="form-control" placeholder="Author">
    </div>
    <div class="form-group">
      <label for="publish_date">Publish date</label>
      <input type="text" id="publish_date" name="publish_date" class="form-control" placeholder="Publish date">
    </div>
    <div class="form-group">
      <label for="publisher">Publisher</label>
      <input type="text" id="publisher" name="publisher" class="form-control" placeholder="Publisher">
    </div>
    <div class="form-group">
      <label for="selling_price">Selling price</label>
      <input type="text" id="selling_price" name="selling_price" class="form-control" placeholder="Selling price">
    </div>
    <button type="submit" value="Submit" class="btn btn-primary" onclick="myFunction()">Update</button>
</form>
</div>
</body>
<script>
function myFunction() {
  var txt;
  if (confirm("Update Book!")) {
    txt = "Tu atnaujinsi!";
  } else {
    txt = "You pressed Cancel!";
  }

}
</script>
