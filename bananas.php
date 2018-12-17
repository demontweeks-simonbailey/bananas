<?php

  $bananasArray = [];

  array_push($bananasArray,"Bananas not only taste good, but the word sounds funny (Banana Dependency)");
  array_push($bananasArray,"High in energy");
  array_push($bananasArray,"Last one...I swear");
  array_push($bananasArray,"Ok, so it isn't");

  for($i = 0; $i < count($bananasArray); $i++){
    $bananas .= $bananasArray[$i] . $br;
  }
?>
