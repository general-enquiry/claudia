<?php snippet('header') ?>

<main>
  <div class="archive">
    <div class="row-wrap">
      <?php foreach(page('projects')->children()->listed() as $project): ?>
        <div class="row">
          <span class="project"><?php echo $project->num() ?></span>
          <span class="title"><?php echo $project->title() ?></span>
          <span class="category"><?php echo $project->category() ?></span>
          <span class="date"><?php echo $project->year() ?></span>
        </div>
        <div class="row-content">
          <span class="date-range"><?php echo $project->date_range() ?></span>
          <?php echo $project->description()->kirbytext() ?>
          <div class="images">
            <?foreach($project->images() as $img): ?>
              <figure>
                <img src="<?= $img->url() ?>" alt="<?= $img->alt_text() ?>">
                <figcaption><?= $img->caption() ?></figcaption>
              </figure>
            <? endforeach ?>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</main>
<? snippet('index') ?>

<?php snippet('footer') ?>
