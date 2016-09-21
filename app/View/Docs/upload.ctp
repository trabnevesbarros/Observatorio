<?php

echo $this->Form->create('Doc', array('type' => 'file'));

echo $this->Form->input('name', array('label' => 'Nome', 'type' => 'text'));

echo $this->Form->file('uploadfile', array());

echo $this->Form->end('Salvar');
