<?php 

class ContatosController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('messages', $this->Message->find('all'));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Message->create();
            if ($this->Message->save($this->request->data)) {
                $this->Flash->success(__('Sua mensagem foi enviada com sucesso!'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Houve um erro. Tente novamente.'));
        }
    }
}