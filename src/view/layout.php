<!DOCTYPE html>
<html>
  <head>
    <script>
     WebFontConfig = {
       custom: {
          families: ['roboto'],
          urls: ['assets/fonts/roboto/roboto.css']
        }
     };
     (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.async = true;
        wf.src = 'js/webfontloader.js';
        s.parentNode.insertBefore(wf, s);
     })(document);
    </script>

    <meta charset="utf-8">
    <title>DOK</title>
    <?php echo $css;?>
  </head>
  <body>

    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php if ($_GET['page']=='programma' || $_GET['page']=='detail'): ?>
        <header class="header_standard">
          <div class="burger">
            <span></span>
            <span></span>
          </div>

          <div class="overlay hidden">
            <div class="width">

              <div class="overlay-content">
                <ul>
                  <li class="navitem"><a href="#" class="overlay_dropdown">Meer DOK &#x25BC;</a></li>
                    <div class="meerdok_dropdown hidden">
                      <a href="#">Gebruiken</a>
                      <a href="#">Keuken</a>
                      <a href="#">Sport</a>
                      <a href="#">Tank</a>
                    </div>
                  <li class="navitem"><a href="#">Blogs</a></li>
                  <li class="navitem"><a href="index.php?page=programma&amp;month=5">Programma</a></li>
                </ul>

                <div class="socialmedia">
                  <a href="#"><img src="assets/img/fb.png" alt=""></a>
                  <a href="#"><img src="assets/img/tw.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>

          <div class="width">
            <a href="index.php"><img src="assets/img/logo.png" alt="DOK"></a>
          </div>
          <div class="navcontainer">
            <nav class="width">
              <ul class="topnav">
                <li class="dropdown"><a href="#" class="dropbtn">Meer DOK</a>
                  <div class="dropdown-content">
                    <a href="#">Gebruiken</a>
                    <a href="#">Keuken</a>
                    <a href="#">Sport</a>
                    <a href="#">Tank</a>
                  </div>
                </li>
                <li><a href="#">Blogs</a></li>
                <li><a href="index.php?page=programma&amp;month=5">Programma</a></li>
              </ul>
              <form action="index.php">
                <input type="hidden" name="page" value="programma" />
                <input type="text" name="search">
              </form>
            </nav>
          </div>

        </header>
      <?php endif; ?>

      <?php echo $content; ?>

      <footer>
        <div class="sponsors width">
          <?php for ($i=1; $i <= 11; $i++):?>
            <img src="assets/img/sponsor<?php echo $i ?>-min.png" alt="sponsor">
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
    </div>

    <?php echo $js;?>
    </div>
  </body>
</html>
