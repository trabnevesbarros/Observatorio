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
?>
<div class="grid_12">
    <div class="wrapper">
        <div id="login" style="background-image: url('<?php echo $this->webroot; ?>img/body-bg.gif')">
            <form method="" action="">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" id="usr">
                </div>
                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <button class="btn btn-primary">Logar</button>
            </form>
        </div>
    </div>
</div>
</div>

</body>
</html>