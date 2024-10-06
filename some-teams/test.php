<?php

$array = ['Jesper', 'Adam', 'Fredrik'];

foreach ($array as $testloop) {
  echo 'my name is ' . $testloop . '<br>';
}



echo '<ul>';
foreach ($teams as $teamName => $teamInfo) {
  echo '<h2>' . $teamName . '</h2><br>';
  echo '<img src="' . $teamInfo['logo'] . '" alt="' . $teamName . ' logo" style="width:100px;"><br>';
  echo '<b> League: </b>' . $teamInfo['league'] . '<br>';
  echo '<b>Uefa Ranking: </b>' . $teamInfo['uefa-coefficient-ranking'] . '<br>';
  echo '<b>City: </b>' . $teamInfo['city'] . '<br>';
  echo '<b>Group: </b>' . $teamInfo['group'] . '<br>';
  echo '<a href="' . $teamInfo['url'] . '" target="_blank">Official Website</a>';
  echo '<br>';
}
echo '</ul>';


<div class="info-teams-grid">
  <?php foreach ($teams as $teamName => $teamInfo) { ?>
    <article class="info-cards-grid">
      <h2><?= $teamName ?></h2>
      <img src="<?= $teamInfo['logo'] ?>" alt="<?= $teamName ?>" style="width:100px">
      <ul>
        <li><strong> League: </strong> <?= $teamInfo['league']  ?>
        </li>
        <li><strong> Uefa Ranking: </strong> <?= $teamInfo['uefa-coefficient-ranking'] ?>
        </li>
        <li><strong> City: </strong> <?= $teamInfo['city'] ?>
        </li>
        <li><strong> Group: </strong> <?= $teamInfo['group'] ?>
        </li>
        <li><strong> <a href="<?= $teamInfo['url'] ?>" target="_blank">Official Website</a>
        </li>
      </ul>
    </article>

  <?php } ?>
</div>