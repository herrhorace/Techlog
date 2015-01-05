


<div class="add_ondemand col-md-6">



	<h3>Add Log</h3>
	<?php
	echo $this->Form->create('Member', array('type'=>'file'));
			echo $this->Form->input('first_name', array('placeholder'=>'First Name', 'div'=>'form-group', 'class'=>'form-control'));
			echo $this->Form->input('last_name', array('placeholder'=>'Last Name', 'div'=>'form-group', 'class'=>'form-control'));
			echo $this->Form->input('location', array('placeholder'=>'location', 'div'=>'form-group', 'class'=>'form-control'));
			if($role == 'admin')  {
				echo $this->Form->input('unit_id', array('option'=> $units, 'class'=>'form-control')); 
			};
			echo $this->Form->input('profile_pic', array('type' => 'file','label' => 'Profile image', 'empty' => true));
			echo $this->Form->submit('Add log', array('class'=>'btn btn-default')); ?>
	<?php $this->form->end(); ?>
</div>

