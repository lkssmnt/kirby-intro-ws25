<?php snippet("header") ?>

<h1><?= $page->title() ?></h1>

<?php $hasPicture = $page->profilepicture()->isNotEmpty() ?>

<div class="artist-header <?php if($hasPicture) echo 'grid-layout' ?>">

  <?php if($hasPicture): ?>
    <img src="<?= $page->profilepicture()->toFile()->url() ?>">
  <?php endif ?>

  <div class="artist-info">
    <p>Email: <?= $page->email() ?></p>
    <p>Website: <?= $page->website() ?></p>
    <p>Age: <?= $page->age() ?></p>
  </div>

</div>

<div class="text">
  <?= $page->bio() ?>
</div>


<?php snippet("footer") ?>