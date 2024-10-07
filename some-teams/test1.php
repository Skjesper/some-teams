<?php

//for ($i = 100; $i > 0; $i--); {

//echo $i;
//}
$a = 3;
while ($a <= 10) {
  echo $a . "<pa>";
  $a = $a + 2;
}

$canVisitSystemet = false;
$age = 10;
while (!$canVisitSystemet) {
  echo "Du får ej handla";
  $age++;
  if ($age >= 20) {
    $canVisitSystemet = true;
  }
}
echo "Du får handla";

