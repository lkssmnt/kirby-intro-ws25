<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= css("assets/css/styles.css") ?>
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
</head>

<body>


<nav>
  <ul>

    <?php foreach($site->nav()->toPages() as $subpage): ?>
      <li>
        <a href="<?= $subpage->url() ?>">
          <?= $subpage->title() ?>
        </a>
      </li>
    <?php endforeach ?>

    <?php /*

    <li>
      <a href="<?= page("home")->url() ?>">
        <?= page("home")->title() ?>
      </a>
    </li>
    <li>
      <a href="<?= page("texts")->url() ?>">
        <?= page("texts")->title() ?>
      </a>
    </li>
    <li>
      <a href="<?= page("projects")->url() ?>">
        <?= page("projects")->title() ?>
      </a>
    </li>
    <li>
      <a href="<?= page("artists")->url() ?>">
        <?= page("artists")->title() ?>
      </a>
    </li>

    */ ?>
  </ul>
</nav>