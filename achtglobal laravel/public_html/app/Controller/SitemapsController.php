<?php
App::uses('AppController', 'Controller');
class SitemapsController extends AppController {
	
	public function index() {
		
	$this->response->type('xml');

	$this->layout = "ajax";
	$this->loadModel('Product');

	$products = $this->Product->find('all', [
	        'conditions' => [
			 'Product.active' => 1
            ],

	]);
	$this->set(compact('products'));

		$this->loadModel('Location');

	$locations = $this->Location->find('all', array(
	//'recursive' => 0,
	//'Contain' => array('ChildLocation'),
	'order' => array(
	//'Location.location_order' => 'ASC'
	),
	'conditions' => array(
	'Location.active' => 1,
	//'Location.parent_id' => 0
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
	
    public function view($slug=null) {
		
		 
				
		$this->layout = "ajax";
		$this->response->type('xml');

		$this->loadModel('Product');

		$products = $this->Product->find('all', [		
		 'conditions' => [
			 'Product.active' => 1
            ],

		]);
		$this->set(compact('products'));
		
	$this->loadModel('Location');

	$locations = $this->Location->find('all', array(
	//'recursive' => 0,
	//'Contain' => array('ChildLocation'),
	'order' => array(
	//'Location.location_order' => 'ASC'
	),
	'conditions' => array(
	'Location.active' => 1,
	//'Location.parent_id' => 0
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
       
	   $this->set(compact('subdomains','slug'));
		 
				if($slug > 1) {
					
		$this->loadModel('Location');

		$start = ($slug - 2) * 50;
  
		$locations = $this->Location->query("select * from locations as Location where Location.active = 1 limit  $start, 50");
			 			

		$this->set(compact('locations'));

					$this->render('location');
					 
				}
	}
     
	
}
