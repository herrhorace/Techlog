<?php

Class Member extends AppModel  {


		public $HasMany = array(
		
			'Log'=> array(
			));
			
		public $hasAndBelongsTo = array(
			    'User'=> array(
			));
	
	
	
}