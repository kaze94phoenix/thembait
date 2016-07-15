<div class="users form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Sign Up</h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-9">
			<?php echo $this->Form->create('User', array('role' => 'form','class'=>'form-login')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('datebirth', array('class' => 'form-control', 'placeholder' => 'Datebirth'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nuit', array('class' => 'form-control', 'placeholder' => 'Nuit'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('contact', array('class' => 'form-control', 'placeholder' => 'Contact'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Username'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->hidden('usertype_id', array('value'=>'1','class' => 'form-control', 'placeholder' => 'Usertype Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->hidden('occupation_id', array('value'=>'4','class' => 'form-control', 'placeholder' => 'Occupation Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
