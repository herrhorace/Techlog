


<div class="add_ondemand col-md-6">



	<h3>Add Log</h3>
	<?php
	echo $this->Form->create('Log', array('type'=>'file'));
			echo $this->Form->input('title', array('placeholder'=>'name', 'div'=>'form-group', 'class'=>'form-control'));
			echo $this->Form->textarea('notes', array('placeholder'=>'description', 'div'=>'form-group', 'class'=>'form-control'));
			echo $this->Form->input('location', array('placeholder'=>'location', 'div'=>'form-group', 'class'=>'form-control'));
			if($role == 'admin')  {
				echo $this->Form->input('unit_id', array('option'=> $units, 'class'=>'form-control')); 
			};
			echo $this->Form->input('kmz', array('type' => 'file','label' => 'KMZ file', 'empty' => true));
			echo $this->Form->input('log', array('type' => 'file','label' => 'Log file', 'empty' => true));
			echo $this->Form->submit('Add log', array('class'=>'btn btn-default')); ?>
	<?php $this->form->end(); ?>
</div>


