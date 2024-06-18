<?php 

App::uses("AppController","Controller");

class ContatosController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('contatos', $this->Contato->find('all'));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Contato->create();
            if ($this->Contato->save($this->request->data)) {
                $this->Flash->success(__('Sua mensagem foi enviada com sucesso!'));
                return $this->redirect(array('action' => 'add'));
            }
            $this->Flash->error(__('Houve um erro. Tente novamente.'));
        }
    }
}