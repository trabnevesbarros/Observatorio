<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class DocsController extends AppController {
    
    public $helpers = array('Html', 'Form', 'Paginator');
    public $components = array('Upload');
    
    public function upload() {
        if (!empty($this->request->data)){
            $this->Upload->upload($this->request->data['Doc']['uploadfile']);
        }
    }
}

