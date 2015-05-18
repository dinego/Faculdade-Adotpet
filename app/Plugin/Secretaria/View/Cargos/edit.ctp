<div class="col-md-12">
	<?php echo $this->Form->create(array('Cargo', 'role' => 'form', 'class' => 'desable-form formModal')); 

		// cadeado para desbloquear o form
    	echo $this->element('desbloquearForm');
		
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('nome', array('label' => 'Nome: ', 'type' => 'text', 'class' => 'form-control', 'div' => array('class' => 'form-group col-md-12')));
		echo $this->Form->input('descricao', array('label' => 'Descrição das Funções: ', 'type' => 'textarea', 'class' => 'form-control', 'div' => 'form-group col-md-12'));
	?>
	<div class="modal fade over-hidden" id="confirmar" tabindex="-1" data-keyboard="false" data-backdrop="static" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content shadowModal">
				<div class="modal-header">
					<h4 class="modal-title"><i class="fa fa-exclamation-triangle"></i> Confirme as alterações dos dados</h4>
				</div>
				<div class="modal-body">
					Tem certeza de que quer salvar as alterações nesse cadastro?
				</div>
				<div class="modal-footer">
					<button class="btn btn-default nao-salvar" type="button">Não quero mais salvar</button>
					<input class="btn btn-warning" type="submit" value="Sim, quero salvar">
				</div>
			</div>
		</div>
	</div>
	<?php

        // modal com confirmação de alteração de cadastro
        echo $this->element('modal/controleForm');

        // botoões do formulário
        echo $this->element('botoesForm');

        echo $this->Form->end(); 
    ?>
</div>