<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Stopword extends AppModel {

    public $useTable = 'stopwords';
    
    public $validate = array(
        'termo' => array('rule' => 'notBlank'));
    
    public $actsAs = array('Search.Searchable');
    
    public $filterArgs = array(
        'termo_search' => array(
            'type' => 'ilike',
            'field' => 'termo',
            'required' => false
        )
    );

}
