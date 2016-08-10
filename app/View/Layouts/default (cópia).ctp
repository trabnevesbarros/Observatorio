<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  echo $this->Html->charset();
  echo $this->Html->css('custom');
  echo $this->Html->css('cake.generic');
  echo $this->Html->css('reset');
  echo $this->Html->css('grid');
  echo $this->Html->css('camera');
  echo $this->Html->css('style');
  echo $this->Html->css('http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic');
  echo $this->Html->script('jquery');
  echo $this->Html->script('jquery-migrate-1.1.1');
  echo $this->Html->script('camera');
  echo $this->Html->script('jquery.easing.1.3');
  ?>
  <title>Observatório EPT</title>
  <?php
  echo $this->fetch('css');
  echo $this->fetch('script');
  ?>
  <script type="text/javascript">
  	jQuery(function () {
    jQuery('#camera_wrap_1').camera({
        height: '317px',
        loader: false,
        pagination: false,
        thumbnails: false
    });
  });
  </script>
</head>
<body>
<header>
  <?php echo $this->Html->image('eptlogo.png', array('id' => 'logoept')); ?>
  <div class="container_12">
    <div class="grid_12">
      <div class="wrapper">
        <nav>
          <ul class="menu">
            <li  class="active"><a href="index.html">Início</a></li>
            <li><a>Programas</a>
              <ul>
                <li><a href="pesquisa.html">Pesquisa</a></li><br>
                <li><a href="prominp.html">Prominp</a></li><br>
                <li><a href="pronatec.html">Pronatec</a></li>
              </ul>
            </li>
            <li><a href="base.html">Bases</a></li>
            <li><a href="linha-pesquisa2.html">Qualificação</a></li>
            <li><a href="sobre-ifrs.html">ifrs</a></li>
            <li><a href="contato.html">Contato</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<div id="content">
  <div id="slider">
    <div class="container_12">
      <div class="grid_12">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
          <div data-src="<?php echo $this->webroot;?>img/slide11.jpg">
            <div class="camera_caption fadeIn">
              <h2>Rio Grande</h2>
              Rio Grande é um município brasileiro localizado no litoral sul do estado do Rio Grande do Sul. Fundado em 1737, hoje possui cerca de 200.000 habitantes.
              <p>
              <a href="sobre-rg.html" class="button-more-info">Mais informações</a></p>
            </div>
          </div>
          <div data-src="<?php echo $this->webroot;?>img/slide22.jpg">
            <div class="camera_caption fadeIn">
              <h2>São José do Norte</h2>
              São José do Norte é um município brasileiro localizado no extremo sul do estado do Rio Grande do Sul, banhado pelo Oceano Atlântico e pela Lagoa dos Patos. Tem sua economia baseada na agricultura, pecuária, pesca e extrativismo vegetal.
              <p><a href="sobre-pel.html" class="button-more-info">Mais informações</a></p>
            </div>
          </div>
          <div data-src="<?php echo $this->webroot;?>img/slide33.jpg">
            <div class="camera_caption fadeIn">
              <h2>Pelotas</h2>
              Pelotas é um município da região sul do estado do Rio Grande do Sul, no Brasil. Considerado uma das capitais regionais do Brasil, possui uma população de 327 778 habitantes e é a terceira cidade mais populosa do estado.
              <p><a href="sobre-sjn.html" class="button-more-info">Mais informações</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="inner">
    <div class="container_12">
      <div class="wrapper">
      <div id="page-content-wrapper">
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>
</div>
        <div class="block">
          <div class="grid_8">
            <div class="grid-inner">
              <h2>Nosso histórico</h2>
              <div class="wrapper">
                <figure class="img-indent"><?php echo $this->Html->image('eptlogo.png'); ?></figure>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> 
                </div>
              
            </div>
          </div>
          <div class="grid_4">
            <h2>Opiniões</h2>
            <div class="testimonial-block"> <em>Este espaço está destinado a alguma opinião sobre o site ou posterior mudança</em>
              <p><strong>— Desconhecido, Autor</strong></p>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="grid_12">
          <h2 class="h-pad">Nossos parceiros</h2>
          <ul class="clients-list">
            <li><a href="http://cnpq.br/"><?php echo $this->Html->image('logo_cnpq.png'); ?></a></li>
            <li><a href="http://www.ifrs.edu.br/"><?php echo $this->Html->image('logoIF2.png'); ?></a></li>
            <li><a href="http://furg.br/"><?php echo $this->Html->image('logofurg2.png'); ?></a></li>
            <li><a href="http://www.aplnavalriogrande.org/"><?php echo $this->Html->image('logo_apl2.png'); ?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="wrapper">
      <div class="grid_8"> Observatório Regional do Trabalho | <a href="http://www.ifrs.edu.br/"> IFRS </a></div>
      <!--<div class="grid_4">
        <div class="social"> My Social:<a href="#"><img src="images/facebook-icon.png" alt=""></a><a href="#"><img src="images/twitter-icon.png" alt=""></a> </div>
      </div>-->
    </div>
  </div>
</footer>
</body>
</html>