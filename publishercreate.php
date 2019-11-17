<?php
include ('db_functions.php');

createPublisher($_GET['publisher_name'], $_GET['book_title'], $_GET['author'], $_GET['printed_quantity'], $_GET['printing_price']);
?>
<a  href="index.php" class="btn btn-outline-dark w-50 mb-5">Back to Home Page</a>
