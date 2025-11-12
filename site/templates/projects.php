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
  <?php foreach ($page->children() as $project): ?>
    <li>
      <a href="<?= $project->url() ?>">
        <?= $project->title() ?>
      </a>
    </li>
  <?php endforeach ?>
</ul>

<?php snippet("footer") ?>