<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	 public $components = [
        'Session',
        'Auth',
        'Flash',
        'DebugKit.Toolbar',
        // 'Security',
    ];
		
	public function arrayprint($data = array()) {
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		return true;		
	}
	
	public function setup_seo($data,$model_name,$product=null,$subdomain=null,$subdomainurl=null) {
	    
		$page_url_slug = $data[$model_name]['slug'];

		$page_name = $data[$model_name]['name'];
		$page_image = $data[$model_name]['image'];
	    $page_title = $data[$model_name]['short_description'];
		$page_title = str_replace('subdomain',$subdomain,$page_title);
		$page_title = str_replace('product',$product,$page_title);
		
		
        $page_description   = $data[$model_name]['description'];
		$page_description = str_replace('subdomain',$subdomain,$page_description);
		$page_description = str_replace('product',$product,$page_description);
		
		$page_description1 = [];
		
		if($model_name == 'Page') {
		$page_description1   = $data[$model_name]['description1'];
		}
				
	if(!empty($data[$model_name]['meta_title'])) {	
		$meta_title   = $data[$model_name]['meta_title'];
		$meta_title = str_replace('subdomain',$subdomain,$meta_title);
		$meta_title = str_replace('product',$product,$meta_title);
	}
	if(!empty($data[$model_name]['meta_keyword'])) {	
		$meta_keyword = $data[$model_name]['meta_keyword'];
		$meta_keyword = str_replace('subdomain',$subdomain,$meta_keyword);
		$meta_keyword = str_replace('product',$product,$meta_keyword);
	}
	if(!empty($data[$model_name]['meta_desc'])) {	
		$meta_desc  = $data[$model_name]['meta_desc'];
		$meta_desc  = str_replace('subdomain',$subdomain,$meta_desc);
		$meta_desc  = str_replace('product',$product,$meta_desc);
	}
	
	$page_data = $data;
 
 	$this->set(compact('page_data','page_name','page_title','page_description','page_description1','page_image','meta_title','meta_keyword','meta_desc','subdomain','subdomainurl','page_url_slug'));
		
	}
	
	public function generateSlug($title)
    {
        $pattern = "[?()\/&#\,\;\.$+%]";
        $title = trim($title);        
        return $this->slugify($title);

    }
	
	public function slugify($string){
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
    }
	 
		public function process_image($image_file = null,$service_slug = null,$folderpath = '') {
		
		$final_image = "";
		
		if($service_slug == null) {
			
			$service_slug = time();
		}
		
		
		 $ext = substr(strtolower(strrchr($image_file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions

                        //only process if the extension is valid
                        if(in_array($ext, $arr_ext))
                        {
						
							$newName = $service_slug.".".$ext;
							  
							move_uploaded_file($image_file['tmp_name'], WWW_ROOT . 'images/'.$folderpath . $newName);	
							  
                            $final_image = $newName;  
                        }
						return $final_image;
	}
	
	
	 
	
	public function beforeFilter() {
		
		$this->loadModel('Homesection');

		 $homesections = $this->Homesection->find('all', [
 
        ]);
        $this->set(compact('homesections'));
   
		$this->loadModel('Gallery');

		$galleries = $this->Gallery->find('all', [
		'conditions' => [
		'Gallery.active' => 1
		],
		]);
		$this->set(compact('galleries'));


		$this->loadModel('Testimonial');

		$testimonials = $this->Testimonial->find('all', [
		'conditions' => [
		'Testimonial.active' => 1
		],

		]);

		$this->set(compact('testimonials'));

	   $this->loadModel('Product');
	   
		$this->loadModel('Blog');

		$blogs = $this->Blog->find('all', [
		'conditions' => [
		'Blog.active' => 1
		],

		]);

		$this->set(compact('blogs'));

	   $this->loadModel('Product');

       $products = $this->Product->find('all', [
	      'conditions' => [
			 'Product.active' => 1
            ],
 
        ]);
		
	   $this->set(compact('products'));
     
		$this->loadModel('Slider');

       $sliders = $this->Slider->find('all', [
 
        ]);
        $this->set(compact('sliders'));
    
		$this->loadModel('Website');
		
		$website_details = $this->Website->find('first', [             
            'conditions' => [
			 'Website.id' => 1
            ],
        ]);
		 
		$website = $website_details['Website'];
		
		
$company_address = $website_details['Website']['address'];
$branchaddress = $website_details['Website']['branchaddress'];
$company_address3 = $website_details['Website']['address3'];
$company_address4 = $website_details['Website']['address4'];
$company_address5 = $website_details['Website']['address5'];

$company_email   = $website_details['Website']['email'];
$company_contactemail = $website_details['Website']['contactemail'];
$company_phone   = $website_details['Website']['phone'];
$company_mobile   = $website_details['Website']['mobile'];

$facebook_url    = $website_details['Website']['facebook'];
$twitter_url     = $website_details['Website']['twitter'];
$youtube_url  = $website_details['Website']['youtube'];
$linkedin_url    = $website_details['Website']['linkedin'];
$instagram_url  = $website_details['Website']['instagram'];
$pinterest_url    = $website_details['Website']['pinterest'];

$enquiryform    = $website_details['Website']['enquiryform'];



$company_name    = $website_details['Website']['name']; 
$website_logo        = $website_details['Website']['logo'];
$website_name    = $website_details['Website']['name'];
$website_tagline    = $website_details['Website']['tagline'];

$google_analytics   = $website_details['Website']['google_analytics'];
 

$header_text   = $website_details['Website']['header_text'];
$footer_text   = $website_details['Website']['footer_text'];


$meta_title   = '';
$meta_desc   = '';
$meta_keyword  = '';

 
		$this->set(compact('website_name','website_tagline','website_logo','meta_title','meta_desc','meta_keyword','company_name','company_address','branchaddress','company_email','contactemail','company_phone', 'company_mobile','facebook_url','twitter_url','youtube_url','linkedin_url','instagram_url','pinterest_url','sitelogo','google_analytics','header_text','footer_text','company_address3','company_address4','company_address5','enquiryform'));
		  
        $this->set(compact('website'));
		
		 $this->Auth->loginAction = ['controller' => 'users', 'action' => 'login', 'admin' => false];
        $this->Auth->loginRedirect = ['controller' => 'pages', 'action' => 'index', 'admin' => true];
        $this->Auth->logoutRedirect = ['controller' => 'pages', 'action' => 'index', 'admin' => false];
        $this->Auth->authorize = ['Controller'];

        $this->Auth->authenticate = [
            'Form' => [
                'userModel' => 'User',
                'fields' => [
                    'username' => 'username',
                    'password' => 'password'
                ],
                'scope' => [
                    'User.active' => 1,
                ]
            ]
        ];

        if(isset($this->request->params['admin']) && ($this->request->params['prefix'] == 'admin')) {
            if($this->Session->check('Auth.User')) {
                $this->set('authUser', $this->Auth->user());
                $loggedin = $this->Session->read('Auth.User');
                $this->set(compact('loggedin'));
                $this->layout = 'admin';
            }
        } elseif(isset($this->request->params['customer']) && ($this->request->params['prefix'] == 'customer')) {
            if($this->Session->check('Auth.User')) {
                $this->set('authUser', $this->Auth->user());
                $loggedin = $this->Session->read('Auth.User');
                $this->set(compact('loggedin'));
                $this->layout = 'customer';
            }
        } else {
            $this->Auth->allow();
        }
	}
	
	
	
////////////////////////////////////////////////////////////

    public function isAuthorized($user) {
        if (($this->params['prefix'] === 'admin') && ($user['role'] != 'admin')) {
            echo '<a href="/users/logout">Logout</a><br />';
            die('Invalid request for '. $user['role'] . ' user.');
        }
        if (($this->params['prefix'] === 'customer') && ($user['role'] != 'customer')) {
            echo '<a href="/users/logout">Logout</a><br />';
            die('Invalid request for '. $user['role'] . ' user.');
        }
        return true;
    }

////////////////////////////////////////////////////////////

}
