<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('Component', 'Controller');
App::uses('String', 'Utility');
App::uses('File', 'Utility');

class UploadComponent extends Component {

    public function upload($data = null) {
        if (!empty($data)) {
            $file = $data;
            $filename = $file['name'];
            $filename_tmp_name = $file['tmp_name'];
            $dir = WWW_ROOT . DS . 'uploads';
            $allowed = array('pdf', 'jpg', 'png');
            if (!in_array(substr(strrchr($filename, '.'), 1), $allowed)) {
                throw new NotFoundException("Error Processing Request", 1);
            } else if (is_uploaded_file($filename_tmp_name)) {
                move_uploaded_file($filename_tmp_name, $dir . DS . String::uuid() . '-' . $filename);
            }
        }
    }

}
