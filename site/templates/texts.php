<?php snippet("header") ?>

<h1><?= $page->title() ?></h1>

<ul>
  <?php foreach ($page->children() as $text): ?>
    <li>
      <a href="<?= $text->url() ?>">
        <?= $text->title() ?>
      </a>
    </li>
  <?php endforeach ?>
</ul>

<?php snippet("footer") ?>