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
            <?php echo $this->element('slider'); ?>
            <div class="inner">
                <div class="container_12">
                    <div class="wrapper">
                        <div id="page-content-wrapper">
                            <?php echo $this->Session->flash(); ?>
                            <?php echo $this->fetch('content'); ?>
                        </div>
                        <?php echo $this->element('block'); ?>
                    </div>
                    <?php echo $this->element('wrapper'); ?>
                </div>
            </div>
            <footer>
                <div class="container_12">
                    <div class="wrapper">
                        <div class="grid_8"> Observatório Regional do Trabalho | <a href="http://www.ifrs.edu.br/"> IFRS </a></div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>