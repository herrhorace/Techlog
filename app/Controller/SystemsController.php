<?php

Class SystemsController extends AppController  {


		public function add() {
		
			
			//get all uav parts saved in the system
			
			$parts = $this->System->Part->find('list');
			$this->set('parts', $parts);
			
		   
		   //end get all uav parts saved in the system
			if ($this->request->is('post')) {
				// If the form data can be validated and saved...
					$this->System->create();
					$this->request->data['System']['user_id'] = $this->Auth->user('id');
				if ($this->System->save($this->request->data)) {
					// Set a session flash message and redirect.
					$this->Session->setFlash('System Created');
					return $this->redirect($this->referer());
				}
			}           
			
			$this->layout = 'dashboard';
		}
		
		
        public function view()  {
		
		    $systems = $this->System->find('all');
			$this->set('systems', $systems);
			
			$role = $this->Auth->user('id');
			$this->set('role', $role);
			
			$this->layout = 'dashboard';
		
		}
  
}