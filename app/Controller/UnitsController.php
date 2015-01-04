<?php

Class UnitsController extends AppController  {


 public function add() {
    // Has any form data been POSTed?
    if ($this->request->is('post')) {
        // If the form data can be validated and saved...
		    $this->Unit->create();
			$this->request->data['Unit']['user_id'] = $this->Auth->user('id');
        if ($this->Unit->save($this->request->data)) {
            // Set a session flash message and redirect.
            $this->Session->setFlash('Unit Created');
            return $this->redirect($this->referer());
        }
    }
	
	$this->layout = 'dashboard';


}


  public function view()  {
  
  $role = $this->Auth->user('role');
  $this->set('role', $role);
  
  //if($this->Auth->user('id') == 'admin'){
  
       $units = $this->Unit->find('all');
	   $this->set('units', $units);
	   
	  // }
	  
	  $this->layout = 'dashboard';
	  
  
  }


}