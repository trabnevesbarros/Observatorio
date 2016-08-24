<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT Licenses
 */
$this->assign('headerMenu', $this->element('secondHeaderElement'));
//$this->assign('slider', $this->element('sliderElement'));
//$this->assign('hist', $this->element('histElement'));
//$this->assign('parc', $this->element('parcElement'));
?>


<div class="grid_12">
    <div class="wrapper">
        <div class="grid_8 alpha">
            <div class="grid-inner">
                <h2 class="h-pad h-indent">Posts recentes</h2>
                <div class="block"> <!--aqui começa a classe do post-->
                    <div class="post">
                        <div class="wrapper">
                            <div class="info">
                                <div class="wrapper">
                                    <div class="date"> <span>may</span><strong>15</strong> </div>
                                    <a href="#"><strong>Sed laoreet aliquam leo tellus dolor</strong></a><br>
                                    Author: <a href="#"><strong>admin</strong></a> </div>
                            </div>
                            <div class="comments"> No comments<span></span> </div>
                        </div>
                        <figure>
                            <a href="#"><img src="images/blog-img1.jpg" alt=""></a>
                            <figure>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                <a href="#" class="button1">Read more</a><a href="#" class="button1">pOST cOMMENT</a> </div>
                                </div>
                                <div class="block">
                                    <div class="post">
                                        <div class="wrapper">
                                            <div class="info">
                                                <div class="wrapper">
                                                    <div class="date"> <span>may</span><strong>15</strong> </div>
                                                    <a href="#"><strong>Sed laoreet aliquam leo tellus dolor</strong></a><br>
                                                    Author: <a href="#"><strong>admin</strong></a> </div>
                                            </div>
                                            <div class="comments"> No comments<span></span> </div>
                                        </div>
                                        <figure>
                                            <a href="#"><img src="images/blog-img2.jpg" alt=""></a>
                                            <figure>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                                <a href="#" class="button1">Read more</a><a href="#" class="button1">pOST cOMMENT</a> </div>
                                                </div>
                                                <div class="block null">
                                                    <div class="post">
                                                        <div class="wrapper">
                                                            <div class="info">
                                                                <div class="wrapper">
                                                                    <div class="date"> <span>may</span><strong>15</strong> </div>
                                                                    <a href="#"><strong>Sed laoreet aliquam leo tellus dolor</strong></a><br>
                                                                    Author: <a href="#"><strong>admin</strong></a> </div>
                                                            </div>
                                                            <div class="comments"> No comments<span></span> </div>
                                                        </div>
                                                        <figure>
                                                            <a href="#"><img src="images/blog-img3.jpg" alt=""></a>
                                                            <figure>
                                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                                                <a href="#" class="button1">Read more</a><a href="#" class="button1">pOST cOMMENT</a> </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                <div class="grid_4 omega">
                                                                    <div class="block block-pad">
                                                                        <h2>Categorias</h2>
                                                                        <ul class="list">
                                                                            <li><a href="#">Praesent vestibulum molestie</a></li>
                                                                            <li><a href="#">Aenean nonummy hendrerit</a></li>
                                                                            <li><a href="#">Phasellus porta fusce suscipit varius</a></li>
                                                                            <li><a href="#">Cum sociis penatibus et</a></li>
                                                                            <li><a href="#">Magnis dis parturient montes</a></li>
                                                                            <li><a href="#">Nascetur ridiculus mus duifusce</a></li>
                                                                            <li><a href="#">Morbi nunc odio, gravida at, cursus nec</a></li>
                                                                            <li><a href="#">Tristique orci ac sem duis</a></li>
                                                                            <li><a href="#">Donec accumsan malesuada orci</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="block">
                                                                        <h2>Arquivos</h2>
                                                                        <form id="search-form" action="#">
                                                                            <fieldset>
                                                                                <input type="text" value="Escolha um mês..." onFocus="if (this.value == 'Escolha um mês...') {
                                                                                            this.value = ''
                                                                                        }" onBlur="if (this.value == '') {
                                                                                                    this.value = 'Escolha um mês...'
                                                                                                }">
                                                                                <input type="image" src="images/form-button.gif" alt="submit">
                                                                            </fieldset>
                                                                        </form>
                                                                    </div>
                                                                    <h2 class="h-pad">Community News</h2>
                                                                    <ul class="news">
                                                                        <li>
                                                                            <figure><img src="images/blog-img4.jpg" alt=""></figure>
                                                                            <strong>Lorem ipsum dolor </strong> <a href="#"> Sit amet, consectetur adipisicing elit sed.</a> </li>
                                                                        <li>
                                                                            <figure><img src="images/blog-img5.jpg" alt=""></figure>
                                                                            <strong>Lorem ipsum dolor </strong> <a href="#"> Sit amet, consectetur adipisicing elit sed.</a> </li>
                                                                        <li>
                                                                            <figure><img src="images/blog-img6.jpg" alt=""></figure>
                                                                            <strong>Lorem ipsum dolor </strong> <a href="#"> Sit amet, consectetur adipisicing elit sed.</a> </li>
                                                                    </ul>
                                                                    <a href="#" class="button1">Join the Conversation</a> </div>
                                                                </div>
                                                                </div>

