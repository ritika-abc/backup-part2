<?php
App::uses('AppController', 'Controller');
class SlidersController extends AppController {
   
    public function admin_index() {
        $sliders = $this->Slider->find('all', [
 
        ]);
        $this->set(compact('sliders'));
    }
 
    public function admin_add() {
        if ($this->request->is('post')) {
			
		$this->request->data['Slider']['slug'] = $this->generateSlug($this->request->data['Slider']['name']);
		
/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Slider']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Slider']['slug'];

            $ext = $this->Img->ext($this->request->data['Slider']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/sliders';

            $upload = $this->Img->upload($this->request->data['Slider']['image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Slider']['image'] = $dst;
            } else {
                $this->request->data['Slider']['image'] = '';
            }
 
        }
		
		else {
                $this->request->data['Slider']['image'] = '';
            }
		
/********************************************/

            $this->Slider->create();
            if ($this->Slider->save($this->request->data)) {
                $this->Flash->flash('The Slider has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Slider could not be saved. Please, try again.');
            }
        }
 
    }

 

    public function admin_edit($id = null) {
        if (!$this->Slider->exists($id)) {
            throw new NotFoundException('Invalid Slider');
        }
		
		$Slider_details = $this->Slider->find('first', [
                'conditions' => [
                    'Slider.id' => $id
                ]
            ]);
			
        if 
			($this->request->is('post') || $this->request->is('put')) {
					$this->request->data['Slider']['slug'] = $this->generateSlug($this->request->data['Slider']['name']);


		 

/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Slider']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Slider']['slug'];

            $ext = $this->Img->ext($this->request->data['Slider']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/sliders';

            $upload = $this->Img->upload($this->request->data['Slider']['image']['tmp_name'], $targetdir, $origFile);

 

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Slider']['image'] = $dst;
            } else {
                $this->request->data['Slider']['image'] = '';
            }
 
        }
		
		
		else {
				                $this->request->data['Slider']['image'] = $Slider_details['Slider']['image'];
}
/********************************************/


            if ($this->Slider->save($this->request->data)) {
                $this->Flash->flash('The Slider has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Slider could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Slider->find('first', [
                'conditions' => [
                    'Slider.id' => $id
                ]
            ]);
        }
 
    }
	
		public function admin_change_slider_status()
    {
        if(!$this->request->is('AJAX'))
        {
            return $this->redirect(array('controller'=>'sliders', 'action'=>'index'));
        }
        
        if(!$this->Slider->save(array('id'=>$this->request->data['slider_id'], 'active'=>$this->request->data['status'])))
        {
            echo json_encode(array('status'=>'failure', 'message'=>'Unable to set status at the moment.'));
            die;
        }
        
        echo json_encode(array('status'=>'success', 'message'=>'Slider status updated.'));
        die;
    }


 

    public function admin_delete($id = null) {
        $this->Slider->id = $id;
        if (!$this->Slider->exists()) {
            throw new NotFoundException('Invalid Slider');
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Slider->delete()) {
            $this->Flash->flash('Slider deleted');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->flash('Slider was not deleted');
        return $this->redirect(['action' => 'index']);
    }

 

}
