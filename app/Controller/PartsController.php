<?php

Class PartsController extends AppController  {


 public function add() {
    // Has any form data been POSTed?
    if ($this->request->is('post')) {
        // If the form data can be validated and saved...
		    $this->Part->create();
			$this->request->data['Part']['user_id'] = $this->Auth->user('id');
        if ($this->Part->save($this->request->data)) {
            // Set a session flash message and redirect.
            $this->Session->setFlash('Component Created');
            return $this->redirect($this->referer());
        }
    }
	
	$this->layout = 'dashboard';


}


  public function view()  {
  
  $role = $this->Auth->user('role');
  $this->set('role', $role);
  
  //if($this->Auth->user('id') == 'admin'){
  
       $parts = $this->Part->find('all');
	   $this->set('parts', $parts);
	   
	  // }
	  
	  $this->layout = 'dashboard';
	  
  
  }


}