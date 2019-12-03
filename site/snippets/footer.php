  <footer>
    <?php $about = $pages->find('about') ?>
    <?php echo $about->text()->kirbytext() ?>
    <dl>
      <dt>E</dt>
      <dd><a href="mailto:<?php echo $about->email() ?>">info@claudialau.studio</a></dd>
      <dt>I</dt>
      <dd><a href="<?php echo $about->instagram() ?> ">@claudialaustudio</a></dd>
    </dl>
  </footer>
</body>

</html>
