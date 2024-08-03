<?php
App::uses('AppController', 'Controller');
class GalleriesController extends AppController {
	
    public function admin_index() {
        $galleries = $this->Gallery->find('all', [
 
        ]);
        $this->set(compact('galleries'));
    }
 
    public function admin_add() {
        if ($this->request->is('post')) {
			
		$this->request->data['Gallery']['slug'] = $this->generateSlug($this->request->data['Gallery']['name']);
		
/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Gallery']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Gallery']['slug'];

            $ext = $this->Img->ext($this->request->data['Gallery']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/galleries';

            $upload = $this->Img->upload($this->request->data['Gallery']['image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Gallery']['image'] = $dst;
            } else {
                $this->request->data['Gallery']['image'] = '';
            }
 
        }
		
		else {
                $this->request->data['Gallery']['image'] = '';
            }
		
/********************************************/

            $this->Gallery->create();
            if ($this->Gallery->save($this->request->data)) {
                $this->Flash->flash('The Gallery has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Gallery could not be saved. Please, try again.');
            }
        }

		$this->loadModel('Product');
		$products = $this->Product->find('list', array(
		'conditions' => array('Product.active' => 1)
		)
		);
		$this->set(compact('products'));	
 
    }

 

    public function admin_edit($id = null) {
        if (!$this->Gallery->exists($id)) {
            throw new NotFoundException('Invalid Gallery');
        }
		
		$testimonial_details = $this->Gallery->find('first', [
                'conditions' => [
                    'Gallery.id' => $id
                ]
            ]);
			
        if 
			($this->request->is('post') || $this->request->is('put')) {
					$this->request->data['Gallery']['slug'] = $this->generateSlug($this->request->data['Gallery']['name']);


		 

/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Gallery']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Gallery']['slug'];

            $ext = $this->Img->ext($this->request->data['Gallery']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/galleries';

            $upload = $this->Img->upload($this->request->data['Gallery']['image']['tmp_name'], $targetdir, $origFile);

 

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Gallery']['image'] = $dst;
            } else {
                $this->request->data['Gallery']['image'] = '';
            }
 
        }
		
		
		else {
				                $this->request->data['Gallery']['image'] = $testimonial_details['Gallery']['image'];
}
/********************************************/


            if ($this->Gallery->save($this->request->data)) {
                $this->Flash->flash('The Gallery has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Gallery could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Gallery->find('first', [
                'conditions' => [
                    'Gallery.id' => $id
                ]
            ]);
        }
		
		
		$this->loadModel('Product');
		$products = $this->Product->find('list', array(
		'conditions' => array('Product.active' => 1)
		)
		);
		$this->set(compact('products'));	

 
    }
	
		public function admin_change_galleries_status()
    {
        if(!$this->request->is('AJAX'))
        {
            return $this->redirect(array('controller'=>'Pages', 'action'=>'index'));
        }
        
        if(!$this->Gallery->save(array('id'=>$this->request->data['gallery_id'], 'active'=>$this->request->data['status'])))
        {
            echo json_encode(array('status'=>'failure', 'message'=>'Unable to set status at the moment.'));
            die;
        }
        
        echo json_encode(array('status'=>'success', 'message'=>'Gallery status updated.'));
        die;
    }


 

    public function admin_delete($id = null) {
        $this->Gallery->id = $id;
        if (!$this->Gallery->exists()) {
            throw new NotFoundException('Invalid Gallery');
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Gallery->delete()) {
            $this->Flash->flash('Gallery deleted');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->flash('Gallery was not deleted');
        return $this->redirect(['action' => 'index']);
    }

 

}
