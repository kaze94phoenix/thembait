<div class="projects index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Projectos'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Outras opcoes</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
                                                            <?php if ($this->Session->read('Auth.User.usertype_id')==='1'):?>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Pre-registar Projecto'), array('action' => 'preregister'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Projectos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Reclamacoes'), array('controller' => 'complaints', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nova Reclamacao'), array('controller' => 'complaints', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Reclamacoes'), array('controller' => 'complaints', 'action' => 'index'), array('escape' => false)); ?> </li>
		    <?php endif;?>  
                <?php if ($this->Session->read('Auth.User.usertype_id')==='2'):?>
                    li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Novo Projecto'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Utilizadores'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Novo Utilizador'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Actividades'), array('controller' => 'activities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nova Actividade'), array('controller' => 'activities', 'action' => 'add'), array('escape' => false)); ?> </li>
							
                    <?php endif;?>  
								<</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th>Nome<?php //echo $this->Paginator->sort('name'); ?></th>
						<th>Descricao<?php //echo $this->Paginator->sort('description'); ?></th>
						<th>Tipo de Sistema<?php //echo $this->Paginator->sort('systemtype'); ?></th>
						<th>Prazo<?php //echo $this->Paginator->sort('deadline'); ?></th>
						
						<th>Cliente<?php //echo $this->Paginator->sort('user_id'); ?></th>
						<th>Estado<?php //echo $this->Paginator->sort('activo'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($projects as $project): ?>
					<tr>
						<td><?php echo h($project['Project']['name']); ?>&nbsp;</td>
						<td><?php echo h($project['Project']['description']); ?>&nbsp;</td>
						<td><?php echo h($project['Project']['systemtype']); ?>&nbsp;</td>
						<td><?php echo h($project['Project']['deadline']); ?>&nbsp;</td>
						
								<td>
			<?php echo $this->Html->link($project['User']['name'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
		</td><?php if (h($project['Project']['activo'])===false): ?>
						<td><button type="button" class="btn btn-round btn-danger">Inactivo</button>&nbsp;</td>
                                                <?php endif;?>
                                                <?php if (h($project['Project']['activo'])===true): ?>
						<td><button type="button" class="btn btn-round btn-success">Activo</button>&nbsp;</td>
                                                <?php endif;?>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $project['Project']['id']), array('escape' => false)); ?>
							<?php if ($this->Session->read('Auth.User.usertype_id')==='2'):?>
                                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $project['Project']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $project['Project']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?>
						<?php endif;?>
                                                </td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->