




<div class="add_ondemand col-md-6">



	<h3>Add Unit</h3>
<?php echo $this->Form->create('Unit', array('class'=>'form-horizontal', 'type'=>'file'));?>
		<?php
       
		echo $this->Form->input('name', array('placeholder'=>'name', 'div'=>'form-group', 'label'=>false, 'class'=>'form-control'));
		
		echo $this->Form->submit('Create Unit', array('class' => 'form-submit btn btn-success',  'title' => 'Click here to add the user') ); 
		
?>
<?php echo $this->Form->end(); ?>
</div>
