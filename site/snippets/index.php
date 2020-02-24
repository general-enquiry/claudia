<div class="index">
  <span class="index-close">&times;</span>
  <div class="header">
    <div class="archive-header">
      <span class="code">CODE</span>
      <span class="image">IMAGE</span>
      <span class="name">NAME</span>
      <span class="notes">NOTES</span>
      <span class="cone">(CONE)</span>
      <span class="atmosphere">ATMOSPHERE</span>
      <span class="purpose">PURPOSE</span>
      <span class="application">APPLICATION</span>
    </div>
  </div>
  <div class="row-wrap">
    <?php foreach(page('index')->children()->listed() as $index_single): ?>
      <div class="row">
        <span class="code"><?= $index_single->title() ?></span>
        <span class="image">
          <? if($image = $index_single->glaze_image()->toFile()): ?>
            <img src="<?= $image->url() ?>" alt="">
          <? endif ?></span>
        <span class="name"><?= $index_single->glaze_name() ?></span>
        <span class="notes"><?= $index_single->glaze_notes() ?></span>
        <span class="cone"><?= $index_single->glaze_cone() ?></span>
        <span class="atmosphere"><?= $index_single->glaze_atmos() ?></span>
        <span class="purpose"><?= $index_single->glaze_purpose() ?></span>
        <span class="application"><?= $index_single->glaze_application() ?></span>
      </div>
    <?php endforeach ?>
  </div>
</div>
