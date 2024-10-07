<?php require_once __DIR__ . "/data.php" ?>

<div class="gridItemsBox">
  <?php foreach ($teams as $teamName => $teamInfo) { ?>
    <article class="gridItems">
      <h2><?= $teamName ?></h2>
      <img src="<?= $teamInfo['logo'] ?>" alt="<?= $teamName ?>" width="90px" height="90px">
      <ul>
        <li>
          <strong>League:</strong> <?= $teamInfo['league'] ?>
        </li>
        <li>
          <strong>City:</strong> <?= $teamInfo['city'] ?>
        </li>
        <li>
          <strong>Uefa Ranking:</strong> <?= $teamInfo['uefa-coefficient-ranking'] ?>
        </li>
        <li>
          <strong>Group:</strong> <?= $teamInfo['group'] ?>
        </li>
        <li>
          <strong><a href="<?= $teamInfo['url'] ?>" target="_blank">Official Website</a></strong>
        </li>
      </ul>
    </article>
  <?php } ?>
</div>

<div class="gridItemsBox">
  <?php foreach ($teams as $teamName => $teamInfo) { ?>
    <article class="gridItems">
      <h2><?= $teamName ?></h2>
      <img src="<?= $teamInfo['logo'] ?>" alt="<?= $teamName ?>" width="90px" height="90px">
      <ul>
        <li>
          <strong>League:</strong> <?= $teamInfo['league'] ?>
        </li>
        <li>
          <strong>City:</strong> <?= $teamInfo['city'] ?>
        </li>
        <li>
          <strong>Uefa Ranking:</strong> <?= $teamInfo['uefa-coefficient-ranking'] ?>
        </li>
        <li>
          <strong>Group:</strong> <?= $teamInfo['group'] ?>
        </li>
        <li>
          <strong><a href="<?= $teamInfo['url'] ?>" target="_blank">Official Website</a>
        </li>
      </ul>
    </article>
  <?php } ?>
</div>