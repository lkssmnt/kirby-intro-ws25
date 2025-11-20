<?php snippet("header") ?>

<h1><?= $page->title() ?></h1>

<div class="text">
  <?= $site->introtext() ?>
</div>

<section>
  <h2>Artists</h2>
  <ul>
    <?php foreach (page("artists")->children() as $artistPage): ?>
      <li>
        <a href="<?= $artistPage->url() ?>">
          <?= $artistPage->title() ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</section>

<section>
  <h2>Projects</h2>
  <ul>
    <?php foreach (page("projects")->children() as $projectPage): ?>
      <li>
        <a href="<?= $projectPage->url() ?>">
          <?= $projectPage->title() ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</section>

<section>
  <h2>Texts</h2>
  <ul>
    <?php foreach (page("texts")->children() as $textPage): ?>
      <li>
        <a href="<?= $textPage->url() ?>">
          <?= $textPage->title() ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</section>




<?php snippet("footer") ?>