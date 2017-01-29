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
  <div class="detail_header">
    <h1 class="width"><?php echo $event['title']; ?></h1>
  </div>
</header>

<section>
  <article class="detail_about">
    <h3>About</h3>
    <p><?php echo $event['description'] ?></p>
  </article>
  <article class="detail_sidebar">
    <h4>info</h4>
    <ul>
      <li><?php echo date('d/m/y', strtotime($event['start'])); ?></li>
      <li>van<?php echo date('H:i', strtotime($event['start'])); ?> tot <?php echo date('H:i', strtotime($event['end'])); ?> </li>
      <li><?php echo $event['price'] ?></li>
      <li><?php echo $event['location_name'] ?></li>
      <li><?php echo $event['organiser_name'] ?></li>
    </ul>
    <a href="#">Bestel ticket</a>
  </article>
</section>

<section>
  <h3>gallery</h3>
  <img src="assets/img/400/<?php echo $event['id'];?>.jpg" alt="">
</section>

<section>
  <h3>meer events van <?php echo $event['organiser_name'] ?></h3>

</section>
