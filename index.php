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
  <!-- Meta -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Home | Prismapar">
  <meta property="og:site_name" content="Prismapar">
  <meta property="og:url" content="http://prismapar.popsolutions.co/">
  <meta property="og:image" content="/assets/images/logo.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Home | Prismapar">
  <meta name="twitter:image" content="/assets/images/logo.png">

  <!-- External Files Linking -->
  <link rel="stylesheet" href="./assets/css/index.css">
  <link rel="stylesheet" href="./assets/css/media.css">
  <link rel="stylesheet" href="./assets/css/globe.css">

  <!-- Title of the page -->
  <title>Home | Prismapar</title>
  <!-- Favicon -->
  <link type="image/x-icon" rel="shortcut icon" href="./assets/images/favicon.ico">

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Bootstrap JS CDN -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
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
            <li class="nav-item active"> <a class="nav-link p-0" href="#istorico"> <?php echo _('HISTÓRICO');?> <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item ml-3"> <a class="nav-link p-0" href="#presenca"> <?php echo _('PRESENÇA LATAM');?> </a> </li>
            <li class="nav-item ml-3"> <a class="nav-link p-0" href="#equipe"> <?php echo _('EQUIPE');?> </a> </li>
            <li class="nav-item ml-3"> <a class="nav-link p-0" href="#o-que-fazemos"> <?php echo _('O QUE FAZEMOS');?> </a> </li>
            <li class="nav-item ml-3"> <a class="nav-link p-0" href="#cases"> <?php echo _('Experiência Prismapar');?> </a> </li>
            <li class="nav-item ml-3"> <a class="nav-link p-0" href="#contato"> <?php echo _('Contato');?> </a> </li>
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
          <h1 class="main-tag-bnr-h mb-0"> <?php echo _('Assessoria Financeira');?> </h1>
          <p class="main-tag-bnr-p"> <?php echo _('América Latina');?> </p>
        </div>
        <div class="bottom-left text-white"> <?php echo _('Av. Paulista - São Paulo');?> </div>
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
          <div class="row d-md-none d-block timeline_mobile">

            <div class="owl-carousel owl-carousel2 owl-theme owl-loaded owl-drag">
              <div class="">
                <p class="t_m_year">2002 - 2011<img class="logo_time" style="margin-left: 15px; max-width: 100px" src="./assets/images/01.png"> </p>
                <h4 class="timeline-dtl-name"> <?php echo _('Início');?> </h4>
                <p> <?php echo _('Renato Souza Neto e Paulo Renato Souza, ex-ministro da Educação do Brasil, fundam a Prismapar em 2002 com foco em M&A no setor de Educação.');?> <br>
                </p>
                <div class=" pt-3 flags"><img src="./assets/images/bandeira-brasil.jpg"> </div>
              </div>

              <div class="">
                <p class="t_m_year">2012 - 2018</p>
                <h4 class="timeline-dtl-name"> <?php echo _('Expansão Regional');?> </h4>
                <p> <?php echo _('Início do processo de internacionalização na América Latina com a abertura dos escritórios na Costa Rica (2012), Colômbia (2015) e Equador (2018).');?> </p>
                <div class=" d-flex pt-3 flags">
                  <img src="./assets/images/bandeira-brasil.jpg">
                  <img src="./assets/images/bandeira-costa_rica.jpg" class="ml-2">
                  <img src="./assets/images/bandeira-colombia.jpg" class="ml-2"> <img src="./assets/images/bandeira-equador.jpg" class="ml-2">
                </div>
              </div>

              <div>
                <p class="t_m_year">2019 - 2022</p>
                <h4 class="timeline-dtl-name"> <?php echo _('Expansão Setorial');?> </h4>
                <p> <?php echo _('Com a incorporação de novos sócios e colaboradores, iniciamos nossa diversificação setorial, com processos e transações em setores diversos.');?> </p>
                <div class=" d-flex pt-3 flags">
                  <img src="./assets/images/bandeira-brasil.jpg">
                  <img src="./assets/images/bandeira-costa_rica.jpg" class="ml-2"> <img src="./assets/images/bandeira-colombia.jpg" class="ml-2">
                  <img src="./assets/images/bandeira-equador.jpg" class="ml-2">
                  <img src="./assets/images/bandeira-espanha.jpg" class="ml-2">
                  <img src="./assets/images/bandeira-mexico.jpg" class="ml-2">
                  <img src="./assets/images/bandeira-eua.jpg" class="ml-2">
                </div>
              </div>
            </div>
          </div>
          <!-- Timeline desktop NEW -->
          <div class="hidden-xs d-md-block d-none pb-4" style="position: relative">
            <div class="row">
              <div class="col-4 d-flex align-content-between flex-wrap">
                <div class="row timeline_txt">
                  <div class="col"> <img class="logo_time" src="./assets/images/01.png">
                    <h5 class="tim-cntnt-h mt-2 py-1">Prismapar</h5>
                    <hr class="line-bandeira my-2">
                    <p class="pt-1"> <?php echo _('Renato Souza Neto e Paulo Renato Souza, ex-ministro da Educação do Brasil, fundam a Prismapar em 2002 com o objetivo de oferecer consultoria especializada em M&A no setor de Educação no Brasil.');?> </p>
                  </div>
                </div>
                <div class="row timeline_flags">
                  <div class="col pr-0 text-left"> <img src="./assets/imgs/bandeira-2002.png">
                    <hr class="line-bandeira">
                    <p>2002</p>
                  </div>
                  <div class="col px-0 text-center"> <img src="./assets/imgs/bandeira-2012.png" class="m-2012">
                    <hr class="line-bandeira">
                    <p class="m-2012">2012</p>
                  </div>
                </div>
              </div>
              <div class="col-4 d-flex align-content-between flex-wrap">
                <div class="row timeline_txt">
                  <div class="col ">
                    <h5 class="tim-cntnt-h pb-1"> <?php echo _('Expansão regional');?> </h5>
                    <hr class="line-bandeira my-2">
                    <p class="pt-1"> <?php echo _('Abertura do escritório na Costa Rica em 2012 e ampliação para Colômbia em 2015, com a integração de Marcelo Burbano como sócio-diretor baseado em Bogotá. Esse movimento é reforçado em 2018 com a abertura do escritório de Guayaquil, no Equador.');?> </p>
                  </div>
                </div>
                <div class="row timeline_flags">
                  <div class="col px-0 text-center"> <img src="./assets/imgs/bandeira-2015.png" class="m-2015">
                    <hr class="line-bandeira">
                    <p class="m-2015">2015</p>
                  </div>
                  <div class="col px-0 text-center"> <img src="./assets/imgs/bandeira-2018.png" class="m-2018">
                    <hr class="line-bandeira">
                    <p class="m-2018">2018</p>
                  </div>
                </div>
              </div>
              <div class="col-4 d-flex align-content-between flex-wrap">
                <div class="row timeline_txt" style="margin-top: -60px">
                  <div class="col ">
                    <h5 class="tim-cntnt-h pb-1"><?php echo _('Expansão setorial'); ?></h5>
                    <hr class="line-bandeira my-2">
                    <p class="pt-1"> <?php echo _('A partir de 2019, com a incorporação de novos sócios e colaboradores, continuamos nossa expansão regional e iniciamos nosso processo de diversificação setorial, com importantes processos e transações em setores diversos.');?> </p>
                  </div>
                </div>
                <div class="row timeline_flags">
                  <div class="col px-0 text-center"> <img src="./assets/imgs/bandeira-2019.png" class="m-2019">
                    <hr class="line-bandeira">
                    <p class="m-2019">2019</p>
                  </div>
                  <div class="col pl-0 text-right"> <img src="./assets/imgs/bandeira-2020.png">
                    <hr class="line-bandeira">
                    <p>2020</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row"> <img class="linhadiagonal" src="./assets/imgs/line.svg"> </div>
          </div>
        </div>


      </div>
    </section>

    <!-- Costa Location Bannar -->
    <section class="location-banner" style="background-image: url(./assets/images/banner_2.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto">
        <div class="bottom-left1 text-white"> <?php echo _('Estádio Nacional - Costa Rica');?> </div>
      </div>
    </section>
    <!-- Globe -->
    <section id="presenca" class="Globe-section" style="background-color: #404040;">
      <div class="col-lg-8 mx-auto">
        <div class="row leftinfo">
          <div class="col-lg-4 col-md-12 mx-auto">
            <div class="texto">
            <h1 class="text-o-color-3 text-white" style="font-weight: bolder;"> <?php echo _("PRESENÇA LATAM");?> </h1>
              <p class="text-o-color-4 text-white" style="font-weight: bolder">
                <?php echo _('Com sócios em 7 países, conectamos clientes nos principais mercados da América Latina.');?> </p>
              <img class="img_data" src="./assets/images/paises_<?php echo $lang; ?>.png" loading="lazy"> <br>
            </div>
          </div>
          <div class="col-lg">
            <div class="globo_mobile">
              <div class="row">
                <div class="owl-carousel owl-carousel3 owl-theme owl-loaded owl-drag">
                  <?php
                  $slides = array();
                  $slides[1] =
                    array('pais' => 'brasil', 'nom' => 'Bruno Maringoni', 'cargo' => 'Sócio, São Paulo', 'mail' => 'bruno.maringoni@prismapar.com');
                  $slides[2] =
                    array('pais' => 'costa rica', 'nom' => 'Renato Souza Neto', 'cargo' => 'Sócio Diretor, San José', 'mail' => 'renato.souza@prismapar.com.br');
                  $slides[3] =
                    array('pais' => 'méxico', 'nom' => 'Alejandra Solis', 'cargo' => 'Sócia, Cidade do México', 'mail' => 'alejandra.solis@prismapar.com');
                  $slides[4] =
                    array('pais' => 'colombia', 'nom' => 'Marcelo Burbano', 'cargo' => 'Sócio Diretor, Bogotá', 'mail' => 'marcelo.burbano@prismapar.com');
                  $slides[5] =
                    array('pais' => 'equador', 'nom' => 'Oliver Klopfstein', 'cargo' => 'Sócio, Guaiaquil', 'mail' => 'oliver.klopfstein@prismapar.com');
                  $slides[6] =
                    array('pais' => 'espanha', 'nom' => 'Andrés Cardó', 'cargo' => 'Consultor Sênior, Madrid', 'mail' => 'spain@prismapar.com');
                  $slides[7] =
                    array('pais' => 'eua', 'nom' => 'Hilario Nuño', 'cargo' => 'Consultor Sênior, New York', 'mail' => 'usa@prismapar.com');
                  foreach ($slides as $data) {
                    $pais = $data['pais'];
                    $paisn = ucwords($pais);
                    $paisl = str_replace(array(" ", "ñ", "é", "ô"), array("_", "n", "e", "o"), $pais);
                  ?>
                    <div class="globo-item">
                      <div class="gimage"><img class="glofo" src="assets/imgs/globo_mobile/<?php echo $paisl; ?>.jpg" alt="<?php echo $paisn; ?>"></div>
                      <div class="item-glovo-mobile">
                        <!--<img class="glarrow" src="assets/imgs/globo_mobile/arrow.png">-->
                        <div class="row">
                          <div class="col-8">
                            <div class="pais"><?php echo $paisn; ?></div>
                            <div class="sepa">&nbsp;</div>
                            <div class="nombre"><?php echo $data['nom']; ?></div>
                            <div class="cargo"><?php echo $data['cargo']; ?></div>
                            <!--<div class="mail"><?php //echo $data['mail']; 
                                                  ?></div>-->
                          </div>
                          <div class="col-4"><img src="/fotos/<?php echo $paisl; ?>.png"></div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>

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
        <div class="bottom-left1 text-white"> <?php echo _('Palácio de Bellas Artes - México');?> </div>
      </div>
    </section>

    <!-- Equipe Section -->
    <section id="equipe" class="eqipe-sec py-5">
      <div class="col-lg-8 mx-auto text-center">
        <h1 class="text-white"> <?php echo _('Equipe'); ?> </h1>
        <div class="col-10 mx-auto my-5">
          <p class="text-white"> <?php echo _('Somos profissionais com ampla experiência em planejamento estratégico e financeiro, com passagem pelos maiores bancos e organizações de consultoria estratégica do mundo. Nossa expertise garante um profundo conhecimento sobre os mercados da América Latina e conexões dentro de países-chave para a região, assegurando atendimento personalizado e assertivo para nossos clientes.'); ?> </p>
        </div>
        <div class="viewed bg-transparent" style="position: relative">
          <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i> </div>
          <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i> </div>
          <div class="bbb_viewed_slider_container">
            <div class="owl-carousel owl-theme bbb_viewed_slider">
              <div class="owl-item">
                <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center" data-toggle="modal" data-target="#Modal-1"> <img src="./assets/images/1.Renato@3x.png">
                  <h2 class="equipe_img_nme1 text-white">Renato Souza</h2>
                  <!--<p class="equipe_img_tag1 text-white mb-0"> <?php //echo _('Sócio');?>- </p>-->
                  <p class="equipe_img_tag2 text-white mb-0"> <?php echo _('Sócio Diretor');?> </p>
                </div>
              </div>
              <div class="owl-item">
                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center" data-toggle="modal" data-target="#Modal-2"> <img src="./assets/images/2.Marcelo@3x.png">
                  <h2 class="equipe_img_nme2 text-white">Marcelo Burbano</h2>
                  <!--<p class="equipe_img_tag1 text-white mb-0"> <?php //echo _('Sócio');?>- </p>-->
                  <p class="equipe_img_tag2 text-white mb-0"> <?php echo _('Sócio Diretor');?> </p>
                </div>
              </div>
              <div class="owl-item">
                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center" data-toggle="modal" data-target="#Modal-3"> <img src="./assets/images/3.Oliver@3x.png">
                  <h2 class="equipe_img_nme3 text-white">Oliver Klopfstein</h2>
                  <p class="equipe_img_tag1 text-white mb-0"></p>
                  <p class="equipe_img_tag2 text-white mb-0"> <?php echo _('Sócio');?> </p>
                </div>
              </div>
              <div class="owl-item">
                <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center" data-toggle="modal" data-target="#Modal-4"> <img src="./assets/images/4.Bruno@3x.png">
                  <h2 class="equipe_img_nme4 text-white">Bruno Maringoni</h2>
                  <p class="equipe_img_tag1 text-white mb-0"></p>
                  <p class="equipe_img_tag2 text-white mb-0"> <?php echo _('Sócio');?> </p>
                </div>
              </div>
              <div class="owl-item">
                <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center" data-toggle="modal" data-target="#Modal-5"> <img src="./assets/images/5.Alejandra@3x.png">
                  <h2 class="equipe_img_nme5 text-white">Alejandra Solis</h2>
                  <p class="equipe_img_tag1 text-white mb-0"></p>
                  <p class="equipe_img_tag2 text-white mb-0"> <?php echo _('Sócia');?> </p>
                </div>
              </div>
              <div class="owl-item">
                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center" data-toggle="modal" data-target="#Modal-6"> <img src="./assets/images/6.Ana@3x.png">
                  <h2 class="equipe_img_nme6 text-white">Ana Menezes</h2>
                  <p class="equipe_img_tag1 text-white mb-0"></p>
                  <p class="equipe_img_tag2 text-white mb-0"> <?php echo _('Associate');?> </p>
                </div>
              </div>
              <div class="owl-item">
                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center" data-toggle="modal" data-target="#Modal-7"> <img src="./assets/images/8.Andres@3x.png">
                  <h2 class="equipe_img_nme7 text-white">Andrés Cardó</h2>
                  <!--<p class="equipe_img_tag1 text-white text-left mb-0"> <?php //echo _('Sócio');?> &nbsp; &nbsp;
                    &nbsp;</p>-->
                  <p class="equipe_img_tag2 text-white mb-0"> <?php echo _('Sócio Consultor');?> </p>
                </div>
              </div>
              <div class="owl-item">
                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center" data-toggle="modal" data-target="#Modal-8"> <img src="./assets/images/10.Hilario@3x.png">
                  <h2 class="equipe_img_nme8 text-white">Hilario Nuño</h2>
                  <!--<p class="equipe_img_tag1 text-white text-left mb-0"> <?php //echo _('Sócio');?> &nbsp; &nbsp;
                    &nbsp;</p>-->
                  <p class="equipe_img_tag2 text-white mb-0"> <?php echo _('Sócio Consultor');?> </p>
                </div>
              </div>
              <div class="owl-item">
                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center" data-toggle="modal" data-target="#Modal-9"> <img src="./assets/images/11.Daniel@3x.png">
                  <h2 class="equipe_img_nme8 text-white">Daniel Villela </h2>
                  <!--<p class="equipe_img_tag1 text-white text-left mb-0"> <?php //echo _('Sócio');?> &nbsp; &nbsp;
                    &nbsp;</p>-->
                  <p class="equipe_img_tag2 text-white mb-0"> <?php echo _('Sócio Consultor');?> </p>
                </div>
              </div>
              <div class="owl-item">
                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center" data-toggle="modal" data-target="#Modal-10"> <img src="./assets/images/12.Nicolas@3x.png">
                  <h2 class="equipe_img_nme8 text-white">Nicolas Novoa </h2>
                  <p class="equipe_img_tag1 text-white mb-0">  &nbsp; &nbsp; &nbsp; </p>
                  <p class="equipe_img_tag2 text-white mb-0"> <?php echo _('Analista');?> </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal One -->
          <div class="modal fade" id="Modal-1" tabindex="-1" role="dialog" aria-labelledby="Modal-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                <div class="modal-body text-white">
                  <div class="container-fluid ">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="modal-nome">
                          <h3>Renato Souza Neto</h3>
                          <hr>
                        </div>
                        <div class="modal-cargo ">
                          <h5> <?php echo _('Sócio Diretor');?> </h5>
                        </div>
                        <div class="modal-detalle "> <?php echo _('Renato é o idealizador e sócio-fundador da Prismapar. Graduado em Economia pela Universidade George Washington, dos EUA, e com MBA pela INSEAD, da França, tem ampla experiência nas áreas de Fusões e Aquisições, Mercado de Capitais e Relacionamento com Clientes Corporativos, com passagem por grandes organizações mundiais, tais como Banco J.P. Morgan e Egon Zehnder. Baseado em San José, na Costa Rica atualmente lidera o escritório da Prismapar na Costa Rica, cobrindo toda a região da América Central e do Caribe.');?> </div>
                        <div class="row modal-redes">
                          <div class="col-8 contato-modal">
                            <a href="mailto:renato.souza@prismapar.com.br" class="text-white"><i class="bi-envelope-fill" style="font-size: 18px;"></i> renato.souza@prismapar.com.br</a>
                          </div>
                          <div class="col-4 contato-modal"> <a href="https://www.linkedin.com/in/renato-souza-neto-9135574/" target="_blank" class="text-white"> <img class="logo-linkedin" src="./assets/imgs/logo_linkedin.png" target="_blank"></a> </div>
                        </div>
                      </div>
                      <div class="col-sm-4 foto-modal f_equipe-1 px-0"> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal 2 -->
          <div class="modal fade" id="Modal-2" tabindex="-1" role="dialog" aria-labelledby="Modal-2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                <div class="modal-body text-white">
                  <div class="container-fluid ">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="modal-nome">
                          <h3>Marcelo Burbano</h3>
                          <hr>
                        </div>
                        <div class="modal-cargo ">
                          <h5> <?php echo _('Sócio Diretor');?> </h5>
                        </div>
                        <div class="modal-detalle "> <?php echo _('Marcelo é sócio-fundador da Prismapar. Possui graduação em Engenharia pela Universidade de Los Andes e em Administração pela Wharton School (UPENN), da Universidade da Pensilvânia, além de MBA pela renomada Universidade de Harvard. Iniciou sua carreira na área de Fusões e Aquisições (M&A) do Deutsche Bank, em Nova York. Também atuou na assessoria de negócios familiares Violy McCausland e foi Diretor Sênior e CFO da Alquería, maior companhia de lácteos da Colômbia. Apaixonado por tecnologia, Marcelo é um dos fundadores da startup INNCUBATED, a primeira incubadora com foco em Educação da América Latina. Atualmente, ele lidera os escritórios da Prismapar na Colômbia e Região Andina.');?> </div>
                        <div class="row modal-redes">
                          <div class="col-8 contato-modal">
                            <a href="mailto:marcelo.burbano@prismapar.com" class="text-white"><i class="bi-envelope-fill" style="font-size: 18px;"></i> marcelo.burbano@prismapar.com</a>
                          </div>
                          <div class="col-4 contato-modal"> <a href="https://www.linkedin.com/in/marceloburbano/" target="_blank" class="text-white"> <img class="logo-linkedin" src="./assets/imgs/logo_linkedin.png" target="_blank"></a> </div>
                        </div>
                      </div>
                      <div class="col-sm-4 foto-modal f_equipe-2 px-0"> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal 3 -->
          <div class="modal fade" id="Modal-3" tabindex="-1" role="dialog" aria-labelledby="Modal-3" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                <div class="modal-body text-white">
                  <div class="container-fluid ">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="modal-nome">
                          <h3>Oliver Klopfstein</h3>
                          <hr>
                        </div>
                        <div class="modal-cargo ">
                          <h5> <?php echo _('Sócio');?> </h5>
                        </div>
                        <div class="modal-detalle "> <?php echo _('Oliver é sócio da Prismapar. Formado em Engenharia de Gestão pela Worcester Polytechnic Institute e com MBA pela Babson College, de Massachusetts, Oliver iniciou sua carreira na área de Planejamento Estratégico da Siemens Corporation, em Nova York. Durante sua carreira, ele foi sócio do Grupo Spurrier, empresa líder do setor de consultoria no Equador. Neste período, realizou análises de estudo de concorrência, setoriais, econômicos e de mercado para empresas nacionais e multinacionais, instituições públicas e Organizações Não-governamentais que buscavam posicionar-se no mercado e diversificar seus investimentos. Atualmente, Oliver lidera o escritório da Prismapar no Equador.');?> </div>
                        <div class="row modal-redes">
                          <div class="col-8 contato-modal">
                            <a href="mailto:oliver.klopfstein@prismapar.com" class="text-white"><i class="bi-envelope-fill" style="font-size: 18px;"></i>
                              oliver.klopfstein@prismapar.com</a>
                          </div>
                          <div class="col-4 contato-modal"> <a href="https://www.linkedin.com/in/oliverklopfstein/" target="_blank" class="text-white"> <img class="logo-linkedin" src="./assets/imgs/logo_linkedin.png" target="_blank"></a> </div>
                        </div>
                      </div>
                      <div class="col-sm-4 foto-modal f_equipe-3 px-0"> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal 4 -->
          <div class="modal fade" id="Modal-4" tabindex="-1" role="dialog" aria-labelledby="Modal-4" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                <div class="modal-body text-white">
                  <div class="container-fluid ">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="modal-nome">
                          <h3>Bruno Croppo Maringoni</h3>
                          <hr>
                        </div>
                        <div class="modal-cargo ">
                          <h5> <?php echo _('Sócio');?> </h5>
                        </div>
                        <div class="modal-detalle "> <?php echo _('Bruno é sócio da Prismapar. Graduou-se em Administração pela Faculdade de Economia, Administração e Contabilidade (FEA) da Universidade de São Paulo (USP). Em sua trajetória profissional, Bruno foi Managing Partner na BRN Finance, período em que teve a oportunidade de assessorar acionistas e empresas do Brasil de variados setores. Também fez parte do grupo de Fusões e Aquisições do Banco Rabobank, atuando nos escritórios de São Paulo e, posteriormente, de Nova York. Além disso, Bruno também foi consultor em projetos de Fusões e Aquisições, Planejamento Estratégico, Fairness Opinions e Captação de Recursos na Aggrego Consultores. Antes de integrar a equipe da Prismapar, Bruno participou da fundação da plataforma marketplace Prova.lá. No momento, Bruno lidera o escritório da Prismapar no Brasil.');?>
                        </div>
                        <div class="row modal-redes">
                          <div class="col-8 contato-modal">
                            <a href="mailto:bruno.maringoni@prismapar.com" class="text-white"><i class="bi-envelope-fill" style="font-size: 18px;"></i> bruno.maringoni@prismapar.com</a>
                          </div>
                          <div class="col-4 contato-modal"> <a href="https://cr.linkedin.com/in/brunocroppomaringoni/" target="_blank" class="text-white"> <img class="logo-linkedin" src="./assets/imgs/logo_linkedin.png" target="_blank"></a> </div>
                        </div>
                      </div>
                      <div class="col-sm-4 foto-modal f_equipe-4 px-0"> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal 5 -->
          <div class="modal fade" id="Modal-5" tabindex="-1" role="dialog" aria-labelledby="Modal-5" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                <div class="modal-body text-white">
                  <div class="container-fluid ">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="modal-nome">
                          <h3>Alejandra Solis Amodio</h3>
                          <hr>
                        </div>
                        <div class="modal-cargo ">
                          <h5> <?php echo _('Sócia');?> </h5>
                        </div>
                        <div class="modal-detalle "> <?php echo _('Alejandra é sócia da Prismapar com formação em Engenheira Industrial e de Sistemas pelo Instituto Tecnológico de Monterrey, além de ter obtido uma titulação conjunta de Master of Engineering Management (MEM) pela McCormick School of Engineering e Master in Business Adminisration (MBA) na Kellogg School of Management, ambas ligadas à Universidade de Northwestern. Sua experiência profissional contempla uma passagem pela Nacional Monte Piedad, renomada instituição financeira mexicana, onde liderou projetos de Desenvolvimento de Negócios, Inovação e Due Diligence em transações de Fusões e Aquisições de empresas. Também foi gerente de Fusões e Aquisições para América Latina na Laureate Education, um dos maiores grupos de ensino superior do mundo. Atualmente, Alejandra comanda o escritório da Prismapar na Cidade do México.');?> </div>
                        <div class="row modal-redes">
                          <div class="col-8 contato-modal">
                            <a href="mailto:alejandra.solis@prismapar.com" class="text-white"><i class="bi-envelope-fill" style="font-size: 18px;"></i> alejandra.solis@prismapar.com</a>
                          </div>
                          <div class="col-4 contato-modal"> <a href="https://www.linkedin.com/in/alejandra-solis-amodio/" target="_blank" class="text-white"> <img class="logo-linkedin" src="./assets/imgs/logo_linkedin.png" target="_blank"></a> </div>
                        </div>
                      </div>
                      <div class="col-sm-4 foto-modal f_equipe-5 px-0"> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal 6 -->
          <div class="modal fade" id="Modal-6" tabindex="-1" role="dialog" aria-labelledby="Modal-6" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                <div class="modal-body text-white">
                  <div class="container-fluid ">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="modal-nome">
                          <h3>Ana Menezes</h3>
                          <hr>
                        </div>
                        <div class="modal-cargo ">
                          <h5> <?php echo _('Associada');?> </h5>
                        </div>
                        <div class="modal-detalle "> <?php echo _('Ana é associada na Prismapar. Graduada em Ciências Econômicas pela Universidade Federal de Ouro Preto e em Ciências Contábeis pela PUC-Minas Gerais, ela também possui pós-graduação em Finanças Aplicadas pela PUC-Minas Gerais. Durante sua carreira, Ana atuou nas áreas de consultoria financeira e auditoria nas empresas multinacionais Hindalco e Price Waterhouse Coopers (PwC). Antes de ingressar na Prismapar, ela também trabalhou no departamento de Fusões e Aquisições do Grupo Zelo, um dos maiores grupos consolidadores do setor de serviços funerários do Brasil. Ana integra a equipe do escritório da Prismapar no Brasil.');?> </div>
                        <div class="row modal-redes">
                          <div class="col-8 contato-modal">
                            <a href="mailto:ana.menezes@prismapar.com" class="text-white"><i class="bi-envelope-fill" style="font-size: 18px;"></i> ana.menezes@prismapar.com</a>
                          </div>
                          <div class="col-4 contato-modal"> <a href="https://www.linkedin.com/in/ana-carmem-menezes-a16a2b5a/" target="_blank" class="text-white"> <img class="logo-linkedin" src="./assets/imgs/logo_linkedin.png" target="_blank"></a> </div>
                        </div>
                      </div>
                      <div class="col-sm-4 foto-modal f_equipe-6 px-0"> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal 7 -->
          <div class="modal fade" id="Modal-7" tabindex="-1" role="dialog" aria-labelledby="Modal-7" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                <div class="modal-body text-white">
                  <div class="container-fluid ">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="modal-nome">
                          <h3>Andrés Cardó </h3>
                          <hr>
                        </div>
                        <div class="modal-cargo ">
                          <h5> <?php echo _('Sócio Consultor');?> </h5>
                        </div>
                        <div class="modal-detalle "> <?php echo _('Andrés é sócio-consultor da Prismapar. Formado em Economia e Ciências Humanas pela Pontifícia Universidade Católica do Peru, estudou finanças na Universidade ESAN, em Lima, e obteve seu MBA na IESE Business School, de Madri. Executivo com ampla experiência internacional em cargos diretivos, trabalhou em diversas funções executivas dentro do Grupo Prisa, maior conglomerado de comunicação da Espanha. Também foi líder na expansão do Grupo Santillana na América Latina. Atualmente, além de participar do conselho de diversas empresas na Europa e na América Latina, Andrés é diretor do escritório da Prismapar em Madri, na Espanha.');?> </div>
                        <div class="row modal-redes">
                          <div class="col-8 contato-modal">
                            <a href="mailto:spain@prismapar.com" class="text-white"><i class="bi-envelope-fill" style="font-size: 18px;"></i> spain@prismapar.com</a>
                          </div>
                          <div class="col-4 contato-modal"> <a href="https://www.linkedin.com/in/andr%C3%A9s-card%C3%B3/" target="_blank" class="text-white"> <img class="logo-linkedin" src="./assets/imgs/logo_linkedin.png" target="_blank"></a> </div>
                        </div>
                      </div>
                      <div class="col-sm-4 foto-modal f_equipe-7 px-0"> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal 8 -->
          <div class="modal fade" id="Modal-8" tabindex="-1" role="dialog" aria-labelledby="Modal-8" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                <div class="modal-body text-white">
                  <div class="container-fluid ">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="modal-nome">
                          <h3>Hilario Nuño </h3>
                          <hr>
                        </div>
                        <div class="modal-cargo ">
                          <h5><?php echo _('Sócio Consultor');?> </h5>
                        </div>
                        <div class="modal-detalle "> <?php echo _('Hilario é sócio-consultor da Prismapar. Formado em Direito pela Universidade Complutense de Madri, ele obteve seu MBA pela EU Business School, da Suíça. Ao longo de sua carreira, Hilario atuou como consultor independente e associado para bancos de investimento prestando assessoria para acionistas e empresas da América Latina nos setores financeiro, agroindustrial, energia, educação e farmacêutico, entre outros. Também foi co-diretor de Fusões e Aquisições do UBS, em Nova York, aconselhando também grupos familiares na América Latina. Além disso, Hilario atuou como diretor e membro do Conselho da SISCO na América Central, onde teve a oportunidade de executar diversos projetos. Hoje, Hilario é diretor do escritório da Prismapar em Nova York.');?> </div>
                        <div class="row modal-redes">
                          <div class="col-8 contato-modal">
                            <a href="mailto:usa@prismapar.com" class="text-white"><i class="bi-envelope-fill" style="font-size: 18px;"></i> usa@prismapar.com</a>
                          </div>
                          <div class="col-4 contato-modal"> <a href="https://www.linkedin.com/in/hilarionuno" target="_blank" class="text-white"> <img class="logo-linkedin" src="./assets/imgs/logo_linkedin.png" target="_blank"></a> </div>
                        </div>
                      </div>
                      <div class="col-sm-4 foto-modal f_equipe-8 px-0"> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="Modal-9" tabindex="-1" role="dialog" aria-labelledby="Modal-9" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                <div class="modal-body text-white">
                  <div class="container-fluid ">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="modal-nome">
                          <h3>Daniel Stiebler Villela </h3>
                          <hr>
                        </div>
                        <div class="modal-cargo ">
                          <h5> <?php echo _('Sócio Consultor');?> </h5>
                        </div>
                        <div class="modal-detalle "> <?php echo _('Daniel é sócio-consultor da Prismapar, onde iniciou sua carreira como analista. Ele é formado em Administração de Empresas pelo Instituto de Ensino e Pesquisa (INSPER), do Brasil. Em sua trajetória profissional, Daniel trabalhou na divisão de Investimentos do Unibanco, atuando na área de Mercado de Capitais e Fusões e Aquisições. Também foi colaborador na GP Investimentos/BRZ Investimentos, atuando na análise de novos projetos, monitoramento de portfólio e relação com investidores de fundos. Atualmente, ele colabora em projetos específicos da Prismapar no Brasil.');?> </div>
                        <div class="row modal-redes">
                          <div class="col-8 contato-modal">
                            <a href="mailto:daniel.villela@prismapar.com.br" class="text-white"><i class="bi-envelope-fill" style="font-size: 18px;"></i>
                              daniel.villela@prismapar.com.br</a>
                          </div>
                          <div class="col-4 contato-modal">
                            <a href="https://www.linkedin.com/in/daniel-villela-826b4b35/" target="_blank" class="text-white"> <img class="logo-linkedin" src="./assets/imgs/logo_linkedin.png" target="_blank"></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 foto-modal f_equipe-9 px-0"> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="Modal-10" tabindex="-1" role="dialog" aria-labelledby="Modal-10" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                <div class="modal-body text-white">
                  <div class="container-fluid ">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="modal-nome">
                          <h3>Nicolas Novoa </h3>
                          <hr>
                        </div>
                        <div class="modal-cargo ">
                          <h5> <?php echo _('Analista'); ?> </h5>
                        </div>
                        <div class="modal-detalle "> <?php echo _('Nicolas se formou com honras em Engenharia Industrial e Administração de Empresas pela Universidad de los Andes. Antes de se juntar à Prismapar, trabalhou na Universidad de los Andes no desenvolvimento de um livro sobre a criação de unicórnios em mercados emergentes. Além disso, participou de um projeto de consultoria, da mesma universidade, para auxiliar o JEP, na Colômbia, no processamento de informações para a criação de Macrocases. Atualmente, faz parte da equipe Prismapar na Região Andina.');?> </div>
                        <div class="row modal-redes">
                          <div class="col-8 contato-modal">
                            <a href="mailto:nicolas.novoa@prismapar.com.br" class="text-white"><i class="bi-envelope-fill" style="font-size: 18px;"></i>
                              nicolas.novoa@prismapar.com</a>
                          </div>
                          <div class="col-4 contato-modal">
                            <a href="linkedin.com/in/nicolas-novoa-50a829219" target="_blank" class="text-white"> <img class="logo-linkedin" src="./assets/imgs/logo_linkedin.png" target="_blank"></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 foto-modal f_equipe-10 px-0"> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Astoria Location Bannar -->
    <section class="location-banner" style="background-image: url(./assets/images/banner_4.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto">
        <div class="bottom-left1 text-white"> <?php echo _('Astoria Rooftop - Bogotá');?> </div>
      </div>
    </section>

    <!-- O Que Fazemos -->
    <section id="o-que-fazemos" class="que-section">
      <div class="col-lg-8 mx-auto text-center py-4">
        <h1 class="txt-blu" style="font-weight: 700"> <?php echo _('O que fazemos');?> </h1>
        <div class="mx-auto my-5">
          <div class="row mx-auto">
            <div class="col-lg mx-auto">

              <p class="text-justify"> <?php echo _('Somos especializados em Fusões e Aquisições (M&A), Levantamento de Recursos e Venture Investing e focados em transações cross-border nos principais mercados da América Latina.');?> </p>
              <p class="text-justify">
                <?php echo _('Auxiliamos nossos clientes a planejar e executar seus movimentos mais estratégicos de compra, venda, diversificação e readequação de portfólio de produtos, tecnologias e mercados.');?> </p>
              <p class="text-justify">
                <?php echo _('Atuamos em todas as etapas do processo');?> </p>
              <p class="text-justify"> <?php echo _('1) Diagnóstico da situação inicial da empresa, dos acionistas e do mercado, identificando riscos e oportunidades envolvidos na transação');?> </p>
              <p class="text-justify"> <?php echo _('2) Planejamento e preparação do processo mais indicado, incluindo a preparação de materiais e o mapeamento de potenciais contrapartes, compradoras ou vendedoras');?> </p>

            </div>

            <div class="col-lg mx-auto">

              <p class="text-justify"> <?php echo _('3) Apresentação da oportunidade às contrapartes, recebimento ou elaboração de ofertas, negociação de termos e estrutura da transação');?> </p>
              <p class="text-justify"> <?php echo _('4) Suporte ao processo de diligência e negociação de termos e contratos finais, até o fechamento e anúncio da transação');?> </p>
              <p class="text-justify"> <?php echo _('Para nós da Prismapar, os conceitos que permeiam todo o processo são:');?> </p>

              <p class="text-justify"> <?php echo _('- Valor para o cliente;');?> <br>
                <?php echo _('- Dedicação e disponibilidade sênior;');?> <br>
                <?php echo _('- Confidencialidade.');?> </p>


            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- Nova Location Bannar -->
    <section class="location-banner" style="background-image: url(./assets/images/banner_5.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto">
        <div class="bottom-left1 text-white"> <?php echo _('Nova York - World Trade Center Transportation Hub');?> </div>
      </div>
    </section>

    <!-- Cases -->
    <section id="cases" style="background-image: url(./assets/images/timeline.png); background-position: center; background-size: cover; background-repeat: no-repeat;" class="py-5">
      <div class="col-lg-8 mx-auto text-center Cases-sec">
        <h1 class="txt-blu"> <?php echo _('Cases Selecionados'); ?> </h1>
        <section class="pt-5">
          <div class="owl-carousel owl-carousel1 owl-theme owl-loaded owl-drag">
            <div class="row content">
              <div class="col-lg-6 case_content">
                <h3>Camil</h3>
                <div class="s_hr text-left pt0 pb0" data-name="Separator">
                  <hr class="w-100 mx-auto" style="border-top-style: solid; border-top-width: 2px !important;">
                </div>
                <h3 style="margin-bottom: 20px"> <?php echo _('Grupo Dajahu'); ?> </h3>
                <p> <?php echo _('Fomos os assessores exclusivos na venda dos ativos de arroz e logística do Grupo Dajahu S.A., do Equador, para a brasileira Camil Alimentos S.A., uma das maiores empresas do setor de alimentos da América Latina.');?> </p>

                <p> <?php echo _('Atuamos em todas as etapas dessa transação, desde a preparação do processo e a aproximação das partes, passando pela negociação dos termos e estrutura e pela coordenação da diligência, até a concretização do negócio, que movimentou cerca de US$ 36,5 milhões.');?> </p>

                <p> <?php echo _('O Grupo Dajahu é uma das maiores organizações do Equador e atua nos ramos imobiliário, logístico e de alimentos, sendo líder no mercado de arroz do país. A venda dos ativos estava alinhada à estratégia do Grupo e permitiu novos investimentos nos setores imobiliário e logístico.');?> </p>
                <p><img style="width: 50% !important;" aria-describedby="tooltip485283" title="" data-original-title="" src="./assets/imgs/LOGOSCASECAMIL@3x.png" class="img-fluid o_we_custom_image" loading="lazy"></p>
              </div>
              <div class="col-lg-6 case_img" style=" background-image: url('assets/imgs/Foto_Case_1.png')"> </div>
            </div>

            <div class="row content">
              <div class="col-lg-6 case_content">
                <h3>Advent International</h3>
                <div class="s_hr text-left pt0 pb0" data-snippet="s_hr" data-name="Separator">
                  <hr class="w-100 mx-auto" style="border-top-style: solid; border-top-width: 2px !important;">
                </div>
                <h3 style="margin-bottom: 20px">Kroton</h3>
                <p class="lead"> </p>
                <p> </p>
                <p><?php echo _('Atuamos na assessoria estratégica, financeira e operacional do Fundo de Investimentos Advent International na aquisição de ativos das redes de ensino brasileiras Kroton Educacional e IUNI Educacional.');?> </p>

                <p> <?php echo _('Nossa equipe participou da concepção estratégica junto ao cliente, que tinha como objetivo ingressar no mercado de Ensino Superior do Brasil por meio de uma plataforma de forte crescimento. Atuamos também na busca e abordagem dos ativos promissores e em todas as etapas das aquisições, desde a preparação até o fechamento das transações que movimentaram cerca de US$ 247 milhões.');?> </p>

                <p> <?php echo _('O sucesso das operações deu origem a maior organização educacional do Brasil e uma das maiores do mundo, a Cogna Educacional, com cerca de 2,4 milhões de estudantes.');?>
                </p>
                <p> <img style="width: 50% !important;" aria-describedby="tooltip139855" title="" data-original-title="" data-mimetype="image/png" data-original-src="./assets/imgs/LOGOSCASEKROTON%403x_edit.png" data-original-id="710" src="./assets/imgs/LOGOSCASEKROTON@3x_edit.png" class="img-fluid o_we_custom_image" loading="lazy"> <br>
                </p>
              </div>
              <div class="col-lg-6 case_img" style=" background-image: url('assets/imgs/Foto_Case_2.png')"> </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    </div>
    </section>

    <!-- Numbers -->
    <section id="numeros" class="num-sec py-3" style="background-image: url(./assets/images/bg_numbers.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto text-center py-5">
        <h1 class="txt-blu"> <?php echo _('Experiência Prismapar');?> </h1>
        <div class="row mx-auto">
          <div class="col-lg col-md">
            <p class="display-counter">+120</p>
            <p class="num-label"> <?php echo _('Transações');?> </p>
          </div>
          <div class="col-lg col-md">
            <p style="line-height: 1; display: flex;    align-items: center;    justify-content: center;"> <span class="num-tag">+USD</span>
              <span class="display-counter">2</span>
              <span class="dsply-cntr">bi</span>
            </p>
            <p class="num-label"> <?php echo _('Valor Transacionado');?> </p>
          </div>
          <div class="col-lg col-md">
            <p class="display-counter">+10</p>
            <p class="num-label"> <?php echo _('Setores de Atuação');?> </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Praca Location Bannar -->
    <section class="location-banner" style="background-image: url(./assets/images/banner_6.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto">
        <div class="bottom-left1 text-white"> <?php echo _('Praça Lagos - Guayaquil, Equador');?> </div>
      </div>
    </section>

    <!-- Clients Carousel -->
    <section class="py-5 text-center clients-carousel" style="background-color: #7bafde;">
      <h1 class="text-white"> <?php echo _('Nossos clientes');?> </h1>
      <div class="brands">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="brands_slider_container">
                <div class="owl-carousel owl-theme brands_slider">
                  <div class="brands_item "> <img src="./assets/images/1.jpg"> <img src="./assets/images/11.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/2.jpg"> <img src="./assets/images/12.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/3.jpg"> <img src="./assets/images/13.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/4.jpg"> <img src="./assets/images/14.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/5.jpg"> <img src="./assets/images/15.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/6.jpg"> <img src="./assets/images/16.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/7.jpg"> <img src="./assets/images/17.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/8.jpg"> <img src="./assets/images/18.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/9.jpg"> <img src="./assets/images/19.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/10.jpg"> <img src="./assets/images/20.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/11.jpg"> <img src="./assets/images/21.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/12.jpg"> <img src="./assets/images/22.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/13.jpg"> <img src="./assets/images/23.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/14.jpg"> <img src="./assets/images/24.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/15.jpg"> <img src="./assets/images/25.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/16.jpg"> <img src="./assets/images/26.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/17.jpg"> <img src="./assets/images/27.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/18.jpg"> <img src="./assets/images/28.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/19.jpg"> <img src="./assets/images/29.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/30.jpg"> <img src="./assets/images/40.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/31.jpg"> <img src="./assets/images/41.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/32.jpg"> <img src="./assets/images/42.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/33.jpg"> <img src="./assets/images/43.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/34.jpg"> <img src="./assets/images/44.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/35.jpg"> <img src="./assets/images/45.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/36.jpg"> <img src="./assets/images/46.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/37.jpg"> <img src="./assets/images/47.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/38.jpg"> <img src="./assets/images/48.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/39.jpg"> <img src="./assets/images/49.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/50.jpg"> <img src="./assets/images/60.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/51.jpg"> <img src="./assets/images/61.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/52.jpg"> <img src="./assets/images/62.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/53.jpg"> <img src="./assets/images/63.jpg">
                  </div>
                  <div class="brands_item "> <img src="./assets/images/54.jpg"> <img src="./assets/images/64.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/55.jpg"> <img src="./assets/images/65.jpg">
                  </div>
                  <div class="brands_item"> <img src="./assets/images/56.jpg"> <img src="./assets/images/66.jpg">
                  </div>
                </div>
                <!-- Brands Slider Navigation -->
                <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Madrid Location Bannar -->
    <section class="location-banner" style="background-image: url(./assets/images/banner_7.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
      <div class="col-lg-8 mx-auto">
        <div class="bottom-left1 text-white"> <?php echo _('Madrid - Templo de Debod');?> </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer id="contato" class="py-5" style="background-color: #002f67;">
    <div class="col-lg-8 mx-auto py-4"> <img src="./assets/images/Logo_Branco.png">
      <div class="row mx-auto footer">
        <div class="col-lg-6 px-0">
          <ul class="px-0 mt-4 pt-4" style="list-style-type: none;">
            <li><a href="#historico" style="text-decoration: none;" class="text-white"> <?php echo _('HISTÓRICO');?> </a></li>
            <li><a href="#presenca" style="text-decoration: none;" class="text-white"> <?php echo _('PRESENÇA LATAM');?> </a> </li>
            <li><a href="#equipe" style="text-decoration: none;" class="text-white"> <?php echo _('EQUIPE');?> </a></li>
            <li><a href="#o-que-fazemos" style="text-decoration: none;" class="text-white"> <?php echo _('O QUE FAZEMOS');?> </a> </li>
            <li><a href="#cases" style="text-decoration: none;" class="text-white"> <?php echo _('EXPERIÊNCIA PRISMAPAR');?> </a></li>
            <li><a href="#numeros" style="text-decoration: none;" class="text-white"> <?php echo _('PRISMAPAR EM NÚMEROS');?> </a> </li>
          </ul>
        </div>
        <div class="col-lg-6 px-0">
          <p class="mt-4 pt-4 pb-2 text-white mb-0"> <?php echo _('CONTATO:');?> </p>
          <div class="d-flex"><a href="https://wa.me/50664777486" style="text-decoration: none;" target="_blank" class="text-white pb-2"> <i class="fa-brands fa-whatsapp-square mr-2"></i> WhatsApp </a></div>
          <div class="d-flex"><a href="mailto:contact@prismapar.com" style="text-decoration: none;" target="_blank" class="text-white pb-2"> <i class="fa-solid fa-square-envelope mr-2"></i> E-mail </a></div>
          <div class="d-flex"><a href="https://linkedin.com/company/prismapar" style="text-decoration: none;" target="_blank" class="text-white"> <i class="fa-brands fa-linkedin mr-2"></i> LinkedIn </a></div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Company Copyright -->
  <section class="cmpny-cpyrght py-4" style="background-color: #dcdddf;">
    <div class="col-lg-8 mx-auto">
      <p class="mb-0"> &copy; 2021 Prismapar. <?php echo _("Todos os");?> <?php echo _("direitos reservados");?>. <?php echo _("Desenvolvido por");?> <a href="https://popsolutions.com.br" class="text-decoration-none"> Popsolutions. </a> </p>
    </div>
  </section>
  <!-- JS Files link -->
  <!--<script src="./assets/js/MobileTimeLine.js"></script> 
-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- For Global Section -->
  <script src="./assets/js/core.js"></script>
  <script src="./assets/js/maps.js"></script>
  <script src="./assets/js/worldLow.js"></script>
  <script src="./assets/js/continentsLow.js"></script>
  <script src="./assets/js/script_<?php echo $lang;?>.js"></script>
  <script src="//cdn.amcharts.com/lib/5/themes/Responsive.js"></script>

  <!-- For Clients Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  <script src="./assets/js/ClientsSlider.js"></script>

  <!-- For Equipe Section -->
  <script src="./assets/js/equipe.js"></script>

  <!-- For Cases -->
  <script src="./assets/js/Cases.js"></script>
  <!-- For mobile Glovo -->
  <script src="./assets/js/glovo.js"></script>
  <!-- For Timeline -->
  <script src="./assets/js/timeline.js"></script>
  <!-- For Number Animation -->
  <script>
    $(".display-counter").each(function() {
      $(this)
        .prop("Counter", 0)
        .animate({
          Counter: $(this).text(),
        }, {
          duration: 8000,
          easing: "swing",
          step: function(now, tween) {
            // Check added for decimal number
            if (parseInt(tween.end) == parseFloat(tween.end)) {
              $(this).text(Math.ceil(now));
            } else {
              $(this).text(now.toFixed(2));
            }
          },
        });
    });
  </script>
</body>

</html>