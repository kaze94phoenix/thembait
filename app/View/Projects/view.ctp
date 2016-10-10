<div class="projects view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Projecto'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Outras Opcoes</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<?php if ($this->Session->read('Auth.User.usertype_id')==='2'):?>
                                                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nova Actividade de Projecto'), array('controller'=>'activitiesprojects','action' => 'add'), array('escape' => false)); ?></li>
                                                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Actividade do Projecto'), array('controller'=>'activitiesprojects','action' => 'index'), array('escape' => false)); ?></li>
                                                            
                                                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Projecto'), array('action' => 'edit', $project['Project']['id']), array('escape' => false)); ?> </li>
		            
                                                            <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Projecto'), array('action' => 'delete', $project['Project']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Utilizador'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Novo Utilizador'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Actividades'), array('controller' => 'activities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nova Actividade'), array('controller' => 'activities', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Novo Projecto'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<?php endif;?>          
                <?php if ($this->Session->read('Auth.User.usertype_id')==='1'):?>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Pre-registar Projecto'), array('action' => 'preregister'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Projectos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Reclamacoes'), array('controller' => 'complaints', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nova Reclamacao'), array('controller' => 'complaints', 'action' => 'add'), array('escape' => false)); ?> </li>
		<?php endif;?>  
                                                        </ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php //echo __('Id'); ?></th>
		<td>
			<?php //echo h($project['Project']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome'); ?></th>
		<td>
			<?php echo h($project['Project']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descricao'); ?></th>
		<td>
			<?php echo h($project['Project']['description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipo de Sistema'); ?></th>
		<td>
			<?php echo h($project['Project']['systemtype']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Prazo'); ?></th>
		<td>
			<?php echo h($project['Project']['deadline']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Progresso'); ?></th>
		<td>
			<?php echo $progress.'%';//h($project['Project']['progress']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cliente'); ?></th>
		<td>
			<?php echo $this->Html->link($project['User']['name'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Estado'); ?></th>
		<?php if (h($project['Project']['activo'])===false): ?>
						<td><button type="button" class="btn btn-round btn-danger">Inactivo</button>&nbsp;</td>
                                                <?php endif;?>
                                                <?php if (h($project['Project']['activo'])===true): ?>
						<td><button type="button" class="btn btn-round btn-success">Activo</button>&nbsp;</td>
                                                <?php endif;?>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Reclamacoes Relacionadas'); ?></h3>
	<?php if (!empty($project['Complaint'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($project['Complaint'] as $complaint): ?>
		<tr>
			<td><?php echo $complaint['id']; ?></td>
			<td><?php echo $complaint['title']; ?></td>
			<td><?php echo $complaint['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'complaints', 'action' => 'view', $complaint['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'complaints', 'action' => 'edit', $complaint['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'complaints', 'action' => 'delete', $complaint['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $complaint['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>
<?php if ($this->Session->read('Auth.User.usertype_id')==='1'):?>
	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nova Reclamacao'), array('controller' => 'complaints', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
        <?php endif;?>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Actividades Relacionadas'); ?></h3>
	<?php if (!empty($project['Activity'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Designacao'); ?></th>
		<th><?php echo __('Progresso do Estagio'); ?></th>
		
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($project['Activity'] as $activity): ?>
		<tr>
			<td><?php echo $activity['id']; ?></td>
			<td><?php echo $activity['designation']; ?></td>
			<td><?php echo $activity['progress'].'%'; ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'activities', 'action' => 'view', $activity['id']), array('escape' => false)); ?>
                            <?php if ($this->Session->read('Auth.User.usertype_id')==='2'):?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'activities', 'action' => 'edit', $activity['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'activities', 'action' => 'delete', $activity['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $activity['id'])); ?>
			<?php endif; ?>
                        </td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>
<?php if ($this->Session->read('Auth.User.usertype_id')==='2'):?>
	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nova Actividade'), array('controller' => 'activities', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
        <?php endif;?>
	</div><!-- end col md 12 -->
</div>
