<?php

Class Unit extends AppModel  {


			
		public $hasAndBelongsTo = array(
			    'User'=> array(
			));
			
		public $hasMany = array(
			    'Member'=> array(
			),
			    'Log'=> array(
			)			
			);
	
	
	
}