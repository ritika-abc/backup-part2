<?php
	App::uses('AppController', 'Controller');
	class UsersController extends AppController {

	 
		public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('login');
		}

 
	 
		public function login() {

			$this->layout = "login";	
		   
		  // echo AuthComponent::password('admin');

			if ($this->request->is('post')) {
				if($this->Auth->login()) {

					$this->User->id = $this->Auth->user('id');
					$this->User->saveField('logins', $this->Auth->user('logins') + 1);
					$this->User->saveField('last_login', date('Y-m-d H:i:s'));

					 if ($this->Auth->user('role') == 'admin') {
						return $this->redirect([
							'controller' => 'users',
							'action' => 'dashboard',
							'manager' => false,
							'admin' => true
						]);
					} else {
						$this->Flash->danger('Login is incorrect');
					}
				} else {
					$this->Flash->danger('Login is incorrect');
				}
			}
		}

	 
		public function logout() {
			
			$this->Auth->logout();
			
		   $this->Flash->flash('You have been Logout successfully.');
			$_SESSION['KCEDITOR']['disabled'] = true;
			unset($_SESSION['KCEDITOR']);
			
			return $this->redirect('/framework');

		   // return $this->redirect($this->Auth->logout());
		}

	 
 


		public function admin_dashboard() {
			
			 
		
		 
		}
 
	  
	 
		public function admin_masterpassword($id = null) {
		  
			$this->User->id = 1;
			
			if (!$this->User->exists()) {
				throw new NotFoundException('Invalid user');
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				
				$this->request->data['User']['user_password'] = $this->request->data['User']['password'];

				if ($this->User->save($this->request->data)) {
					$this->Flash->flash('Admin Password changed Successfully.');
				   // $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->flash('The user could not be saved. Please, try again.');
				}
			} else {
				$this->request->data = $this->User->read(null, $id);
			}
		}
	    
 
	}
