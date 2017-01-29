<header class="header_standard">
  <div class="width">
    <a href="index.php"><img src="assets/img/logo.png" alt="DOK"></a>
  </div>
  <div class="navcontainer">
    <nav class="width">
      <ul>
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
      <input type="text" name="search">
    </nav>
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
            <a href="index.php?page=detail&amp;id=<?php echo $event['id'] ?>">meer info</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </article>
</section>
