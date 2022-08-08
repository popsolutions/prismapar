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