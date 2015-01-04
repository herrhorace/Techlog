<?php

Class Unit extends AppModel  {


		public $belongsTo = array(
		
			'Log'=> array(
			));
			
		public $hasAndBelongsTo = array(
			    'User'=> array(
			));
	
	
	
}