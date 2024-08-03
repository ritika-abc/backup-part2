<?php
App::uses('AppController', 'Controller');
class SubdomainsController extends AppController {
   
   
   public function index() {
	   
	      $subdomain_slug = str_replace($this->webroot,'',$this->here);
		  $subdomain_slug = str_replace('/','',$subdomain_slug);		  
 		  $subdomain_slug = str_replace('.html','',$subdomain_slug);
		  
		  $subdomainurl = str_replace('-category','',$subdomain_slug).'/';
		  
		$this->loadModel('Subdomain');
		 		 
		$subdomain_details = $this->Subdomain->find('first', [
            'recursive' => 0,				 		
            'conditions' =>  array(
			'Subdomain.slug' => $subdomain_slug
			)
        ]);
		
			$subdomain_name = $subdomain_details['Subdomain']['name'];

$meta_title = $subdomain_name;
$meta_keyword = $subdomain_name;
$meta_desc = $subdomain_name;
	
		$this->set(compact('subdomain_details','subdomain_name','subdomainurl','meta_title','meta_keyword','meta_desc'));
		
		//	$this->setup_seo($subdomain_details,'Subdomain','',$subdomain_name,$subdomain_url.'/');

	   
   }
  
   public function subdomain_slug($slug) {	

		$subdomain_slug = str_replace($this->webroot,'',$this->here);
		$subdomain_slug = str_replace($slug,'',$subdomain_slug);	  

		$subdomain_slug = str_replace('/','',$subdomain_slug);		  
		$subdomain_slug = str_replace('.html','',$subdomain_slug);

	   return $subdomain_slug.'-category';
   }
   
