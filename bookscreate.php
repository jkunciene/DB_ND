<?php
include ('db_functions.php');
createBook($_GET['book_title'], $_GET['author'], $_GET['publish_date'], $_GET['publisher'], $_GET['selling_price']);
?>
<a  href="index.php" class="btn btn-outline-dark w-50 mb-5">Back to Home Page</a>
