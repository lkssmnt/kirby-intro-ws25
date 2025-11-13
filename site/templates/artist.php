<?php snippet("header") ?>

<h1><?= $page->title() ?></h1>

<div class="artist-header">
  <p>Email: <?= $page->email() ?></p>
  <p>Website: <?= $page->website() ?></p>
  <p>Age: <?= $page->age() ?></p>
</div>

<div class="text">
  <?= $page->bio() ?>
</div>


<?php snippet("footer") ?>