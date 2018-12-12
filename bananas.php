<?php

  $bananasArray = [];

  array_push($bananasArray,"Bananas not only taste good, but the word sounds funny (Banana Dependency)");
  array_push($bananasArray,"High in energy");

  for($i = 0; $i < count($bananasArray); $i++){
    $bananas .= $bananasArray[$i] . $br;
  }
?>
