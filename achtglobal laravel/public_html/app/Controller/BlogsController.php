<?php
App::uses('AppController', 'Controller');
class BlogsController extends AppController {
	
	
	public function index() {
		
	$this->loadModel('Page');
	
    $page_details = $this->Page->find('first', array(
			'recursive' => 0,
			'order' => array(
				
			),
			'conditions' => array(
			'Page.id' => 14
			),
		));
	
			$this->setup_seo($page_details,'Page');

	}
   
   
   
	public function view($slug=null) {
		
    $page_details = $this->Blog->find('first', array(
			'recursive' => 0,
			'order' => array(
				
			),
			'conditions' => array(
			'Blog.slug' => $slug
			),
		));
	
			$this->setup_seo($page_details,'Blog');

	}
   
   
    public function admin_index() {
        $blogs = $this->Blog->find('all', [
 
        ]);
        $this->set(compact('blogs'));
    }
 
    public function admin_add() {
        if ($this->request->is('post')) {
			
		$this->request->data['Blog']['slug'] = $this->generateSlug($this->request->data['Blog']['name']);
		
/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Blog']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Blog']['slug'];

            $ext = $this->Img->ext($this->request->data['Blog']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/blogs';

            $upload = $this->Img->upload($this->request->data['Blog']['image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Blog']['image'] = $dst;
            } else {
                $this->request->data['Blog']['image'] = '';
            }
 
        }
		
		else {
                $this->request->data['Blog']['image'] = '';
            }
		
/********************************************/

            $this->Blog->create();
            if ($this->Blog->save($this->request->data)) {
                $this->Flash->flash('The Blog has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Blog could not be saved. Please, try again.');
            }
        }
 
    }

 

    public function admin_edit($id = null) {
        if (!$this->Blog->exists($id)) {
            throw new NotFoundException('Invalid Blog');
        }
		
		$Blog_details = $this->Blog->find('first', [
                'conditions' => [
                    'Blog.id' => $id
                ]
            ]);
			
        if 
			($this->request->is('post') || $this->request->is('put')) {
					$this->request->data['Blog']['slug'] = $this->generateSlug($this->request->data['Blog']['name']);


		 

/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Blog']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Blog']['slug'];

            $ext = $this->Img->ext($this->request->data['Blog']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/blogs';

            $upload = $this->Img->upload($this->request->data['Blog']['image']['tmp_name'], $targetdir, $origFile);

 

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Blog']['image'] = $dst;
            } else {
                $this->request->data['Blog']['image'] = '';
            }
 
        }
		
		
		else {
				                $this->request->data['Blog']['image'] = $Blog_details['Blog']['image'];
}
/********************************************/


            if ($this->Blog->save($this->request->data)) {
                $this->Flash->flash('The Blog has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Blog could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Blog->find('first', [
                'conditions' => [
                    'Blog.id' => $id
                ]
            ]);
        }
 
    }
	
		public function admin_change_blog_status()
    {
        if(!$this->request->is('AJAX'))
        {
            return $this->redirect(array('controller'=>'blogs', 'action'=>'index'));
        }
        
        if(!$this->Blog->save(array('id'=>$this->request->data['blog_id'], 'active'=>$this->request->data['status'])))
        {
            echo json_encode(array('status'=>'failure', 'message'=>'Unable to set status at the moment.'));
            die;
        }
        
        echo json_encode(array('status'=>'success', 'message'=>'Blog status updated.'));
        die;
    }


 

    public function admin_delete($id = null) {
        $this->Blog->id = $id;
        if (!$this->Blog->exists()) {
            throw new NotFoundException('Invalid Blog');
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Blog->delete()) {
            $this->Flash->flash('Blog deleted');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->flash('Blog was not deleted');
        return $this->redirect(['action' => 'index']);
    }

 

}
