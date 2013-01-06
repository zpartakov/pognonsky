<?php
class Bilan extends AppModel {
	var $name = 'Bilan';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Compte' => array(
			'className' => 'Compte',
			'foreignKey' => 'compte_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
