<div class="activitiesProjects view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Activities Project'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Activities Project'), array('action' => 'edit', $activitiesProject['ActivitiesProject']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Activities Project'), array('action' => 'delete', $activitiesProject['ActivitiesProject']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $activitiesProject['ActivitiesProject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Activities Projects'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Activities Project'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Projects'), array('controller' => 'projects', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Project'), array('controller' => 'projects', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Activities'), array('controller' => 'activities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Activity'), array('controller' => 'activities', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($activitiesProject['ActivitiesProject']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Project'); ?></th>
		<td>
			<?php echo $this->Html->link($activitiesProject['Project']['name'], array('controller' => 'projects', 'action' => 'view', $activitiesProject['Project']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Activity'); ?></th>
		<td>
			<?php echo $this->Html->link($activitiesProject['Activity']['id'], array('controller' => 'activities', 'action' => 'view', $activitiesProject['Activity']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Occupation User Id'); ?></th>
		<td>
			<?php echo h($activitiesProject['ActivitiesProject']['occupation_user_id']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

