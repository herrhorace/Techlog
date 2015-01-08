


<div class="add_ondemand col-md-6">



	<h3>Add Component</h3>
	<?php
	echo $this->Form->create('Part', array('type'=>'file'));
			echo $this->Form->input('name', array('placeholder'=>'name', 'div'=>'form-group', 'class'=>'form-control'));
			echo $this->Form->input('brand', array('placeholder'=>'name', 'div'=>'form-group', 'class'=>'form-control'));
			echo $this->Form->textarea('description', array('placeholder'=>'description', 'div'=>'form-group', 'class'=>'form-control'));
			echo $this->Form->input('endurance_value', array('placeholder'=>'endurance value', 'div'=>'form-group', 'class'=>'form-control'));
			echo $this->Form->submit('Add Component', array('class'=>'btn btn-default')); ?>
	<?php $this->form->end(); ?>
</div>


