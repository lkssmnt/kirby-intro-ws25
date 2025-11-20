<?php /*

  In the projects template we want to list all projects
  with links to their respective project pages.

  A foreach loop is used to iterate through all child pages
  of the current page (which is the "Projects" page).

  Inside the loop, we create a list item (<li>) for each project,
  containing a link (<a>) to the project's URL and displaying
  the project's title.

  This template assumes that each child page represents a project.

  The $project variable inside the loop refers to the current child page
  being processed in the iteration. We can name it anything we like,
  but "project" is chosen here for clarity.

*/ ?>


<?php snippet("header") ?>

<h1><?= $page->title() ?></h1>

<ul>
  <?php foreach ($page->children()->sortBy("year", "desc") as $project): ?>
    <li>
      <a href="<?= $project->url() ?>">

        <?php if($project->previewimage()->isNotEmpty()): ?>
          <img src="<?= $project->previewimage()->toFiles()->first()->url() ?>">
        <?php elseif($project->previewimage()->isEmpty() && $project->slideshow()->isNotEmpty()): ?>
          <img src="<?= $project->slideshow()->toFiles()->first()->url() ?>">
        <?php endif ?>

        <?= $project->title() ?>
        <?php if($project->year()->isNotEmpty()): ?>
          (<?= $project->year() ?>)
        <?php endif ?>
      </a>
    </li>
  <?php endforeach ?>
</ul>

<?php snippet("footer") ?>