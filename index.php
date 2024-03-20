<?php

include __DIR__ . "functions.php";

if(isset($_GET["length"])){
    $passwd_length = intval($_GET["length"]);
    $allow_duplicates = $_GET["allow-duplicates"] ==="1" ? true : false;
    $characters = $_GET["characters"] ?? [];
    $result = generatePassword($passwd_length, $allow_duplicates, $characters);


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Password</title>
</head>
<body>
  <main>
    <div class="wrapper">
      <div class="container rounded mb-3 p-5">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h1>Strong Password Generator</h1>
            <h3>Generate Password</h3>
          </div>
          <?php if (isset($result)) { ?>
          <div class="col-7">
            <div class="alert alert-danger" role= "alert">
              <?php echo $result ?>
            </div>
          </div>
          <?php } ?>   
          <div class="col-7">
            <form class="p-3 border bg-light" action="index.php" method="GET">
              <div class="row mb-3">
                <label for="length" class="col-sm-7 col-form-label">
                  Length Password
                </label>
                <div class="col-sm-3">
                  <input type="number" name="length" id="length" class="form-control">
                </div>
              </div>
              <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-7 pt-0">
                Allows repeating characters:
                </legend>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="allow-duplicates" id="allow-duplicates" checked value="1">
                    <label class="form-check-label" for="allow-duplicates">
                      Yes
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="allow-duplicates" id="allow-duplicates" checked value="0">
                    <label class="form-check-label" for="allow-duplicates">
                      No
                    </label>
                  </div>
                </div>
              </fieldset>
              <div class="row mb-3">
                <div class="col-sm-5 offset-sm-7">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="characters[]" id="characters" value="L">
                    <label class="form-check-label" for="characters">Letters</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="characters[]" id="characters" value="N">
                    <label class="form-check-label" for="characters">Numbers</label>
                  </div>    
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="characters[]" id="characters" value="S">
                    <label class="form-check-label" for="characters">Symbols</label>
                  </div>
                </div>                       
              </div>
              <div class="mb-3">
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Send</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
              </div>  
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
          
            
            
  