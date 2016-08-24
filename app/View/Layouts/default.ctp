<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        echo $this->Html->charset();
        echo $this->Html->css('custom');
        echo $this->Html->css('cake.generic');
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('reset');
        echo $this->Html->css('grid');
        echo $this->Html->css('camera');
        echo $this->Html->css('style');
        echo $this->Html->css('http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic');
        echo $this->Html->script('jquery');
        echo $this->Html->script('jquery-migrate-1.1.1');
        echo $this->Html->script('camera');
        echo $this->Html->script('jquery.easing.1.3');
        echo $this->Html->meta(
            'favicon.ico',
            '/favicon.ico',
            array('type' => 'icon')
        );
        ?>
        <title>Observatório EPT</title>
        <?php
        echo $this->fetch('css');
        ?>
    </head>
    <body>
        <header>
            <?php echo $this->fetch('headerMenu')?>
        </header>
        <div id="content">
            <?php echo $this->fetch('slider'); ?>
            <div class="inner">
                <div class="container_12">
                    <div class="wrapper">
                        <div id="page-content-wrapper">
                            <?php echo $this->Session->flash(); ?>
                            <?php echo $this->fetch('content'); ?>
                        </div>
                        <?php echo $this->fetch('hist'); ?>
                    </div>
                    <?php echo $this->fetch('parc'); ?>
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

<?php echo $this->fetch('script'); ?>