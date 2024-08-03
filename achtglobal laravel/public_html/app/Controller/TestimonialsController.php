<?php
App::uses('AppController', 'Controller');
class TestimonialsController extends AppController {
	
    public function admin_index() {
        $testimonials = $this->Testimonial->find('all', [
 
        ]);
        $this->set(compact('testimonials'));
    }
 
    public function admin_add() {
        if ($this->request->is('post')) {
			
		$this->request->data['Testimonial']['slug'] = $this->generateSlug($this->request->data['Testimonial']['name']);
		
/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Testimonial']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Testimonial']['slug'];

            $ext = $this->Img->ext($this->request->data['Testimonial']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/testimonials';

            $upload = $this->Img->upload($this->request->data['Testimonial']['image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Testimonial']['image'] = $dst;
            } else {
                $this->request->data['Testimonial']['image'] = '';
            }
 
        }
		
		else {
                $this->request->data['Testimonial']['image'] = '';
            }
		
/********************************************/

            $this->Testimonial->create();
            if ($this->Testimonial->save($this->request->data)) {
                $this->Flash->flash('The Testimonial has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Testimonial could not be saved. Please, try again.');
            }
        }
 
    }

 

    public function admin_edit($id = null) {
        if (!$this->Testimonial->exists($id)) {
            throw new NotFoundException('Invalid Testimonial');
        }
		
		$testimonial_details = $this->Testimonial->find('first', [
                'conditions' => [
                    'Testimonial.id' => $id
                ]
            ]);
			
        if 
			($this->request->is('post') || $this->request->is('put')) {
					$this->request->data['Testimonial']['slug'] = $this->generateSlug($this->request->data['Testimonial']['name']);


		 

/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Testimonial']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Testimonial']['slug'];

            $ext = $this->Img->ext($this->request->data['Testimonial']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/testimonials';

            $upload = $this->Img->upload($this->request->data['Testimonial']['image']['tmp_name'], $targetdir, $origFile);

 

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Testimonial']['image'] = $dst;
            } else {
                $this->request->data['Testimonial']['image'] = '';
            }
 
        }
		
		
		else {
				                $this->request->data['Testimonial']['image'] = $testimonial_details['Testimonial']['image'];
}
/********************************************/


            if ($this->Testimonial->save($this->request->data)) {
                $this->Flash->flash('The Testimonial has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Testimonial could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Testimonial->find('first', [
                'conditions' => [
                    'Testimonial.id' => $id
                ]
            ]);
        }
 
    }
	
		public function admin_change_testimonial_status()
    {
        if(!$this->request->is('AJAX'))
        {
            return $this->redirect(array('controller'=>'Pages', 'action'=>'index'));
        }
        
        if(!$this->Testimonial->save(array('id'=>$this->request->data['testimonial_id'], 'active'=>$this->request->data['status'])))
        {
            echo json_encode(array('status'=>'failure', 'message'=>'Unable to set status at the moment.'));
            die;
        }
        
        echo json_encode(array('status'=>'success', 'message'=>'Testimonial status updated.'));
        die;
    }


 

    public function admin_delete($id = null) {
        $this->Testimonial->id = $id;
        if (!$this->Testimonial->exists()) {
            throw new NotFoundException('Invalid Testimonial');
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Testimonial->delete()) {
            $this->Flash->flash('Testimonial deleted');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->flash('Testimonial was not deleted');
        return $this->redirect(['action' => 'index']);
    }

 

}
