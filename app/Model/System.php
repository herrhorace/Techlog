<?php

Class System extends AppModel  {

		public $hasAndBelongsTo = array(
			    'User'=> array(
			));
			
		public $hasMany = array(
			    'Mission'=> array(
			),

			    'Log'=> array(
			)			
			);
			
		public $belongsTo = array(
			    'Part'=> array(
			)			
			);
	
	
	
}