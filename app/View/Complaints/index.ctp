<div class="complaints index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Reclamacoes'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Outras Opcoes</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
                                                            <?php if ($this->Session->read('Auth.User.usertype_id')==='1'):?>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nova Reclamacao'), array('action' => 'add'), array('escape' => false)); ?></li>
                                                                <?php endif;?>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Projectos'), array('controller' => 'projects', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Respostas'), array('controller' => 'answers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<?php if ($this->Session->read('Auth.User.usertype_id')==='2'):?>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Novas Respostas'), array('controller' => 'answers', 'action' => 'add'), array('escape' => false)); ?> </li>
							<?php endif;?>
                                                        </ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th>ID<?php //echo $this->Paginator->sort('id'); ?></th>
						<th>Titulo<?php //echo $this->Paginator->sort('title'); ?></th>
						<th>Descricao<?php //echo $this->Paginator->sort('description'); ?></th>
						<th>Projecto<?php //echo $this->Paginator->sort('project_id'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($complaints as $complaint): ?>
					<tr>
						<td><?php echo h($complaint['Complaint']['id']); ?>&nbsp;</td>
						<td><?php echo h($complaint['Complaint']['title']); ?>&nbsp;</td>
						<td><?php echo h($complaint['Complaint']['description']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($complaint['Project']['name'], array('controller' => 'projects', 'action' => 'view', $complaint['Project']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $complaint['Complaint']['id']), array('escape' => false)); ?>
                                                    
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $complaint['Complaint']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $complaint['Complaint']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $complaint['Complaint']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Pagina {:page} de {:pages}, mostrando {:current} registos de {:count} total, comecando no registo {:start}, terminando no {:end}')));?></small>
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