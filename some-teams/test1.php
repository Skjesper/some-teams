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



<?php foreach ($teams as $name => $info): ?>
  <div class="team">
      <h2>Team: <?php echo $name; ?></h2>
      <p>League: <?php echo $info['league']; ?></p>
      <p>UEFA Coefficient ranking: <?php echo $info['uefa-coefficient-ranking']; ?></p>
      <p>City: <?php echo $info['city']; ?></p>
      <p>Group: <?php echo $info['group']; ?></p>
      <img src="<?php echo $info['logo']; ?>" 
           alt="<?php echo $name; ?> logo" 
           style="width: 20px; margin-bottom: 20px;">
      <br>
      <a href="<?php echo $info['url']; ?>" target="_blank">Visit <?php echo $name; ?></a>
      <br><br>
  </div>
<?php endforeach; ?>

