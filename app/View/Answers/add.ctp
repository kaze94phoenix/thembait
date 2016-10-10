<div class="answers form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Registar Resposta'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Outras Accoes</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Respostas'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Reclamacoes'), array('controller' => 'complaints', 'action' => 'index'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Answer', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('complaint_id', array('class' => 'form-control', 'placeholder' => 'Complaint Id','label'=>'Reclamacao'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Description','label'=>'Descricao'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->hidden('user_id', array('value'=>$this->Session->read('Auth.User.id'),'class' => 'form-control', 'placeholder' => 'User Id','label'=>'Utilizador'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submeter'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
