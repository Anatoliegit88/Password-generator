<?php
session_start();

/**
 * 
 * @param number $passwd_length
 * @param boolean $allow_repeat
 * @return [string]
 */

function generatePassword($passwd_length, $allow_repeat, $allowed_chars){
  $full_chars = generateBaseChars($allowed_chars);
  $result = "";
  if ($passwd_length >= 8 && $passwd_length <= 32) {
    $password ="";
    while (strlen($password) < $passwd_length) {
      $index = rand(0, (strlen($full_chars) - 1));
      $char = $full_chars[$index];
      // if (!$allow_repeat) {
      //   if (!str_contains($password, $char)) {
      //     $password .= $char;
      //   }
      // } else {
      //   $password .= $char;
      // }

      if ($allow_repeat || !str_contains($password, $char)) {
        $password .= $char;
      }

    }
    $_SESSION["password"] = $password;
    header("Location: ./generatepass.php");
  } else {
    // Input Error
    $result = "La password deve avere un minimo di 8 e massimo 35 caratteri";
  }
return $result;
}


/**
 * @param Array
 * @return [type]
 */

 function generateBaseChars($allowed_chars) {
  $lett = "abcdefghijklmnopqrstuvwxyz";
  $num = "0123456789";
  $symb = "<>;:,.-_§°ç+*^?=)(/&%£!\|";
  $full_chars ="";
if (count($allowed_chars) > 0 ) {
  if (in_array("L", $allowed_chars)) {
    $full_chars .= $lett;
    $full_chars .= strtoupper($lett);
  }
  if (in_array("N", $allowed_chars)) {
    $full_chars .= $num;
  }
  if (in_array("S", $allowed_chars)) {
    $full_chars .= $symb;
  }
  
} else {
  $full_chars = $lett . strtoupper($lett) . $num . $symb;
}

  return $full_chars;
 }