   public function view($slug = null) {
	   		 	 						
        $subdomain_slug = $this->subdomain_slug($slug);
										
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
			//'Subdomain.id' => 2
			'Subdomain.slug' => $subdomain_slug
			)
        ]);
	
 	
	$subdomain_name = $subdomain_details['Subdomain']['name'];
	$product_name = $product_details['Product']['name'];
    $subdomain_url = str_replace('-category','',$subdomain_slug).'/';

        $this->set(compact('subdomain_details','product_details','subdomain_details'));

	$this->setup_seo($subdomain_details,'Subdomain',$product_name,$subdomain_name,$subdomain_url);

		$this->render('product');

	}
   public function exporters($slug = null) {
	   		 	 							       
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
		 		  	 	
		$this->loadModel('Subdomain');
		 		 
		$subdomain_details = $this->Subdomain->find('first', [
            'recursive' => 0,				 		
            'conditions' =>  array(
			'Subdomain.id' => 2
			)
        ]);
	
 	
	$subdomain_name = $subdomain_details['Subdomain']['name'];
	$product_name = $product_details['Product']['name'];

        $this->set(compact('subdomain_details','product_details','subdomain_details'));

	$this->setup_seo($subdomain_details,'Subdomain',$product_name,$subdomain_name,'suppliers/');

		$this->render('product');

	}
   public function dealer($slug = null) {
	   		 	 							       
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
		 		  	 	
		$this->loadModel('Subdomain');
		 		 
		$subdomain_details = $this->Subdomain->find('first', [
            'recursive' => 0,				 		
            'conditions' =>  array(
			'Subdomain.id' => 2
			)
        ]);
	
 	
	$subdomain_name = $subdomain_details['Subdomain']['name'];
	$product_name = $product_details['Product']['name'];

        $this->set(compact('subdomain_details','product_details','subdomain_details'));

	$this->setup_seo($subdomain_details,'Subdomain',$product_name,$subdomain_name,'suppliers/');

		$this->render('product');

	}
   public function manufacturers($slug = null) {
	   		 	 							       
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
		 		  	 	
		$this->loadModel('Subdomain');
		 		 
		$subdomain_details = $this->Subdomain->find('first', [
            'recursive' => 0,				 		
            'conditions' =>  array(
			'Subdomain.id' => 2
			)
        ]);
	
 	
	$subdomain_name = $subdomain_details['Subdomain']['name'];
	$product_name = $product_details['Product']['name'];

        $this->set(compact('subdomain_details','product_details','subdomain_details'));

	$this->setup_seo($subdomain_details,'Subdomain',$product_name,$subdomain_name,'suppliers/');

		$this->render('product');

	}
	
   public function producers($slug = null) {
	   		 	 							       
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
		 		  	 	
		$this->loadModel('Subdomain');
		 		 
		$subdomain_details = $this->Subdomain->find('first', [
            'recursive' => 0,				 		
            'conditions' =>  array(
			'Subdomain.id' => 2
			)
        ]);
	
 	
	$subdomain_name = $subdomain_details['Subdomain']['name'];
	$product_name = $product_details['Product']['name'];

        $this->set(compact('subdomain_details','product_details','subdomain_details'));

	$this->setup_seo($subdomain_details,'Subdomain',$product_name,$subdomain_name,'suppliers/');

		$this->render('product');

	}
	
   public function suppliers($slug = null) {
	   		 	 							       
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
		 		  	 	
		$this->loadModel('Subdomain');
		 		 
		$subdomain_details = $this->Subdomain->find('first', [
            'recursive' => 0,				 		
            'conditions' =>  array(
			'Subdomain.id' => 2
			)
        ]);
	
 	
	$subdomain_name = $subdomain_details['Subdomain']['name'];
	$product_name = $product_details['Product']['name'];

        $this->set(compact('subdomain_details','product_details','subdomain_details'));

	$this->setup_seo($subdomain_details,'Subdomain',$product_name,$subdomain_name,'suppliers/');

		$this->render('product');

	}
	
    public function admin_index() {
		
		
 	//$this->Subdomain->query("ALTER TABLE `locations` ADD `meta_schema` varchar(255) NULL   AFTER `description`;");

        $subdomains = $this->Subdomain->find('all', [
 
        ]);
        $this->set(compact('subdomains'));
    }
 
    public function admin_add() {
        if ($this->request->is('post')) {
			
		$this->request->data['Subdomain']['slug'] = $this->generateSlug($this->request->data['Subdomain']['name']);
		
/********************************************/

 
		
/********************************************/

            $this->Subdomain->create();
            if ($this->Subdomain->save($this->request->data)) {
                $this->Flash->flash('The Subdomain has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Subdomain could not be saved. Please, try again.');
            }
        }
 
    }

    public function admin_edit($id = null) {
        if (!$this->Subdomain->exists($id)) {
            throw new NotFoundException('Invalid Subdomain');
        }
		
		$Subdomain_details = $this->Subdomain->find('first', [
                'conditions' => [
                    'Subdomain.id' => $id
                ]
            ]);
			
        if ($this->request->is('post') || $this->request->is('put')) {
                     $this->request->data['Subdomain']['image'] = '';

		$this->request->data['Subdomain']['slug'] = $this->generateSlug($this->request->data['Subdomain']['name']);


            if ($this->Subdomain->save($this->request->data)) {
                $this->Flash->flash('The Subdomain has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Subdomain could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Subdomain->find('first', [
                'conditions' => [
                    'Subdomain.id' => $id
                ]
            ]);
        }
 
    }
	
		public function admin_change_subdomain_status()
    {
        if(!$this->request->is('AJAX'))
        {
            return $this->redirect(array('controller'=>'subdomains', 'action'=>'index'));
        }
        
        if(!$this->Subdomain->save(array('id'=>$this->request->data['subdomain_id'], 'active'=>$this->request->data['status'])))
        {
            echo json_encode(array('status'=>'failure', 'message'=>'Unable to set status at the moment.'));
            die;
        }
        
        echo json_encode(array('status'=>'success', 'message'=>'Subdomain status updated.'));
        die;
    }


 

    public function admin_delete($id = null) {
        $this->Subdomain->id = $id;
        if (!$this->Subdomain->exists()) {
            throw new NotFoundException('Invalid Subdomain');
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Subdomain->delete()) {
            $this->Flash->flash('Subdomain deleted');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->flash('Subdomain was not deleted');
        return $this->redirect(['action' => 'index']);
    }

 

}
