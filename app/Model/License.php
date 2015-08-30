<?php
App::uses('AppModel', 'Model');
/**
 * License Model
 *
 * @property Driver $Driver
 */
class License extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'serial';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Driver' => array(
			'className' => 'Driver',
			'foreignKey' => 'driver_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
