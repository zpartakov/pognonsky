<?php
class Devise extends AppModel {
	var $name = 'Devise';
	var $displayField = 'short';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Compte' => array(
			'className' => 'Compte',
			'joinTable' => 'comptes_devises',
			'foreignKey' => 'devise_id',
			'associationForeignKey' => 'compte_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
