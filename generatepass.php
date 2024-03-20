<?php

session_start();
if(!isset($_SESSION["password"])) {
  header("Location: ./index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<div class="wrapper">
  <div class="container mb-3 pt-3">
    <div class="row justify-content-center">
      <div class="col-7">
        <div class="alert alert-success" role="alert">
          <?php echo $_SESSION["password"]; ?>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>