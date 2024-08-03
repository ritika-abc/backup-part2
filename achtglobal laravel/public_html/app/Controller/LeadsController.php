<?php
App::uses('AppController', 'Controller');
/**
 * Leads Controller
 *
 * @property Lead $Lead
 * @property PaginatorComponent $Paginator
 */
class LeadsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	
	/**
 * Lead_add method
 *
 * @return void
 */
    
	public function contactus() {
		
		 $this->layout = "ajax";
		   
		$company_email = "info@craftmediahub.com";
		$company_name  = "Craftmediahub";
			   
		if ($this->request->is('post')) {
			 
	// $this->Lead->query("ALTER TABLE `leads` ADD `product_name` varchar(255) NULL AFTER `id`;");

			if($this->request->is('ajax')) {
			$this->request->data['Lead']['pagerequest'] = "ajax";
			}
			else {

			$this->request->data['Lead']['pagerequest'] = "post";
			exit;
			}
			
							$lead_for = "Lead For Contact Us";

	
			$this->request->data['Lead']['lead_for'] = "Contact Us";
			$this->request->data['Lead']['ipaddress']  = $_SERVER['REMOTE_ADDR'];			
			$this->request->data['Lead']['name'] = $this->request->data['name'];			
			$this->request->data['Lead']['email'] = $this->request->data['email'];
			$this->request->data['Lead']['phone'] = $this->request->data['phone'];
			$this->request->data['Lead']['address'] = $this->request->data['address'];
			
			if(isset($this->request->data['product_name']) && !empty($this->request->data['product_name'])){
			        
					$product_name = $this->request->data['product_name'];
		
						$lead_for = "Lead For $product_name";
						$this->request->data['Lead']['lead_for'] = $lead_for;

			}

			$this->request->data['Lead']['message'] = $this->request->data['message'];
			
			$this->request->data['pageurl'] = $_SERVER["HTTP_REFERER"];

			$this->request->data['Lead']['pageurl'] = $this->request->data['pageurl'];

				 
			$this->Lead->create();				
			
			if ($this->Lead->save($this->request->data)) {
				
			 
				 				 
				App::import('Vendor', 'phpmailer', array('file' => 'phpmailer' . DS . 'class.phpmailer.php'));


				$contact_name = $this->request->data['name'];

				$contact_email = $this->request->data['email'];
				
				$contact_phone = $this->request->data['phone'];

				$contact_message = $this->request->data['message'];
				
				$contact_address = $this->request->data['address'];
				
				$pageurl = $this->request->data['pageurl'];

	

				$CustomMessageText = "Dear $company_name

			<br /><br />

			Your have a $lead_for.

			<br /><br />

			 Following are details : 

			<br />Name : $contact_name <br />

			<br />Email : $contact_email <br />
			
			<br />Phone : $contact_phone <br />

			<br />Address : $contact_address <br />

			<br />Request From : $pageurl <br />


			<br />Message : $contact_message <br />

			 ";

					

		$CustomMessageSubject = "Your have a new Lead for $lead_for";  

	

		$subject = $CustomMessageSubject;

		$message = $CustomMessageText;

  	   $mail = new PHPMailer();

        $mail->ContentType	= "text/html";

        $mail->From		= 'craftmediahub@gmail.com';

        $mail->FromName		= $company_name;

        $mail->Host		= "localhost";

        $mail->Subject		= $subject;

        $mail->AltBody		= "";
 
       $mail->AddAddress('craftmediahub@gmail.com');

 	  
		//$mail->AddBCC('test@gmail.com');

        $mail->Body	= $message;

        $mail->AddReplyTo($company_email,$company_name);
	

		//$mail->Send();
			
		}
		else  {
			echo "error";
		}
		
		exit;
	}
	
	}
	
	public function thanks() {
		 
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		 
 		 
		$leads = $this->Lead->find('all', array(
		'recursive' => 0,	
		'order' => array(
		'Lead.id' => 'desc'
		),
		'conditions' => array(
		),
		));

		$this->set(compact('leads'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Lead->exists($id)) {
			throw new NotFoundException(__('Invalid lead'));
		}
		$options = array('conditions' => array('Lead.' . $this->Lead->primaryKey => $id));
		$this->set('lead', $this->Lead->find('first', $options));
	}
 
/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Lead->id = $id;
		if (!$this->Lead->exists()) {
			throw new NotFoundException(__('Invalid Lead'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lead->delete()) {
			$this->Session->setFlash(__('The Lead has been deleted.'));
		} else {
			$this->Session->setFlash(__('The Lead could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
