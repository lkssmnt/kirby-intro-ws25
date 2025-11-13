<?php snippet("header") ?>

<h1><?= $page->title() ?></h1>

<ul>
  <?php foreach ($page->children() as $artist): ?>
    <li>
      <a href="<?= $artist->url() ?>">
        <?= $artist->title() ?>
      </a>
    </li>
  <?php endforeach ?>
</ul>

<?php snippet("footer") ?>