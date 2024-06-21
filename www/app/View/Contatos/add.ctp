<div class="card">

    <?php
echo $this->Html->css('style');

$form = $this->Form->create('Contato', array('id'=>'ContactAddForm'));
?>
<div class="inputsForm">
    <?php 
    $form .= $this->Form->input('nome', array('id'=>'nome'));
    $form .= $this->Form->input('email', array('id'=>'email'));
    $form .= $this->Form->input('telefone', array('id'=>'telefone'));
?>
</div>
<?php
$form .= $this->Form->end('Send') ;

echo $this->Html->tag('h2','Cadastre seu contato');
echo $form;
?>  
</div>