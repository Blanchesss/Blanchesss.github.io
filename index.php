<?php
// Vérifiez si la session n'a pas été démarrée, puis démarrez-la
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/config.php';
?>


<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/header.inc.php';
?>

    <!-- carrousel  -->
    <!-- Ajoutez ceci dans la section <head> de votre HTML -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Structure du carrousel dans le corps de votre HTML -->
<div class="swiper-container">
  <!-- Wrapper pour les diapositives -->
  <div class="swiper-wrapper">
    <!-- Chaque diapositive -->
    <div class="swiper-slide"><img src="/image/U76fMj.png" alt="Description"></div>
    <div class="swiper-slide"><img src="/image/superpromo.jfif" alt="Description"></div>
    <div class="swiper-slide"><img src="/image/promo.jfif" alt="Description"></div>
    <div class="swiper-slide"><img src="/image/web-images.avif" alt="Description"></div>
    <div class="swiper-slide"><img src="/image/web-images.avif" alt="Description"></div>
    <div class="swiper-slide"><img src="/image/web-images.avif" alt="Description"></div>
    <div class="swiper-slide"><img src="/image/web-images.avif" alt="Description"></div>
    <div class="swiper-slide"><img src="/image/web-images.avif" alt="Description"></div>
    <!-- Ajoutez autant de diapositives que vous le souhaitez -->
  </div>
  
  <!-- Si vous voulez des flèches de navigation -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- Si vous voulez une pagination -->
  <div class="swiper-pagination"></div>
</div>

<!-- Ajoutez ceci avant la fermeture du body </body> -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="/javascript/script.js"></script>


<!-- Fin carrousel  -->
    
    <!-- Header -->
    <header>
      <h1>Le commerce le plus raisonnable</h1>
      <button>Naviguer <i class="fas fa-paper-plane"></i></button>
    </header>
    <!-- Fin du header -->

    <!-- Section principale -->
    <section class="main">
      <!-- Toutes les cartes -->

      <div class="cards">
        <div class="card">
            <a href="/Produit/produit?id=3" class="card-link">
                <img src="https://cdn.britannica.com/58/129958-050-C3FE2DD2/Adolf-Hitler-1933.jpg" alt="Short Nike" />
                <div class="card-header">
                    <h4 class="title">Short Nike</h4>
                    <h4 class="price">199$</h4>
                </div>
                <div class="card-body">
                    <p>Short moulant pour homme</p>
                </div>
            </a>
        </div>
        <div class="card">
          <a href="/Produit/produit?id=1" class="card-link">
          <img
            src="https://img01.ztat.net/article/spp-media-p1/d209a285f9504af5b43a5910ca4ef773/325078b4f9134ccdbeea69ef43c924fe.jpg?imwidth=1800&filter=packshot"
          />
          <div class="card-header">
            <h4 class="title">Paire de chaussures stylées</h4>
            <h4 class="price">69$</h4>
          </div>
          <div class="card-body">
            <p>Des paires de chaussures stylées pour femme</p>
          </div>
          </a>
        </div>

        <div class="card">
          <a href="/Produit/produit?id=2" class="card-link">
          <img
            src="https://img01.ztat.net/article/spp-media-p1/06061272d3b946928723e0ead5672803/8419e6380e2440c2a8e0b9dd8f46bc19.jpg?imwidth=762"
          />
          <div class="card-header">
            <h4 class="title">Short pour courir</h4>
            <h4 class="price">39$</h4>
          </div>
          <div class="card-body">
            <p>Sport pour courir en plain air pour homme</p>
          </div>
        </div>
      </a>
      </div>
      <!-- Fin de toutes les cartes -->

      <!-- Video de presentation -->
      <div class="video">
        <iframe
          src="https://www.youtube.com/embed/LkLe-QtDM5w"
          allowfullscreen
        ></iframe>
      </div>
      <!-- Fin de la video de presentation -->
    </section>
    <!-- Fin de la section principale -->

    <!-- Pied de page -->
    <?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.inc.php';
?>
 <!-- Fin du pied de cccpage -->