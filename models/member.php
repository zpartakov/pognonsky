<?php
class Member extends AppModel {
	var $name = 'Member';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Invoice' => array(
			'className' => 'Invoice',
			'foreignKey' => 'member_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
