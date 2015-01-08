


<div class="add_ondemand col-md-6">



	<h3>Add UAV System</h3>
	<?php
	echo $this->Form->create('System', array('type'=>'file'));
			echo $this->Form->input('name', array('placeholder'=>'name', 'div'=>'form-group', 'class'=>'form-control'));
			echo $this->Form->textarea('description', array('placeholder'=>'description', 'div'=>'form-group', 'class'=>'form-control'));
			echo $this->Form->input('part_id', array(
				'options' => $parts, 'div'=>'form-group', 'class'=>'form-control'
			));
			echo $this->Form->input('part_2', array(
				'options' => $parts, 'div'=>'form-group', 'class'=>'form-control'
			));
			echo $this->Form->input('part_3', array(
				'options' => $parts, 'div'=>'form-group', 'class'=>'form-control'
			));
			echo $this->Form->input('part_4', array(
				'options' => $parts, 'div'=>'form-group', 'class'=>'form-control'
			));
			echo $this->Form->input('part_5', array(
				'options' => $parts, 'div'=>'form-group', 'class'=>'form-control'
			));
			echo $this->Form->input('part_6', array(
				'options' => $parts, 'div'=>'form-group', 'class'=>'form-control'
			));
			echo $this->Form->input('part_7', array(
				'options' => $parts, 'div'=>'form-group', 'class'=>'form-control'
			));
			echo $this->Form->input('part_8', array(
				'options' => $parts, 'div'=>'form-group', 'class'=>'form-control'
			));
			echo $this->Form->input('part_9', array(
				'options' => $parts, 'div'=>'form-group', 'class'=>'form-control'
			));
			echo $this->Form->input('part_10', array(
				'options' => $parts, 'div'=>'form-group', 'class'=>'form-control'
			));
			echo $this->Form->input('part_11', array(
				'options' => $parts, 'div'=>'form-group', 'class'=>'form-control'
			));
			echo $this->Form->submit('Add System', array('class'=>'btn btn-default')); ?>
	<?php $this->form->end(); ?>
</div>


