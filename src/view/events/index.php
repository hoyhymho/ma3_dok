<header class="header_home">
  <div class="headercontent">
    <img src="assets/img/header_logo.png" alt="" class="logo_home">
    <h2>Werfplek voor verpozing &amp; creatieve manoeuvres</h2>
    <img src="assets/img/header_date.png" alt="" class="headerdate">
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
        <li><a href="index.php?page=programma">Programma</a></li>
      </ul>
      <input type="text" name="search">
    </nav>
  </div>
</header>

<section class="dokopent width">
  <article class="dokopent_content">
    <h3>DOK Opent</h3>
    <p>Vanaf 1 mei 2017 tot 25 september 2017 opent DOK haar deuren <span class="highlight">iedere zondag én feestdagen van 11u tot 22u</span>. Dit wordt de vaste afspraak. De DOKbewoners openen <span class="highlight">DOK ook op andere dagen</span> (meer info in de agenda). Op zondag kan je zowel terecht in de kantine, als in de speeltuin, het park (met het strand en de arena), de DOKbox, enz.</p>
  </article>
  <article class="dokopent_lijst">
    <ul>
      <li>Iedere zondag staat er vanaf 11u <span class="highlight">taart, koffie en gazet</span> voor u klaar in de kantine.</li>
      <li>Cosy Cozy zorgt tussen 14u en 19u voor <span class="highlight">meer dan gezellige dj’s</span>.</li>
      <li>Vanaf 31juli kan je weer iedere zondag komen grasduinen op de <span class="highlight">DOK(rommel)markt</span>, voorzien van eetstandjes.</li>
    </ul>
  </article>
</section>

<section class="dok2017">
  <article class="yellowbg">
    <div class="dok2017_content width">
      <img src="assets/img/splash_bewoners.png" alt="">
      <div>
        <h3>DOK 2017</h3>
        <p>Wat er gebeurt op DOK wordt bepaald door de DOKbewoners. Voor het nieuwe seizoen is DOK op zoek naar nieuwe DOKbewoners, residents, die DOK 2017 mee vorm en kleur willen geven met creatieve manoeuvres. Samen met de bewoners biedt DOK ruimte aan initiatieven op vlak van cultuur, kunst, sport, sociaal-cultureel, ecologie en welzijn.</p>
      </div>
    </div>
  </article>
</section>

<section class="dokinfo">
  <div class="longpaper_container">
    <article>
      <h3>DOK zoekt</h3>
      <p>DOK wil nadrukkelijk nieuwe ideëen, beginnende collectieven en projecten hosten. DOK staat open voor voorstellen door individuen, buurtbewoners, kunstenaars alsook die van collectieven of organisaties.</p>
    </article>
    <article>
      <h3>DOK biedt</h3>
      <p>Vanaf april tot eind september kan je werken en creeëren op DOK. Vanaf mei tot eind september kan je publieke activiteiten ontwikkelen. DOK zoekt samen met jou naar een kader (inhoudelijk en logisitiek) om je project te ontwikkelen en biedt haar netwerk aan. Een meerjarig traject behoort ook tot de mogelijkheden.</p>
    </article>
    <article class="seizoen">
      <h3>Seizoen 2017</h3>
      <ul>
        <li>Opening op 1 mei</li>
        <li>DOK opent zijn deuren ieder zondag van 11u tot 22u</li>
        <li>De DOKbewoners kunnen DOK ook openen op andere dagen</li>
        <li>DOK sluit altijd om 24u</li>
        <li>Slot van het seizoen is gepland op 25 september</li>
      </ul>
    </article>
    <div class="criteria">
      <h4>Criteria</h4>
      <ul>
        <li>Toegangelijkheid</li>
        <li>(artistieke) vernieuwing</li>
        <li>Ondersteuning bieden aan</li>
        <li>Een creatieve stedelijke dynamiek</li>
        <li>Experiment en ontmoeting</li>
      </ul>
    </div>
  </div>

</section>

<section class="nextevents">
  <article class="width">
    <h3>Opkomende events</h3>

    <?php foreach ($nextEvents as $event): ?>

      <div class="eventcontainer">
        <div class="eventimg">

        </div>
        <div class="eventdate">
          <p class="eventdag">20</p>
          <p class="eventmaand">Sept</p>
        </div>
        <div class="eventname">
          <h4><?php echo $event['title']; ?></h4>
          <p><?php echo $event['start']; ?></p>
          <a href="#">meer info</a>
        </div>
      </div>
    <?php endforeach; ?>
  </article>
</section>

<section class="nieuwsbrief width">
  <img src="assets/img/splash_mail.png" alt="">
  <article>
    <h3>blijf op de hoogte</h3>
    <div class="nieuwsbrief_container">
      <p>Word verwittigd met het laatste nieuws en concerten</p>
      <form action="index.html" method="post" class="subscribe-form">
        <input type="email" name="email" class="subscribe-input" placeholder="Email address">
        <button type="submit" class="subscribe-submit">Inschrijven</button>
      </form>
    </div>
  </article>
</section>
