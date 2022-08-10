<?php
$locale = 'pt_BR';
$lang = 'pt';
$domain = 'prismapar';
if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == 'pt') {
    $locale = 'pt_BR';
  } elseif ($lang == 'en') {
    $locale = 'en_US';
  } elseif ($lang == 'es') {
    $locale = 'es_MX';
  }
}
if (defined('LC_MESSAGES')) {
  setlocale(LC_MESSAGES, $locale); // Linux
  bindtextdomain($domain, "./locale");
} else {
  putenv("LC_ALL={$locale}"); // windows
  bindtextdomain($domain, ".\locale");
}

textdomain($domain);
bind_textdomain_codeset($domain, 'UTF-8');
?>
<!DOCTYPE html>
<html>

<head>
  <?php include("head.php"); ?>
</head>

<body>
  <!-- Header with Flags and Navbar -->
  <header class="header bg-white">
    <div class="col-lg-8 mx-auto">

      <div class="row">
        <div class="col">
          <ul class="lang_selector">
            <li><a href="/?lang=pt"> <img src="./assets/imgs/lang_pt.png"> </a></li>
            <li><a href="/?lang=es"> <img src="./assets/imgs/lang_es.png"> </a></li>
            <li><a href="/?lang=en"> <img src="./assets/imgs/lang_en.png"> </a></li>
          </ul>
        </div>
      </div>



      <nav class="navbar navbar-expand-lg navbar-light p-0 mb-4 pb-3"> <a class="navbar-brand col-lg-3 col-md-4 col-6 px-0" href="#"> <img src="./assets/imgs/logo.png" class="col-lg">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse col-lg ml-auto px-0 mt-3" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"> <a class="nav-link p-0" href="#istorico"> <?php echo _('HISTÓRICO'); ?> <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item ml-3"> <a class="nav-link p-0" href="#presenca"> <?php echo _('PRESENÇA LATAM'); ?> </a> </li>
            <li class="nav-item ml-3"> <a class="nav-link p-0" href="#equipe"> <?php echo _('EQUIPE'); ?> </a> </li>
            <li class="nav-item ml-3"> <a class="nav-link p-0" href="#o-que-fazemos"> <?php echo _('O QUE FAZEMOS'); ?> </a> </li>
            <li class="nav-item ml-3"> <a class="nav-link p-0" href="#cases"> <?php echo _('Casos'); ?> </a> </li>
            <li class="nav-item ml-3"> <a class="nav-link p-0" href="#contato"> <?php echo _('Contato'); ?> </a> </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <main class="main">
    <!-- Main Location Bannar -->
    <section class="location-banner" style="background-image: url(./assets/images/banner_1.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto pt-5">
        <div class="main-tag-bnr text-white py-5 my-3">
          <h1 class="main-tag-bnr-h mb-0"> <?php echo _('Assessoria Financeira'); ?> </h1>
          <p class="main-tag-bnr-p"> <?php echo _('América Latina'); ?> </p>
        </div>
        <div class="bottom-left text-white"> <?php echo _('Av. Paulista - São Paulo'); ?> </div>
      </div>
    </section>

    <!-- TimeLine -->
    <section id="historico" style="background-image: url(./assets/images/timeline.png); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="">
        <div class="col-lg-8 mx-auto pt-4 ">
          <h1 style="color:#0e3b6e;" class="mb-4"> <span style="font-weight: bolder;" class="text-o-color-4 timline-heading"> <?php echo _('20 anos de Experiência'); ?> </span><br><span class="text-o-color-4 timline-heading"> <?php echo _('em M&A'); ?><br><?php echo _('na América Latina'); ?> <br>
            </span>
          </h1>

          <!-- Timeline mobile NEW -->
          <?php include("timeline_mobile.php"); ?>
          <!-- Timeline desktop NEW -->
          <?php include("timeline_desktop.php"); ?>
        </div>


      </div>
    </section>

    <!-- Costa Location Bannar -->
    <section class="location-banner" style="background-image: url(./assets/images/banner_2.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto">
        <div class="bottom-left1 text-white"> <?php echo _('Estádio Nacional - Costa Rica'); ?> </div>
      </div>
    </section>
    <!-- Globe -->
    <section id="presenca" class="Globe-section" style="background-color: #404040;">
      <div class="col-lg-8 mx-auto">
        <div class="row leftinfo">
          <div class="col-lg-4 col-md-12 mx-auto">
            <div class="texto">
              <h1 class="text-o-color-3 text-white" style="font-weight: bolder;"> <?php echo _("PRESENÇA LATAM"); ?> </h1>
              <p class="text-o-color-4 text-white" style="font-weight: bolder">
                <?php echo _('Com sócios em 8 países, conectamos clientes nos principais mercados da América Latina.'); ?> </p>
              <img class="img_data" src="./assets/images/paises_<?php echo $lang; ?>.png" loading="lazy"> <br>
            </div>
          </div>
          <div class="col-lg">
            <?php include("glovo_mobile.php"); ?>

            <div id="chartdiv">
              <div>
                <?php include("mapasvg.php"); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Palacio Location Bannar -->
    <section class="location-banner" style="background-image: url(./assets/images/banner_3.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto">
        <div class="bottom-left1 text-white"> <?php echo _('Palácio de Bellas Artes - México'); ?> </div>
      </div>
    </section>

    <!-- Equipe Section -->
    <?php include("equipe.php"); ?>

    <!-- Astoria Location Bannar -->
    <section class="location-banner" style="background-image: url(./assets/images/banner_4.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto">
        <div class="bottom-left1 text-white"> <?php echo _('Astoria Rooftop - Bogotá'); ?> </div>
      </div>
    </section>

    <!-- O Que Fazemos -->
    <?php include("o_que_fazemos.php"); ?>

    <!-- Nova Location Bannar -->
    <section class="location-banner" style="background-image: url(./assets/images/banner_5.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto">
        <div class="bottom-left1 text-white"> <?php echo _('Nova York - World Trade Center Transportation Hub'); ?> </div>
      </div>
    </section>

    <!-- Cases -->
    <?php include("cases.php"); ?>


    <!-- Numbers -->
    <section id="numeros" class="num-sec py-3" style="background-image: url(./assets/images/bg_numbers.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto text-center py-5">
        <h1 class="txt-blu"> <?php echo _('Experiência'); ?> </h1>
        <div class="row mx-auto">
          <div class="col-lg col-md">
            <p class="display-counter">+120</p>
            <p class="num-label"> <?php echo _('Transações'); ?> </p>
          </div>
          <div class="col-lg col-md">
            <p style="line-height: 1; display: flex;    align-items: center;    justify-content: center;"> <span class="num-tag">+USD</span>
              <span class="display-counter">2</span>
              <span class="dsply-cntr">bi</span>
            </p>
            <p class="num-label"> <?php echo _('Valor Transacionado'); ?> </p>
          </div>
          <div class="col-lg col-md">
            <p class="display-counter">+10</p>
            <p class="num-label"> <?php echo _('Setores de Atuação'); ?> </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Praca Location Bannar -->
    <section class="location-banner" style="background-image: url(./assets/images/banner_6.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto">
        <div class="bottom-left1 text-white"> <?php echo _('Praça Lagos - Guayaquil, Equador'); ?> </div>
      </div>
    </section>

    <!-- Clients Carousel -->
    <?php include("clients.php"); ?>

    <!-- Madrid Location Bannar -->
    <section class="location-banner" style="background-image: url(./assets/images/banner_7.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto">
        <div class="bottom-left1 text-white"> <?php echo _('Madrid - Templo de Debod'); ?> </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <?php include("footer.php"); ?>

  <!-- JS Files link -->
  <!--<script src="./assets/js/MobileTimeLine.js"></script> 
-->
  <?php include("scripts.php"); ?>
</body>

</html>