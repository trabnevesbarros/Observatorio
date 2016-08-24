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
  <div class="inner pad1">
    <div class="container_12">
      <div class="wrapper h-pad">
        <div class="grid_7">
          <h2>Nossa localização</h2>
            <div class="grid_4 alpha">
              <iframe id="mapa_localizacao" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4782.9438192120315!2d-52.09057250671186!3d-32.040783658680496!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf6c490e2128f40d9!2sInstituto+Federal+de+Educa%C3%A7%C3%A3o+Ci%C3%AAncia+e+Tecnologia+do+Rio+Grande+do+Sul%2CCampus+Rio+Grande!5e0!3m2!1spt-BR!2sde!4v1461537674939" width="300px" height="340px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="grid_3 omega">
              <div class="contacts"> <strong class="title">Observatório EPT</strong>
                R. Eng. Alfredo Huck, 133<br>
                Vila Santa Tereza<br>
                RS, 96201-460, Brasil<br>
                Telefone: (53) 3233-8681<br>
                E-mail: <a href="#" class="link">comunicacao@riogrande.ifrs.edu.br</a></div>
            </div>
        </div>
        <div class="grid_4 prefix_1">
          <h2>Alguma dúvida?</h2>
          <form id="contact-form" action="#">
            <fieldset>
              <label>
                <input type="text" value="Nome" onFocus="if(this.value=='Nome'){this.value=''}" onBlur="if(this.value==''){this.value='Nome'}">
              </label>
              <label>
                <input type="text" value="Email" onFocus="if(this.value=='Email'){this.value=''}" onBlur="if(this.value==''){this.value='Email'}">
              </label>
              <label>
                <input type="text" value="Telefone" onFocus="if(this.value=='Telefone'){this.value=''}" onBlur="if(this.value==''){this.value='Telefone'}">
              </label>
              <textarea onFocus="if(this.value=='Mensagem'){this.value=''}" onBlur="if(this.value==''){this.value='Mensagem'}">Mensagem</textarea>
              <a href="#" class="button1" onClick="document.getElementById('contact-form').reset()">Limpar</a> <a href="#" class="button1" onClick="document.getElementById('contact-form').submit()">Enviar</a>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
