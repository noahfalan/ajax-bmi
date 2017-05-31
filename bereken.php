<?php
if (isset($_GET['lengte']) && isset($_GET['gewicht'])) {
  try {
    $lengte = preg_replace("/[^0-9,.]/", "", $_GET['lengte']);
    $gewicht = preg_replace("/[^0-9,.]/", "", $_GET['gewicht']);
    $lengte = pow(str_replace(",",".",$lengte),2);

    $bmi = $gewicht/$lengte;
    $bmi = round($bmi, 2);
    print $bmi;
  } catch(Exception $e) {
    print "Error, sommige velden niet ingevuld of er zijn geen geldige waardes ingevuld.";
  }
} else {
  print "Error, sommige velden niet ingevuld of er zijn geen geldige waardes ingevuld.";
}

?>
