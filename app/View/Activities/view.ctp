<div class="activities view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Activity'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Activity'), array('action' => 'edit', $activity['Activity']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Activity'), array('action' => 'delete', $activity['Activity']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $activity['Activity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Activities'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Activity'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Stages'), array('controller' => 'stages', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Stage'), array('controller' => 'stages', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Occupations Users'), array('controller' => 'occupations_users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Occupations User'), array('controller' => 'occupations_users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Projects'), array('controller' => 'projects', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Project'), array('controller' => 'projects', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($activity['Activity']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Designation'); ?></th>
		<td>
			<?php echo h($activity['Activity']['designation']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Description'); ?></th>
		<td>
			<?php echo h($activity['Activity']['description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Stage'); ?></th>
		<td>
			<?php echo $this->Html->link($activity['Stage']['designation'], array('controller' => 'stages', 'action' => 'view', $activity['Stage']['id'])).'--'.h($activity['Activity']['progress']).'%'; ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Occupations Users'); ?></h3>
	<?php if (!empty($activity['OccupationsUser'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Occupation Id'); ?></th>
		<th><?php echo __('Activity Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($activity['OccupationsUser'] as $occupationsUser): ?>
		<tr>
			<td><?php echo $occupationsUser['id']; ?></td>
			<td><?php echo $occupationsUser['user_id']; ?></td>
			<td><?php echo $occupationsUser['occupation_id']; ?></td>
			<td><?php echo $occupationsUser['activity_id']; ?></td>
			<td><?php echo $occupationsUser['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'occupations_users', 'action' => 'view', $occupationsUser['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'occupations_users', 'action' => 'edit', $occupationsUser['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'occupations_users', 'action' => 'delete', $occupationsUser['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $occupationsUser['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Occupations User'), array('controller' => 'occupations_users', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($activity['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Systemtype'); ?></th>
		<th><?php echo __('Deadline'); ?></th>
		<th><?php echo __('Progress'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($activity['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['name']; ?></td>
			<td><?php echo $project['description']; ?></td>
			<td><?php echo $project['systemtype']; ?></td>
			<td><?php echo $project['deadline']; ?></td>
			<td><?php echo $project['progress']; ?></td>
			<td><?php echo $project['user_id']; ?></td>
			<td><?php echo $project['activo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'projects', 'action' => 'view', $project['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'projects', 'action' => 'edit', $project['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'projects', 'action' => 'delete', $project['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Project'), array('controller' => 'projects', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
