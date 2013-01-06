<?php
class Invoice extends AppModel {
	var $name = 'Invoice';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Insurance' => array(
			'className' => 'Insurance',
			'foreignKey' => 'insurance_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'member_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
