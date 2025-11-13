<?php snippet("header") ?>

<h1><?= $page->title() ?></h1>
<h2><?= $page->author() ?></h2>

<div class="text">
  <?= $page->text() ?>
</div>


<?php snippet("footer") ?>