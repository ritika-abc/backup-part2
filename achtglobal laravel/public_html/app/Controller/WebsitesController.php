<?php

App::uses('AppController', 'Controller');

class WebsitesController extends AppController {
 
   public function admin_index($id = 1) {
        if (!$this->Website->exists($id)) {
            throw new NotFoundException('Invalid website');
        }
		
  //	$this->Website->query("ALTER TABLE `pages` ADD `description1` text NULL   AFTER `description`;");

 
 
		$website_details = $this->Website->find('first', [
                'conditions' => [
                    'Website.id' => $id
                ]
            ]);
        if ($this->request->is('post') || $this->request->is('put')) {
			
			$this->request->data['Website']['id'] = 1;
							
			
			 	$this->request->data['Website']['slug'] = $this->generateSlug($this->request->data['Website']['name']);




/********************************************/
            //    $this->request->data['Website']['logo'] = '';

if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Website']['logo']['name'])) {


            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Website']['slug'];
		    
             $ext = $this->Img->ext($this->request->data['Website']['logo']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images';

            $upload = $this->Img->upload($this->request->data['Website']['logo']['tmp_name'], $targetdir, $origFile);

			//echo $upload; exit;
	
            if($upload == 'Success') {
                
                $this->request->data['Website']['logo'] = $dst;
            } else {
              //  $this->request->data['Website']['image'] = '';
            }
 
        }
else {
				                $this->request->data['Website']['logo'] = $website_details['Website']['logo'];
}
/********************************************/

            if ($this->Website->save($this->request->data)) {
                $this->Flash->flash('The website has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The website could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Website->find('first', [
                'conditions' => [
                    'Website.id' => $id
                ]
            ]);
        }
 
    }
  

}
