<?php
App::uses('AppController', 'Controller');
class LocationsController extends AppController {
   
   public function index() {
	
	
	$locations = $this->Location->find('all', array(
			//'recursive' => 0,
			'Contain' => array('ChildLocation'),
			'order' => array(
				//'Location.location_order' => 'ASC'
			),
			'conditions' => array(
			//'Location.active' => 1,
			 'Location.parent_id' => 0
			),
		));
		
        $this->set(compact('locations'));
		
			$this->loadModel('Subdomain');
		 		 
		$subdomains = $this->Subdomain->find('all', [
            'recursive' => 0,				 		
            'conditions' =>  array(
			'Subdomain.active' => 1,
            'Subdomain.id !=1'

			)
        ]);
        $this->set(compact('subdomains'));

   }
   
   public function view($slug = null) {

	   
     $location_details = $this->Location->find('first', [
            'recursive' => 0,			
            'conditions' => [
            'Location.slug' => $slug 
            ]
        ]);			
		
		$location_name = $location_details['Location']['name'];
	   
	   	$this->setup_seo($location_details,'Location','',$location_name,$slug.'/');

	   
	$this->loadModel('Page');

	$page_details = $this->Page->find('first', array(
	'recursive' => 0,
	'order' => array(

	),
	'conditions' => array(
	'Page.id' => 5
	),
	));

	$this->setup_seo($page_details,'Page','',$location_name,$slug.'/');

	   
   }
   
   public function product($location=null,$slug = null) {
		 	 		
     $location_details = $this->Location->find('first', [
            'recursive' => 0,			
            'conditions' => [
            'Location.slug' => $location 
            ]
        ]);				
        
		$this->loadModel('Product');	
       
        $product_details = $this->Product->find('first', [
            'recursive' => -1,
            'contain' => [
 				//'ParentProduct',				
            ],
            'conditions' => [              
               // 'Product.active' => 1,
               'Product.slug' => $slug
            ]
        ]);
		 	
		
		$this->loadModel('Gallery');
	
	 $galleries = $this->Gallery->find('all', [
	  'conditions' => [
                    'Gallery.product_id' => $product_details['Product']['id'],
					 'Gallery.active' => 1
                ]
 
        ]);
        $this->set(compact('galleries'));
		
		$this->loadModel('Subdomain');
		 		 
		$subdomain_details = $this->Subdomain->find('first', [
            'recursive' => 0,				 		
            'conditions' =>  array(
			'Subdomain.id' => 1
			)
        ]);
	
	$location_name = $location_details['Location']['name'];
	$product_name = $product_details['Product']['name'];

        $this->set(compact('location_details','product_details','subdomain_details'));

	$this->setup_seo($subdomain_details,'Subdomain',$product_name,$location_name,$location.'/');

	}
	
	
    public function admin_index() {
        $locations = $this->Location->find('all', [
 
        ]);
        $this->set(compact('locations'));
    }
 
    public function admin_add() {

        if ($this->request->is('post')) {
			
		$this->request->data['Location']['slug'] = $this->generateSlug($this->request->data['Location']['name']);
		
/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Location']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Location']['slug'];

            $ext = $this->Img->ext($this->request->data['Location']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/locations';

            $upload = $this->Img->upload($this->request->data['Location']['image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Location']['image'] = $dst;
            } else {
                $this->request->data['Location']['image'] = '';
            }
 
        }
		
		else {
                $this->request->data['Location']['image'] = '';
            }
		
/********************************************/

            $this->Location->create();
            if ($this->Location->save($this->request->data)) {
                $this->Flash->flash('The Location has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Location could not be saved. Please, try again.');
            }
        }
 
 
 		$parentlocations = $this->Location->find('list', array(
		'conditions' => array('Location.parent_id' => '0')
		)
		);
		$this->set(compact('parentlocations'));	
 
 
    }

 

    public function admin_edit($id = null) {
        if (!$this->Location->exists($id)) {
            throw new NotFoundException('Invalid Location');
        }
		
		$Location_details = $this->Location->find('first', [
                'conditions' => [
                    'Location.id' => $id
                ]
            ]);
			
        if 
			($this->request->is('post') || $this->request->is('put')) {
					$this->request->data['Location']['slug'] = $this->generateSlug($this->request->data['Location']['name']);


		 

/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Location']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Location']['slug'];

            $ext = $this->Img->ext($this->request->data['Location']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/locations';

            $upload = $this->Img->upload($this->request->data['Location']['image']['tmp_name'], $targetdir, $origFile);

 

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Location']['image'] = $dst;
            } else {
                $this->request->data['Location']['image'] = '';
            }
 
        }
		
		
		else {
				                $this->request->data['Location']['image'] = $Location_details['Location']['image'];
}
/********************************************/


            if ($this->Location->save($this->request->data)) {
                $this->Flash->flash('The Location has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Location could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Location->find('first', [
                'conditions' => [
                    'Location.id' => $id
                ]
            ]);
        }
		
		
 		$parentlocations = $this->Location->find('list', array(
		'conditions' => array('Location.parent_id' => '0')
		)
		);
		$this->set(compact('parentlocations'));	
 
 
    }
	
		public function admin_change_location_status()
    {
        if(!$this->request->is('AJAX'))
        {
            return $this->redirect(array('locations'=>'Locations', 'action'=>'index'));
        }
        
        if(!$this->Location->save(array('id'=>$this->request->data['location_id'], 'active'=>$this->request->data['status'])))
        {
            echo json_encode(array('status'=>'failure', 'message'=>'Unable to set status at the moment.'));
            die;
        }
        
        echo json_encode(array('status'=>'success', 'message'=>'Location status updated.'));
        die;
    }


 

    public function admin_delete($id = null) {
        $this->Location->id = $id;
        if (!$this->Location->exists()) {
            throw new NotFoundException('Invalid Location');
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Location->delete()) {
            $this->Flash->flash('Location deleted');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->flash('Location was not deleted');
        return $this->redirect(['action' => 'index']);
    }

 

}
