

<?php
    echo $this->start('css');
    echo "";
    echo $this->end();
?>

<!-- app/View/Users/add.ctp -->
<div class="users-parent">
<div class="users form">
   <div class="form-header">
      Login
   </div>
<?php echo $this->Form->create('User', array('class'=>'form-horizontal', 'type'=>'file'));?>
		<?php
       
		echo $this->Form->input('username', array('placeholder'=>'username', 'div'=>'form-group', 'label'=>false, 'class'=>'form-control'));
		
        echo $this->Form->input('password', array('placeholder'=>'Password', 'div'=>'form-group', 'label'=>false, 'class'=>'form-control'));
		
		echo $this->Form->submit('Log in', array('class' => 'form-submit btn btn-success',  'title' => 'Click here to add the user') ); 
		
?>
<?php echo $this->Form->end(); ?>
</div>

</div>

<script>
$("select").change(function() {
    // hide all brands first
    $(".branDiv").hide();
    // val is something like #div1 or #div2
    var targetId = $(this).val();
    console.log($(targetId).html());
    // show the new selected one
    $(targetId).show();
});
</script>