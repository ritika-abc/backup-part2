<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
 
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
   # Router::connect('/', ['controller' => 'users', 'action' => 'dashboard', 'admin' => true]);
   
    Router::connect('/', ['controller' => 'pages', 'action' => 'index']);
    Router::connect('/company-profile.html', ['controller' => 'pages', 'action' => 'about']);
    Router::connect('/contact-us.html', ['controller' => 'pages', 'action' => 'contact']);

    Router::connect('/enquiry.html', ['controller' => 'leads', 'action' => 'contactus']);

    Router::connect('/framework', ['controller' => 'users', 'action' => 'dashboard', 'admin' => true]);
	
	Router::connect('/sitemap.xml', ['controller' => 'sitemaps', 'action' => 'index']);
	

    Router::connect('/sitemap:slug.xml', ['controller' => 'sitemaps', 'action' => 'view'], ['pass' => ['slug']]);
 
	Router::connect('/blog.html', ['controller' => 'blogs', 'action' => 'index']);

    Router::connect('/blog/:slug.html', ['controller' => 'blogs', 'action' => 'view'], ['pass' => ['slug']]);


	Router::connect('/sitemap.html', ['controller' => 'pages', 'action' => 'sitemap']);
 
	Router::connect('/our-presence.html', ['controller' => 'locations', 'action' => 'index']);

	Router::connect('/our-products.html', ['controller' => 'products', 'action' => 'index']);
	
	Router::connect('/importer-category.html', ['controller' => 'subdomains', 'action' => 'index']);

 	Router::connect('/suppliers-category.html', ['controller' => 'subdomains', 'action' => 'index']);

 	Router::connect('/dealer-category.html', ['controller' => 'subdomains', 'action' => 'index']);

 	Router::connect('/exporters-category.html', ['controller' => 'subdomains', 'action' => 'index']);
 
 	Router::connect('/manufacturers-category.html', ['controller' => 'subdomains', 'action' => 'index']);
 
 	Router::connect('/producers-category.html', ['controller' => 'subdomains', 'action' => 'index']);

	#Router::connect('/:slug-category.html', ['controller' => 'subdomains', 'action' => 'index'], ['pass' => ['slug'],'string' => 'category']);

/*
Router::connect('/:slug-:string-:id',
                    array('controller' => 'company_categories', 'action' => 'category_companies'),
                    array(
                        'id' => "[0-9]+",
                        'string' => "my-string"
                        'pass' => array('id')
                    )
    );
	*/
	
	Router::connect('/producers/:slug.html', ['controller' => 'subdomains', 'action' => 'view'], ['pass' => ['slug']]);
	Router::connect('/manufacturers/:slug.html', ['controller' => 'subdomains', 'action' => 'view'], ['pass' => ['slug']]);
	Router::connect('/dealer/:slug.html', ['controller' => 'subdomains', 'action' => 'view'], ['pass' => ['slug']]);
	Router::connect('/exporters/:slug.html', ['controller' => 'subdomains', 'action' => 'view'], ['pass' => ['slug']]);
	Router::connect('/suppliers/:slug.html', ['controller' => 'subdomains', 'action' => 'view'], ['pass' => ['slug']]);
	Router::connect('/importer/:slug.html', ['controller' => 'subdomains', 'action' => 'view'], ['pass' => ['slug']]);

    Router::connect('/:location/:slug.html', ['controller' => 'locations', 'action' => 'product'], ['pass' => ['location','slug']]);

    Router::connect('/:slug.html', ['controller' => 'products', 'action' => 'view'], ['pass' => ['slug']]);
	
    Router::connect('/:location/', ['controller' => 'locations', 'action' => 'view'], ['pass' => ['location']]);
	 
     
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
