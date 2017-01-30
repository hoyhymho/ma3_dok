<header class="header_standard">
  <div class="width">
    <span class="burger" onclick="openNav()">&#9776;</span>
  </div>

  <div id="myNav" class="overlay">
    <div class="width">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <ul>
          <li class="navitem"><a href="#">Meer DOK &#x25BC;</a></li>
            <div class="dropdown">
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
      <form>
        <input type="text" name="search">
      </form>
    </nav>
  </div>
  <div class="sidebar_mobile">
    <div class="sidebar_mobile_top">
      <h4 class="width">Programma</h4>
      <p class="width"><?php echo date('F', strtotime($_GET['month'])); ?> 2017</p>
    </div>
    <div class="sidebar_mobile_bot">
      <ul class="width">
        <li><a href="index.php?page=programma&amp;month=5">Mei</a></li>
        <li><a href="index.php?page=programma&amp;month=6">Jun</a></li>
        <li><a href="index.php?page=programma&amp;month=7">Jul</a></li>
        <li><a href="index.php?page=programma&amp;month=8">Aug</a></li>
        <li><a href="index.php?page=programma&amp;month=9">Sep</a></li>
      </ul>
    </div>

  </div>
</header>

<section class="programma width">
  <h3>Opkomende events</h3>
  <article class="programma_container">
    <div class="sidebar">
      <h4>Wanneer</h4>
      <p>2017</p>
      <ul>
        <li><a href="index.php?page=programma&amp;month=5">Mei</a></li>
        <li><a href="index.php?page=programma&amp;month=6">Juni</a></li>
        <li><a href="index.php?page=programma&amp;month=7">Juli</a></li>
        <li><a href="index.php?page=programma&amp;month=8">Augustus</a></li>
        <li><a href="index.php?page=programma&amp;month=9">September</a></li>
      </ul>
    </div>
    <div class="programma_events">
      <h3><?php echo date('F', strtotime($_GET['month'])); ?></h3>
      <?php foreach ($monthlyEvents as $event): ?>
        <div class="eventcontainer">
          <img src="assets/img/400/<?php echo $event['organiser_id'] ?>.jpg" alt="event" class="eventimage">
          <div class="eventdate">
            <p class="eventdag"><?php echo date('d', strtotime($event['start'])); ?></p>
            <p class="eventmaand"><?php echo date('M', strtotime($event['start'])); ?></p>
          </div>
          <div class="eventname">
            <h4><?php echo $event['title']; ?></h4>
            <p><?php echo $event['start']; ?></p>
            <a href="index.php?page=detail&amp;id=<?php echo $event['id'] ?> " class="meerinfo">meer info</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </article>
</section>
