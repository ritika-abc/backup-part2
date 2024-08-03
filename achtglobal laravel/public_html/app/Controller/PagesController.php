<?php
App::uses('AppController', 'Controller');
class PagesController extends AppController {
	
	public function index() {
		
    $page_details = $this->Page->find('first', array(
			'recursive' => 0,
			'order' => array(
				
			),
			'conditions' => array(
			'Page.id' => 1
			),
		));
	
			$this->setup_seo($page_details,'Page');

	}
   
	public function about() {
		
    $page_details = $this->Page->find('first', array(
			'recursive' => 0,
			'order' => array(
				
			),
			'conditions' => array(
			'Page.id' => 2
			),
		));
	
			$this->setup_seo($page_details,'Page');

	}
   
	public function contact() {
		
    $page_details = $this->Page->find('first', array(
			'recursive' => 0,
			'order' => array(
				
			),
			'conditions' => array(
			'Page.id' => 4
			),
		));
	
			$this->setup_seo($page_details,'Page');

	}
	
	public function sitemap() {
		 $page_details = $this->Page->find('first', array(
			'recursive' => 0,
			'order' => array(
				
			),
			'conditions' => array(
			'Page.id' => 10
			),
		));
	
			$this->setup_seo($page_details,'Page');

	
	}
	
   
    public function admin_index() {
        $pages = $this->Page->find('all', [
 
        ]);
        $this->set(compact('pages'));
    }
 
    public function admin_add() {
        if ($this->request->is('post')) {
			
		$this->request->data['Page']['slug'] = $this->generateSlug($this->request->data['Page']['name']);
		
/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Page']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Page']['slug'];

            $ext = $this->Img->ext($this->request->data['Page']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/pages';

            $upload = $this->Img->upload($this->request->data['Page']['image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Page']['image'] = $dst;
            } else {
                $this->request->data['Page']['image'] = '';
            }
 
        }
		
		else {
                $this->request->data['Page']['image'] = '';
            }
		
/********************************************/

            $this->Page->create();
            if ($this->Page->save($this->request->data)) {
                $this->Flash->flash('The Page has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Page could not be saved. Please, try again.');
            }
        }
 
    }

 

    public function admin_edit($id = null) {
        if (!$this->Page->exists($id)) {
            throw new NotFoundException('Invalid Page');
        }
		
		$Page_details = $this->Page->find('first', [
                'conditions' => [
                    'Page.id' => $id
                ]
            ]);
			
        if 
			($this->request->is('post') || $this->request->is('put')) {
					$this->request->data['Page']['slug'] = $this->generateSlug($this->request->data['Page']['name']);


		 

/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Page']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Page']['slug'];

            $ext = $this->Img->ext($this->request->data['Page']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/pages';

            $upload = $this->Img->upload($this->request->data['Page']['image']['tmp_name'], $targetdir, $origFile);

 

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Page']['image'] = $dst;
            } else {
                $this->request->data['Page']['image'] = '';
            }
 
        }
		
		
		else {
				                $this->request->data['Page']['image'] = $Page_details['Page']['image'];
}
/********************************************/


            if ($this->Page->save($this->request->data)) {
                $this->Flash->flash('The Page has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Page could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Page->find('first', [
                'conditions' => [
                    'Page.id' => $id
                ]
            ]);
        }
 
    }
	
		public function admin_change_page_status()
    {
        if(!$this->request->is('AJAX'))
        {
            return $this->redirect(array('controller'=>'Pages', 'action'=>'index'));
        }
        
        if(!$this->Page->save(array('id'=>$this->request->data['page_id'], 'active'=>$this->request->data['status'])))
        {
            echo json_encode(array('status'=>'failure', 'message'=>'Unable to set status at the moment.'));
            die;
        }
        
        echo json_encode(array('status'=>'success', 'message'=>'Page status updated.'));
        die;
    }


 

    public function admin_delete($id = null) {
        $this->Page->id = $id;
        if (!$this->Page->exists()) {
            throw new NotFoundException('Invalid Page');
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Page->delete()) {
            $this->Flash->flash('Page deleted');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->flash('Page was not deleted');
        return $this->redirect(['action' => 'index']);
    }

 

}
