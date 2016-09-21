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
<style>
    .lista { position: relative; }
</style>


<div class="grid_12">
    <div class="block">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#publica" data-toggle="tab">Publicas</a></li>
    <li class=""><a href="#privada" data-toggle="tab">Privadas</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane fade active in" id="publica">
     <div class="lista">
      <table border="1" class="table table-hover" >
        <thead>
          <tr>
            <th>IDT</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>CRE</th>
            <th>Rede Ensino</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>11378</td>
            <td>ESC EST ENS MED ENG ROBERTO BASTOS TELLECHEA</td>
            <td>(53)3235-1501</td>
            <td>18</td>
            <td>Estadual</td>
          </tr>
          <tr>
            <td>11281</td>
            <td>COL ESTADUAL LEMOS JUNIOR</td>
            <td>(53)3232-3996</td>
            <td>18</td>
            <td>Estadual</td>
          </tr>
          <tr>
            <td>11282</td>
            <td>ESC TECNICA EST GETULIO VARGAS</td>
            <td>(53)3232-1219</td>
            <td>18</td>
            <td>Estadual</td>
          </tr>
          <tr>
            <td>11284</td>
            <td>ESC EST ENS FUN MARECHAL EMILIO LUIZ MALLET</td>
            <td>(53)3232-1219</td>
            <td>18</td>
            <td>Estadual</td>
          </tr>
          <tr>
            <td>11342</td>
            <td>ESC EST ENS FUN AGNELLA DO NASCIMENTO</td>
            <td>(53)3232-1219</td>
            <td>18</td>
            <td>Estadual</td>
          </tr>
          <tr>
            <td>11343</td>
            <td>ESC EST ENS FUN ALCIDES BARCELOS</td>
            <td>(53)3232-1219</td>
            <td>18</td>
            <td>Estadual</td>
          </tr>
          <tr>
            <td>11344</td>
            <td>ESC EST ENS MED ALFREDO FERREIRA RODRIGUES</td>
            <td>(53)3232-1219</td>
            <td>18</td>
            <td>Estadual</td>
          </tr>
          <tr>
            <td>11346</td>
            <td>ESC EST ENS MED BIBIANO DE ALMEIDA</td>
            <td>(53)3232-1219</td>
            <td>18</td>
            <td>Estadual</td>
          </tr>
          <tr>
            <td>11347</td>
            <td>ESC EST ENS MED BRIGADEIRO JOSE DA SILVA PAES</td>
            <td>(53)3232-1219</td>
            <td>18</td>
            <td>Estadual</td>
          </tr>
          <tr>
            <td>11348</td>
            <td>ESC EST ENS FUN CEL JUVENCIO LEMOS</td>
            <td>(53)3232-1219</td>
            <td>18</td>
            <td>Estadual</td>
          </tr>
        </tr>
        <tr>
          <td>11350</td>
          <td>ESC EST ENS FUN ERNESTO PEDROSO</td>
          <td>(53)3232-1219</td>
          <td>18</td>
          <td>Estadual</td>
        </tr>
      </tr>
      <tr>
        <td>11351</td>
        <td>ESC EST ENS FUN GUARDA MARINHA GREENHALGH</td>
        <td>(53)3232-1219</td>
        <td>18</td>
        <td>Estadual</td>
      </tr>
    </tr>
    <tr>
      <td>11352</td>
      <td>ESC EST ENS FUN IMPERIAL MARINHEIRO MARCILIO DIAS</td>
      <td>(53)3232-1219</td>
      <td>18</td>
      <td>Estadual</td>
    </tr>
  </tr>
  <tr>
    <td>11353</td>
    <td>ESC EST ENS FUN MARIO QUINTANA</td>
    <td>(53)3232-1219</td>
    <td>18</td>
    <td>Estadual</td>
  </tr>
</tbody>
</table>
</div>
</div>
<div class="tab-pane fade" id="privada">
 <div class="lista">
  <table border="1" class="table table-hover" >
    <thead>
      <tr>
        <th>IDT</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>CRE</th>
        <th>Rede Ensino</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>11378</td>
        <td>ESC EST ENS MED ENG ROBERTO BASTOS TELLECHEA</td>
        <td>(53)3235-1501</td>
        <td>18</td>
        <td>Estadual</td>
      </tr>
      <tr>
        <td>11281</td>
        <td>COL ESTADUAL LEMOS JUNIOR</td>
        <td>(53)3232-3996</td>
        <td>18</td>
        <td>Estadual</td>
      </tr>
      <tr>
        <td>11282</td>
        <td>ESC TECNICA EST GETULIO VARGAS</td>
        <td>(53)3232-1219</td>
        <td>18</td>
        <td>Estadual</td>
      </tr>
      <tr>
        <td>11284</td>
        <td>ESC EST ENS FUN MARECHAL EMILIO LUIZ MALLET</td>
        <td>(53)3232-1219</td>
        <td>18</td>
        <td>Estadual</td>
      </tr>
      <tr>
        <td>11342</td>
        <td>ESC EST ENS FUN AGNELLA DO NASCIMENTO</td>
        <td>(53)3232-1219</td>
        <td>18</td>
        <td>Estadual</td>
      </tr>
      <tr>
        <td>11343</td>
        <td>ESC EST ENS FUN ALCIDES BARCELOS</td>
        <td>(53)3232-1219</td>
        <td>18</td>
        <td>Estadual</td>
      </tr>
      <tr>
        <td>11344</td>
        <td>ESC EST ENS MED ALFREDO FERREIRA RODRIGUES</td>
        <td>(53)3232-1219</td>
        <td>18</td>
        <td>Estadual</td>
      </tr>
      <tr>
        <td>11346</td>
        <td>ESC EST ENS MED BIBIANO DE ALMEIDA</td>
        <td>(53)3232-1219</td>
        <td>18</td>
        <td>Estadual</td>
      </tr>
      <tr>
        <td>11347</td>
        <td>ESC EST ENS MED BRIGADEIRO JOSE DA SILVA PAES</td>
        <td>(53)3232-1219</td>
        <td>18</td>
        <td>Estadual</td>
      </tr>
      <tr>
        <td>11348</td>
        <td>ESC EST ENS FUN CEL JUVENCIO LEMOS</td>
        <td>(53)3232-1219</td>
        <td>18</td>
        <td>Estadual</td>
      </tr>
    </tr>
    <tr>
      <td>11350</td>
      <td>ESC EST ENS FUN ERNESTO PEDROSO</td>
      <td>(53)3232-1219</td>
      <td>18</td>
      <td>Estadual</td>
    </tr>
  </tr>
  <tr>
    <td>11351</td>
    <td>ESC EST ENS FUN GUARDA MARINHA GREENHALGH</td>
    <td>(53)3232-1219</td>
    <td>18</td>
    <td>Estadual</td>
  </tr>
</tr>
<tr>
  <td>11352</td>
  <td>ESC EST ENS FUN IMPERIAL MARINHEIRO MARCILIO DIAS</td>
  <td>(53)3232-1219</td>
  <td>18</td>
  <td>Estadual</td>
</tr>
</tr>
<tr>
  <td>11353</td>
  <td>ESC EST ENS FUN MARIO QUINTANA</td>
  <td>(53)3232-1219</td>
  <td>18</td>
  <td>Estadual</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>