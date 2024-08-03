<?php

App::uses('AppModel', 'Model');

/**

 * Gallery Model

 *

 */

class Gallery extends AppModel {
 
  public $validate = array(

        'name' => array(

            'rule1' => array(

                'rule' => array('notBlank'),

                'message' => 'Gallery Name is required',

                //'allowEmpty' => false,

                //'required' => true,

                //'last' => false, // Stop validation after this rule

                //'on' => 'create', // Limit validation to 'create' or 'update' operations

            ),
 

        ),

	 

    );

	

	 public $belongsTo = array(

        'Product' => array(

            'className' => 'Product',

            'foreignKey' => 'product_id',

            'conditions' => '',

            'fields' => '',

            'order' => ''

        )

    );

 

}

