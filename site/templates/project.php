<?php /*

  In the project template we want to display details
  about a specific project.

  We display the project's title, author, a slideshow
  of images, and the main text content.

  The $page variable refers to the current project page
  being viewed.

  We use a foreach loop to iterate through the files
  associated with the project page for the slideshow.

  We assume that the project page has fields named
  "author", "slideshow", and "text".

*/ ?>

<?php snippet("header") ?>

<h1>Project: <?= $page->title() ?></h1>


<?php if($page->year()->isNotEmpty()): ?>
  <p>Year: <?= $page->year() ?></p>
<?php endif ?>

<?php if($page->artist()->isNotEmpty()): ?>
  <p>Author(s):</p>
  <ul>
    <?php foreach ($page->artist()->toPages() as $artist): ?>
      <li>
        <a href="<?= $artist->url() ?>"><?= $artist->title() ?></a>
      </li>
    <?php endforeach ?>
  </ul>
<?php endif ?>

<div class="images">
  <?php foreach ($page->slideshow()->toFiles() as $image): ?>
    <img src="<?= $image->url() ?>">
  <?php endforeach ?>
</div>

<div class="text">
  <?= $page->text() ?>
</div>

<?php snippet("footer") ?>