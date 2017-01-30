<?php $maanden = array("Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December"); ?>

<header>
  <div class="sidebar_mobile">
    <div class="sidebar_mobile_top">
      <h4 class="width">Programma</h4>
      <p class="width">
        <?php
          if (!empty($_GET['month'])) {
            echo "Events in ";
            echo $maanden[$_GET['month']-1];
            echo " 2017";
          }elseif (!empty($_GET['search'])) {
            echo "zoekopdrachten voor '";
            echo $_GET['search'];
            echo "'";
          }
        ?>
      </p>
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
      <h3>
        <?php
          if (!empty($_GET['month'])) {
            echo "events in ";
            echo $maanden[$_GET['month']-1];
          }elseif (!empty($_GET['search'])) {
            echo "zoekopdrachten voor '";
            echo $_GET['search'];
            echo "'";
          }
        ?>
      </h3>
      <?php foreach ($events as $event): ?>
        <div class="eventcontainer">
          <img src="assets/img/400/<?php echo $event['organiser_id'] ?>.jpg" alt="event" class="eventimage">
          <div class="eventdate">
            <p class="eventdag"><?php echo date('d', strtotime($event['start'])); ?></p>
            <p class="eventmaand"><?php echo date('M', strtotime($event['start'])); ?></p>
          </div>
          <div class="eventname">
            <h4><?php echo $event['title']; ?></h4>
            <p><?php echo date("j/n/Y", strtotime($event['start'])); ?></p>
            <a href="index.php?page=detail&amp;id=<?php echo $event['id'] ?> " class="meerinfo">meer info</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </article>
</section>
