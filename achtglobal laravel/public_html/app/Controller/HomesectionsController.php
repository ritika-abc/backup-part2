<?php
App::uses('AppController', 'Controller');
class HomesectionsController extends AppController {
	 
    public function admin_index() {
        $homesections = $this->Homesection->find('all', [
 
        ]);
        $this->set(compact('homesections'));
    }
 
    public function admin_add() {
        if ($this->request->is('post')) {
			
		$this->request->data['Homesection']['slug'] = $this->generateSlug($this->request->data['Homesection']['name']);
		
/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Homesection']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Homesection']['slug'];

            $ext = $this->Img->ext($this->request->data['Homesection']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile;

            $targetdir = WWW_ROOT . 'images/homesections';

            $upload = $this->Img->upload($this->request->data['Homesection']['image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {                
                $this->request->data['Homesection']['image'] = $dst;
            } else {
                $this->request->data['Homesection']['image'] = '';
            }
 
        }
		
		else {
                $this->request->data['Homesection']['image'] = '';
            }
		
/********************************************/



		$section1_title_slug = $this->generateSlug($this->request->data['Homesection']['section1_title']);


		$section2_title_slug = $this->generateSlug($this->request->data['Homesection']['section2_title']);


		$section3_title_slug = $this->generateSlug($this->request->data['Homesection']['section3_title']);


		$section4_title_slug = $this->generateSlug($this->request->data['Homesection']['section4_title']);



/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Homesection']['section1_image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $section1_title_slug;

            $ext = $this->Img->ext($this->request->data['Homesection']['section1_image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile;

            $targetdir = WWW_ROOT . 'images/homesections';

            $upload = $this->Img->upload($this->request->data['Homesection']['section1_image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {                
                $this->request->data['Homesection']['section1_image'] = $dst;
            } else {
                $this->request->data['Homesection']['section1_image'] = '';
            }
 
        }
		
		else {
                $this->request->data['Homesection']['section1_image'] = '';
            }
		
/********************************************/


/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Homesection']['section2_image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $section2_title_slug;

            $ext = $this->Img->ext($this->request->data['Homesection']['section2_image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile;

            $targetdir = WWW_ROOT . 'images/homesections';

            $upload = $this->Img->upload($this->request->data['Homesection']['section2_image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {                
                $this->request->data['Homesection']['section2_image'] = $dst;
            } else {
                $this->request->data['Homesection']['section2_image'] = '';
            }
 
        }
		
		else {
                $this->request->data['Homesection']['section2_image'] = '';
            }
		
/********************************************/


/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Homesection']['section3_image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $section3_title_slug;

            $ext = $this->Img->ext($this->request->data['Homesection']['section3_image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile;

            $targetdir = WWW_ROOT . 'images/homesections';

            $upload = $this->Img->upload($this->request->data['Homesection']['section3_image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {                
                $this->request->data['Homesection']['section3_image'] = $dst;
            } else {
                $this->request->data['Homesection']['section3_image'] = '';
            }
 
        }
		
		else {
                $this->request->data['Homesection']['section3_image'] = '';
            }
		
/********************************************/


/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Homesection']['section4_image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $section4_title_slug;

            $ext = $this->Img->ext($this->request->data['Homesection']['section4_image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile;

            $targetdir = WWW_ROOT . 'images/homesections';

            $upload = $this->Img->upload($this->request->data['Homesection']['section4_image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {                
                $this->request->data['Homesection']['section4_image'] = $dst;
            } else {
                $this->request->data['Homesection']['section4_image'] = '';
            }
 
        }
		
		else {
                $this->request->data['Homesection']['section4_image'] = '';
            }
		
/********************************************/

            $this->Homesection->create();
            if ($this->Homesection->save($this->request->data)) {
                $this->Flash->flash('The Homesection has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Homesection could not be saved. Please, try again.');
            }
        }
 
    }

 

    public function admin_edit($id = null) {
        if (!$this->Homesection->exists($id)) {
            throw new NotFoundException('Invalid Homesection');
        }
		
		$Page_details = $this->Homesection->find('first', [
                'conditions' => [
                    'Homesection.id' => $id
                ]
            ]);
			
        if ($this->request->is('post') || $this->request->is('put')) {
					$this->request->data['Homesection']['slug'] = $this->generateSlug($this->request->data['Homesection']['name']);


		 

/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Homesection']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Homesection']['slug'];

            $ext = $this->Img->ext($this->request->data['Homesection']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile;

            $targetdir = WWW_ROOT . 'images/homesections';

            $upload = $this->Img->upload($this->request->data['Homesection']['image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {
             
                $this->request->data['Homesection']['image'] = $dst;
            } else {
                $this->request->data['Homesection']['image'] = '';
            }
 
        }
		
		
		else {
				                $this->request->data['Homesection']['image'] = $Page_details['Homesection']['image'];
}
/********************************************/


/********************************************/



		$section1_title_slug = $this->generateSlug($this->request->data['Homesection']['section1_title']);


		$section2_title_slug = $this->generateSlug($this->request->data['Homesection']['section2_title']);


		$section3_title_slug = $this->generateSlug($this->request->data['Homesection']['section3_title']);


		$section4_title_slug = $this->generateSlug($this->request->data['Homesection']['section4_title']);



/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Homesection']['section1_image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $section1_title_slug;

            $ext = $this->Img->ext($this->request->data['Homesection']['section1_image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile;

            $targetdir = WWW_ROOT . 'images/homesections';

            $upload = $this->Img->upload($this->request->data['Homesection']['section1_image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {                
                $this->request->data['Homesection']['section1_image'] = $dst;
            } else {
                $this->request->data['Homesection']['section1_image'] = $Page_details['Homesection']['section1_image'];
            }
 
        }
		
		else {
                $this->request->data['Homesection']['section1_image'] = $Page_details['Homesection']['section1_image'];
            }
		
/********************************************/


/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Homesection']['section2_image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $section2_title_slug;

            $ext = $this->Img->ext($this->request->data['Homesection']['section2_image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile;

            $targetdir = WWW_ROOT . 'images/homesections';

            $upload = $this->Img->upload($this->request->data['Homesection']['section2_image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {                
                $this->request->data['Homesection']['section2_image'] = $dst;
            } else {
                $this->request->data['Homesection']['section2_image'] =  $Page_details['Homesection']['section2_image'];
            }
 
        }
		
		else {
                $this->request->data['Homesection']['section2_image'] = $Page_details['Homesection']['section2_image'];
            }
		
/********************************************/


/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Homesection']['section3_image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $section3_title_slug;

            $ext = $this->Img->ext($this->request->data['Homesection']['section3_image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile;

            $targetdir = WWW_ROOT . 'images/homesections';

            $upload = $this->Img->upload($this->request->data['Homesection']['section3_image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {                
                $this->request->data['Homesection']['section3_image'] = $dst;
            } else {
                $this->request->data['Homesection']['section3_image'] = $Page_details['Homesection']['section3_image'];
            }
 
        }
		
		else {
                $this->request->data['Homesection']['section3_image'] = $Page_details['Homesection']['section3_image'];
            }
		
/********************************************/


/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Homesection']['section4_image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $section4_title_slug;

            $ext = $this->Img->ext($this->request->data['Homesection']['section4_image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile;

            $targetdir = WWW_ROOT . 'images/homesections';

            $upload = $this->Img->upload($this->request->data['Homesection']['section4_image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {                
                $this->request->data['Homesection']['section4_image'] = $dst;
            } else {
                $this->request->data['Homesection']['section4_image'] = $Page_details['Homesection']['section4_image'];
            }
 
        }
		
		else {
                $this->request->data['Homesection']['section4_image'] = $Page_details['Homesection']['section4_image'];
            }
		
/********************************************/



            if ($this->Homesection->save($this->request->data)) {
                $this->Flash->flash('The Homesection has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Homesection could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Homesection->find('first', [
                'conditions' => [
                    'Homesection.id' => $id
                ]
            ]);
        }
 
    }
	 

    public function admin_delete($id = null) {
        $this->Homesection->id = $id;
        if (!$this->Homesection->exists()) {
            throw new NotFoundException('Invalid Homesection');
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Homesection->delete()) {
            $this->Flash->flash('Homesection deleted');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->flash('Homesection was not deleted');
        return $this->redirect(['action' => 'index']);
    }

 

}
