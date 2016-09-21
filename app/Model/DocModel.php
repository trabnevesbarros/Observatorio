<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Doc extends AppModel {

    public $useTable = 'docs';
    
    public $validate = array(
        'name' => array(
            array('rule' => 'notBlank')
        )
    );
    
    public $actsAs = array('Search.Searchable');
    
    public $filterArgs = array(
        'name_search' => array(
            'type' => 'ilike',
            'field' => 'name',
            'required' => false
        )
    );

}
