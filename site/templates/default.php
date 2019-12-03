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
          <p class="date-range"><?php echo $project->date_range() ?></p>
          <?php echo $project->description()->kirbytext() ?>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <div class="archive-images">
    <div class="row-images">
      <figure>
        <img src="assets/images/Heirlooms.jpg" alt="">
      </figure>
      <figure>
        <img src="assets/images/Ceramic_Tiles_fro_Glaze_page_f45a8890-211d-49a2-ad99-c9e14f1ef2a8_1024x1024-2.jpg" alt="">
      </figure>
    </div>
  </div>
</main>

<?php snippet('footer') ?>
