<div class="card">

    <?php
echo $this->Html->css('style');

$form = $this->Form->create('Contato', array('id'=>'ContactAddForm'));
?>
<div class="inputsForm">
    <?php 
    $form .= $this->Form->input('Contato.name', array('id'=>'name'));
    $form .= $this->Form->input('Contato.email', array('id'=>'email'));
?>
</div>

<?php
$form .= $this->Form->input('Contato.telefone', array('id'=>'telefone'));
?>
<?php
$form .= $this->Form->end('Send') ;


echo $form;
?>  
</div>