<?php 

class Contato extends AppModel {
    public $validate = array(
        'nome' => array(
            'minLength' => array(
                'rule' => array('minLength', '2'),
                'message' => 'Seu nome deve conter pelo menos 2 caractéres'
            ),
                'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => 'Nome obrigatório'
                )
        ),
        'email' => array(
            'rule' => 'email',
            'message' => 'Email inválido'
        ),
        'telefone' => array(
            'between' => array(
                'rule' => array('lengthBetween', 5, 1200),
                'message' => 'Digite seu telefone'
            )
        ),
    );
}