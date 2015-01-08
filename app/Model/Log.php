<?php

class Log extends AppModel {

	public $belongsTo = array('User'=>array(
		'className'=>'User',
		),
		
		'Unit'=> array(
			),

		'System'=> array(
			)			
		
		);
				


	


}

