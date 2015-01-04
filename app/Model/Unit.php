<?php

Class Unit extends AppModel  {


		public $belongsTo = array(
		
			'Dashboard'=> array(
			));
			
		public $hasAndBelongsTo = array(
			    'User'=> array(
			));
	
	
	
}