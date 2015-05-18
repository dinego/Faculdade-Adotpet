<?php 

    echo $this->Form->create(array('User', 'role' => 'form'));

    echo $this->Form->input('nome', array('type' => 'text', 'label' => 'Nome Completo:', 'class' => 'form-control', 'placeholder' => 'Nome Completo', 'div' => array('class' => 'form-group col-md-6'), 'required'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('username', array('type' => 'text', 'label' => 'Seu E-mail:', 'class' => 'form-control', 'placeholder' => 'Digite seu E-mail', 'div' => array('class' => 'form-group col-md-6'), 'required')); 
    echo $this->Form->input('password', array('type' => 'password', 'class' => 'form-control', 'label' => 'Sua Senha:', 'placeholder' => 'Digite sua senha:', 'div' => array('class' => 'form-group col-md-3')));
    echo $this->Form->input('repassword', array('type' => 'password', 'label' => 'Repita Sua Senha:', 'class' => 'form-control', 'placeholder' => 'Digite sua senha novamente', 'div' => array('class' => 'form-group col-md-3'))); 
    echo $this->Form->input('telefone', array('type' => 'text', 'class' => 'form-control', 'label' => 'Telefone', 'placeholder' => 'Telefone', 'div' => array('class' => 'form-group col-md-6'), 'required'));
    echo $this->Form->input('celular', array('type' => 'text', 'label' => 'Celular', 'class' => 'form-control', 'placeholder' => 'Celular', 'div' => array('class' => 'form-group col-md-4'), 'required'));
    echo $this->Form->input('cpf', array('type' => 'text', 'class' => 'form-control', 'label' => 'CPF:', 'placeholder' => 'CPF', 'div' => array('class' => 'form-group col-md-8'), 'required'));     
    ?>
    <div class="col-md-3">
        <input type="submit" value="Salvar alterações" class="btn btn-primary">
    </div>
    <?php
    echo $this->Form->end(); 
    ?>