<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DOK</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <?php echo $css;?>
  </head>
  <body>

    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>
    </div>

    <footer>
      <div class="sponsors width">
        <?php for ($i=1; $i <= 11; $i++):?>
          <img src="assets/img/sponsor<?php echo $i ?>.png" alt="sponsor">
        <?php endfor; ?>

      </div>
      <div class="footerinfo">
        <p class="width">
          Splitsing Koopvaardijlaan – Afrikalaan <br />
          9000 Gent <br />
          info@dokgent.be
        </p>
      </div>
    </footer>
    <?php echo $js;?>
    </div>
  </body>
</html>
