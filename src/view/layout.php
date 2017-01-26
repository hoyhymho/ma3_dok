<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DOK</title>
    <?php echo $css;?>
  </head>
  <body>

    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>
    </div>

    <footer>
      <div>
        <img src="assets/img/sponsor1.png" alt="sponsor">
        <img src="assets/img/sponsor1.png" alt="sponsor">
        <img src="assets/img/sponsor1.png" alt="sponsor">
        <img src="assets/img/sponsor1.png" alt="sponsor">
        <img src="assets/img/sponsor1.png" alt="sponsor">
        <img src="assets/img/sponsor1.png" alt="sponsor">
        <img src="assets/img/sponsor1.png" alt="sponsor">
        <img src="assets/img/sponsor1.png" alt="sponsor">
        <img src="assets/img/sponsor1.png" alt="sponsor">
        <img src="assets/img/sponsor1.png" alt="sponsor">
        <img src="assets/img/sponsor1.png" alt="sponsor">
        <img src="assets/img/sponsor1.png" alt="sponsor">
      </div>
      <div>
        <p>
          Splitsing Koopvaardijlaan – Afrikalaan <br />
          9000 Gent <br />
          info@dokgent.be
        </p>
      </div>
    </footer>
    <?php echo $js;?>
  </body>
</html>
