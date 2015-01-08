<?php

Class Component extends AppModel  {


		public $HasMany = array(
		
			'System'=> array(
			));
			
		public $hasAndBelongsTo = array(
			    'User'=> array(
			));
	
	
}