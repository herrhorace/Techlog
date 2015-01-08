<?php


Class LogsController extends AppController  {


  public function index()  {
  
    //set layout
	
	$this->layout = 'Dashboard';
  
  
  }
  
  
   public function data()  {

                
				$role = $this->Auth->user('role');
				$this->Set('role', $role);
  
                $data = $this->Log->find('all');
				  $this->set('data', $data);
  

    //set layout
	
	$this->layout = 'dashboard';
	
	//set layout
	
	
  
  
  }
  
  
	public function add_log() {
	
	$role = $this->Auth->user('role');
	$this->set('role', $role);
	
	$units = $this->Log->Unit->find('list');
	$this->set('units', $units);
	
	$systems = $this->Log->System->find('list');
	$this->set('systems', $systems);
	//new code
   
   //end new code
		if ($this->request->is('post')) {
		    function getRandomString($length = 22) {
        $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ1234567890_";
        $validCharNumber = strlen($validCharacters);
        $result = "";
        for ($i = 0; $i < $length; $i++) {

            $index = mt_rand(0, $validCharNumber - 1);

            $result .= $validCharacters[$index];
        }
        return $result;
    }
		
		            $filename = '';
            if ($this->request->is('post')) { // checks for the post values
		 $uploadData2 = $this->data['Log']['log'];
                if ( $uploadData2['size'] == 0 || $uploadData2['error'] !== 0) { // checks for the errors and size of the uploaded file
                    return false;
                }
		 $uploadData = $this->data['Log']['kmz'];
                if ( $uploadData['size'] == 0 || $uploadData['error'] !== 0) { // checks for the errors and size of the uploaded file
                    return false;
                }				

                $filename2 = basename($uploadData2['name']); // gets the base name of the uploaded file
                $filename = basename($uploadData['name']); // gets the base name of the uploaded file
                $uploadFolder = WWW_ROOT. 'files';  // path where the uploaded file has to be saved
                $filename2 = time() .'_'. $filename2; // adding time stamp for the uploaded image for uniqueness
                $filename = time() .'_'. $filename; // adding time stamp for the uploaded image for uniqueness
                $uploadPath2 =  $uploadFolder . DS . $filename2;
                $uploadPath =  $uploadFolder . DS . $filename;
                if( !file_exists($uploadFolder) ){
                    mkdir($uploadFolder); // creates folder if  not found
                }
                if (!move_uploaded_file($uploadData2['tmp_name'], $uploadPath2)) {
                    return false;
                }
                if (!move_uploaded_file($uploadData['tmp_name'], $uploadPath)) {
                    return false;
                }
			
			$this->request->data['Log']['user_id'] = $this->Auth->user('id');
            $this->request->data['Log']['url'] = getRandomString();
            $this->request->data['Log']['log'] = $filename2;
			$this->request->data['Log']['kmz'] = $filename;
			
			$this->Log->create();
			if ($this->Log->save($this->request->data)) {
				$this->Session->setFlash(__('log added'));
				$this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('log added'));
			}	
		}
	}
	
	$this->layout = 'dashboard';
 }
 
 public function delete_log($id)
         {	
		   
			$delete_file = $this->Log->findById($id);	
			$this->set('delete_file', $delete_file);			
            $this->Log->delete($id);
			
			$kmz = new File(WWW_ROOT .'/files/' . $delete_file['Log']['kmz']);
			$log = new File(WWW_ROOT .'/files/' . $delete_file['Log']['log']);


            if($kmz->delete() || $log->delete() ) {
                $this->Session->setFlash('log deleted');
				
			  }
			  
			$this->redirect($this->referer());
			

         }
 
 
 public function view($url)  {
 
			 $data = $this->Log->findByUrl($url);
			 
			 $this->Set('data', $data);
 
 }
 
 
 //units
 
 public function details()  {
 
 }


}