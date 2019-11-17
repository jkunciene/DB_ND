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
<form action="countryupdate.php" method="get">
  <div class="form-group">
    <label for="country">Country ID</label>
    <input type="text" value="<?php $ats = getCountry_ID($_GET['nr']); echo $ats['id']; ?>" name="id" placeholder="ID">
  </div>
    <div class="form-group">
      <label for="country">Country</label>
      <input type="text" id="country" name="country" class="form-control" placeholder="Country">
    </div>
    <div class="form-group">
      <label for="area">Area</label>
      <input type="text" id="area" name="area" class="form-control" placeholder="Area">
    </div>
    <div class="form-group">
      <label for="population">Population</label>
      <input type="text" id="population" name="population" class="form-control" placeholder="Population">
    </div>
    <div class="form-group">
      <label for="code">Code</label>
      <input type="text" id="code" name="code" class="form-control" placeholder="Code">
    </div>
    <button type="submit" value="Submit" class="btn btn-primary" >Update</button>
</form>
</div>
</body>
