




<div class="add_ondemand col-md-6">



	<h3>Add role</h3>
<?php echo $this->Form->create('Role', array('class'=>'form-horizontal', 'type'=>'file'));?>
		<?php
       
		echo $this->Form->input('name', array('placeholder'=>'name', 'div'=>'form-group', 'label'=>false, 'class'=>'form-control'));
		
		echo $this->Form->submit('Create Role', array('class' => 'form-submit btn btn-success',  'title' => 'Click here to add role') ); 
		
?>
<?php echo $this->Form->end(); ?>
</div>
