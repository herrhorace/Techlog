<?php

class Dashboard extends AppModel {

	public $belongsTo = array('User'=>array(
		'className'=>'User',
		));
		
		public $hasMany = array(
	        'Unit'=> array(
			));	
		


	


}

