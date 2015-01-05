<?php

Class Member extends AppModel  {


		public $HasMany = array(
		
			'Log'=> array(
			));
			
		public $hasAndBelongsTo = array(
			    'User'=> array(
			));
	
		public $belongsTo = array(
		
			'Unit'=> array(
			),
			
			'Role'=> array(
			));	
	
}