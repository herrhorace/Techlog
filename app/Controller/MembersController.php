<?php


Class MembersController extends AppController  {


		public function add_log() {
		
		function getRandomString($length = 7) {
			$validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ1234567890";
			$validCharNumber = strlen($validCharacters);
			$result = "";
			for ($i = 0; $i < $length; $i++) {

				$index = mt_rand(0, $validCharNumber - 1);

				$result .= $validCharacters[$index];
			}
			return $result;
        }
		
		$role = $this->Auth->user('role');
		$this->set('role', $role);
		
		$units = $this->Member->Unit->find('list');
		$this->set('units', $units);
		//new code
	   
	   //end new code
			if ($this->request->is('post')) {			
						$filename = '';
				if ($this->request->is('post')) { // checks for the post values
					$uploadData = $this->data['Member']['profile_pic'];
					if ( $uploadData['size'] == 0 || $uploadData['error'] !== 0) { // checks for the errors and size of the uploaded file
						return false;
					}				

					$filename = basename($uploadData['name']); // gets the base name of the uploaded file
					$uploadFolder = WWW_ROOT. 'files';  // path where the uploaded file has to be saved
					$filename = time() .'_'. $filename; // adding time stamp for the uploaded image for uniqueness
					$uploadPath =  $uploadFolder . DS . $filename;
					if( !file_exists($uploadFolder) ){
						mkdir($uploadFolder); // creates folder if  not found
					}
					if (!move_uploaded_file($uploadData['tmp_name'], $uploadPath)) {
						return false;
					}
				
				$this->request->data['Member']['user_id'] = $this->Auth->user('id');
				$this->request->data['Member']['profile_pic'] = $filename;
				
				$this->Member->create();
				if ($this->Log->save($this->request->data)) {
					$this->Session->setFlash(__('crew member added'));
					$this->redirect($this->referer());
				} else {
					$this->Session->setFlash(__('crew member added'));
				}	
			}
		}
		
		$this->layout = 'dashboard';
	 }
  
  
}