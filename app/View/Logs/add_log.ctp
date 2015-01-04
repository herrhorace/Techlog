
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">


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


<script>
/*$("#DashboardAddForm").submit(function(e)
{
 
    var formObj = $(this);
    var formURL = formObj.attr("action");
    var formData = new FormData(this);
    $.ajax({
        url: formURL,
    type: 'POST',
        data:  formData,
    mimeType:"multipart/form-data",
    contentType: false,
        cache: false,
        processData:false,
    success: function(data, textStatus, jqXHR)
    {
 
    },
     error: function(jqXHR, textStatus, errorThrown)
     {
     }         
    });
    e.preventDefault(); //Prevent Default action.
    e.unbind();
});
$("#DashboardAddForm").submit(); *///Submit the form 
</script>


