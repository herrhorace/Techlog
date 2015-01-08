<?php

Class Mission extends AppModel  {


			
		public $hasAndBelongsTo = array(
			    'User'=> array(
			));
			
		public $belongsTo = array(
			    'System'=> array(
			));
			
	
	
	
}