<h1>Cadastrar Formação</h1>
<?php

echo $this->Form->create('Formacao', array('inputDefaults' => array('type' => 'text')));

echo $this->Form->input('name', array('label' => 'Nome'));

echo $this->Form->end('Salvar');
