<?php
App::uses('AppController', 'Controller');
class ProductsController extends AppController {
	
	public function index() {
		 $products = $this->Product->find('all', [
 
        ]);
        $this->set(compact('products'));
		
		
	$this->loadModel('Page');

	$page_details = $this->Page->find('first', array(
	'recursive' => 0,
	'order' => array(

	),
	'conditions' => array(
	'Page.id' => 3
	),
	));

	$this->setup_seo($page_details,'Page','','');

	}
	
	public function view($slug=null) {
		
		$product_details = $this->Product->find('first', [
                'conditions' => [
                    'Product.slug' => $slug
                ]
            ]);
	
	$this->set(compact('product_details'));
	
	$this->setup_seo($product_details,'Product');
	
	$this->loadModel('Gallery');
	
	 $galleries = $this->Gallery->find('all', [
	  'conditions' => [
                    'Gallery.product_id' => $product_details['Product']['id'],
					 'Gallery.active' => 1
                ]
 
        ]);
        $this->set(compact('galleries'));

	}
   
    public function admin_index() {
		
			// 	$this->Product->query("update products set active = 1");

        $products = $this->Product->find('all', [
 
        ]);
        $this->set(compact('products'));
    }
 
    public function admin_add() {
		 		
        if ($this->request->is('post')) {
			
		$this->request->data['Product']['slug'] = $this->generateSlug($this->request->data['Product']['name']);
		
/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Product']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Product']['slug'];

            $ext = $this->Img->ext($this->request->data['Product']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/products';

            $upload = $this->Img->upload($this->request->data['Product']['image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Product']['image'] = $dst;
            } else {
                $this->request->data['Product']['image'] = '';
            }
 
        }
		
		else {
                $this->request->data['Product']['image'] = '';
            }
		
/********************************************/

/*********************PDF***********************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Product']['catalog_pdf']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Product']['slug'].'-catalog';

            $ext = $this->Img->ext($this->request->data['Product']['catalog_pdf']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/products';

 
 if (move_uploaded_file($this->request->data['Product']['catalog_pdf']['tmp_name'], $targetdir.'/'.$dst)) {
	  $this->request->data['Product']['catalog_pdf'] = $dst;
    } else {
	     $this->request->data['Product']['catalog_pdf'] = '';
    }
 
 
        }
		
		else {
                $this->request->data['Product']['catalog_pdf'] = '';
            }

/***********************PDF***********************/

            $this->request->data['Product']['active'] = 1;
 
            $this->Product->create();
            if ($this->Product->save($this->request->data)) {
                $this->Flash->flash('The Product has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Product could not be saved. Please, try again.');
            }
        }
		
		$parentproducts = $this->Product->find('list', array(
		'conditions' => array('Product.parent_id' => '0')
		)
		);
		$this->set(compact('parentproducts'));	
 
 
    }

 

    public function admin_edit($id = null) {
        if (!$this->Product->exists($id)) {
            throw new NotFoundException('Invalid Product');
        }
		
		$Product_details = $this->Product->find('first', [
                'conditions' => [
                    'Product.id' => $id
                ]
            ]);
			
        if 
			($this->request->is('post') || $this->request->is('put')) {
					$this->request->data['Product']['slug'] = $this->generateSlug($this->request->data['Product']['name']);


		 

/********************************************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Product']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Product']['slug'];

            $ext = $this->Img->ext($this->request->data['Product']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/products';

            $upload = $this->Img->upload($this->request->data['Product']['image']['tmp_name'], $targetdir, $origFile);

 

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Product']['image'] = $dst;
            } else {
                $this->request->data['Product']['image'] = '';
            }
 
        }
		
		
		else {
				                $this->request->data['Product']['image'] = $Product_details['Product']['image'];
}
/********************************************/



/*********************PDF***********************/


if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Product']['catalog_pdf']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Product']['slug'].'-catalog';

            $ext = $this->Img->ext($this->request->data['Product']['catalog_pdf']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $origFile; //$newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/products';

 
 if (move_uploaded_file($this->request->data['Product']['catalog_pdf']['tmp_name'], $targetdir.'/'.$dst)) {
	  $this->request->data['Product']['catalog_pdf'] = $dst;
    } else {
	     $this->request->data['Product']['catalog_pdf'] = '';
    }
 
 
        }
		
		else {
                $this->request->data['Product']['catalog_pdf'] = '';
            }

/***********************PDF***********************/



            if ($this->Product->save($this->request->data)) {
                $this->Flash->flash('The Product has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The Product could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Product->find('first', [
                'conditions' => [
                    'Product.id' => $id
                ]
            ]);
        }
		
		
				$parentproducts = $this->Product->find('list', array(
		'conditions' => array('Product.parent_id' => '0')
		)
		);
		$this->set(compact('parentproducts'));	
 
 
    }
	
		public function admin_change_product_status()
    {
        if(!$this->request->is('AJAX'))
        {
            return $this->redirect(array('controller'=>'products', 'action'=>'index'));
        }
        
        if(!$this->Product->save(array('id'=>$this->request->data['product_id'], 'active'=>$this->request->data['status'])))
        {
            echo json_encode(array('status'=>'failure', 'message'=>'Unable to set status at the moment.'));
            die;
        }
        
        echo json_encode(array('status'=>'success', 'message'=>'Product status updated.'));
        die;
    }


 

    public function admin_delete($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException('Invalid Product');
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Product->delete()) {
            $this->Flash->flash('Product deleted');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->flash('Product was not deleted');
        return $this->redirect(['action' => 'index']);
    }

 

}
