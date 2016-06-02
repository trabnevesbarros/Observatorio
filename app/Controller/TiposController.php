<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TiposController extends AppController {
    
    public $helpers = array('Html', 'Form', 'Paginator');
    public $paginate = array(
        'limit' => 12
    );
    public $components = array(
        'Search.Prg',
        'Paginator'
    );
    public $presetVars = array('name_search' => array('type' => 'value'));

    public function find() {         
        $this->Paginator->settings = $this->paginate;
        $this->Tipo->recursive = -1;
        $this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Tipo->parseCriteria($this->Prg->parsedParams());
        $this->set('tipos', $this->paginate());
    }
    
    public function index() {
        $this->Paginator->settings = $this->paginate;
        $this->Tipo->recursive = -1;
        $this->set('tipos', $this->paginate());
    }

    public function view($id = null) {
        $this->Tipo->recursive = -1;
        if (!$id) {
            throw new NotFoundException(__('Invalid'));
        }

        $tipo = $this->Tipo->findById($id);
        if (!$tipo) {
            throw new NotFoundException(__('Invalid'));
        }

        $this->set('tipo', $tipo);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Tipo->create();
            if ($this->Tipo->save($this->request->data)) {
                $this->Session->setFlash(__('Tipo cadastrado'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Não foi possivel cadastrar tipo'));
            }
        }
    }

    public function edit($id = null) {
        $this->Tipo->recursive = -1;
        if (!$id) {
            throw new NotFoundException(__('Invalid'));
        }

        $tipo = $this->Tipo->findById($id);
        if (!$tipo) {
            throw new NotFoundException(__('Invalid'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Tipo->id = $id;
            if ($this->Tipo->save($this->request->data)) {
                $this->Session->setFlash(__('Registro alterado'));
                return $this->redirect(array('action' => 'index'));
            }
        }

        if (!$this->request->data) {
            $this->request->data = $tipo;
        }
    }

    public function delete($id = null) {
        $this->Tipo->recursive = -1;
        if ($this->request->is('get')) {
            throw new UnauthorizedException(__('Not allowed'));
        }

        if (!$id) {
            throw new NotFoundException(__('Invalid'));
        }

        $tipo = $this->Tipo->findById($id);
        if (!$tipo) {
            throw new NotFoundException(__('Invalid'));
        }
        
        if($this->Tipo->delete($id)){
            $this->Session->setFlash(__('Tipo removido'));
        } else {
            $this->Session->setFlash(__('Não foi possivel remover tipo'));
        }
        return $this->redirect(array('action' => 'index'));
    }
    
}


