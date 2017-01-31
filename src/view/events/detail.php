<section>
  <div class="detail_header">
    <h1 class="headertitle width"><?php echo $event['title']; ?></h1>
  </div>
  <div class="detail_flex width">
    <article class="detail_about">
      <h3>About</h3>
      <p><?php echo $event['description'] ?></p>
    </article>
    <article class="detail_sidebar">
      <h4>info</h4>
      <div>
        <ul>
          <li class="date"><?php echo date('d/m/y', strtotime($event['start'])); ?></li>
          <!-- <?php var_dump($event); ?> -->
          <li class="time">van<?php echo date('H:i', strtotime($event['start'])); ?> tot <?php echo date('H:i', strtotime($event['end'])); ?> </li>
          <li class="price">&euro;<?php echo $event['price'][0] ?></li>
          <li class="location">
            <?php echo $event['locations'][0]['name'] ?>

          </li>
          <li class="organiser"><?php echo $event['organiser'] ?></li>
        </ul>
        <a href="#">Bestel ticket</a>
      </div>
    </article>
  </div>
</section>

<section class="detail_gallery width">
  <h3>gallery</h3> <br />
  <img src="assets/img/400/<?php echo $event['image'];?>" alt="">
</section>

<section class="detail_organiser width">
  <h3>meer events van <?php echo $event['organiser'] ?></h3>
  <div class="detail_event_container">
    <!-- <?php var_dump($organiserEvents); ?> -->
    <?php foreach ($organiserEvents as $organiserEvent): ?>
      <a href="#">
        <article class="organiserevent">
          <img src="assets/img/400/<?php echo $organiserEvent['image'] ?>" alt="">
          <div>
            <h4><?php echo $organiserEvent['title']; ?></h4>
            <p><?php echo date('d/m/y', strtotime($event['start']));?></p>
            <a href="#" class="meerinfo">meer info</a>
          </div>
        </article>
      </a>
    <?php endforeach; ?>
  </div>
</section>
