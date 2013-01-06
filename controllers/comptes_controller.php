<?php
class ComptesController extends AppController {
	var $helpers = array('Form', 'Alaxos.AlaxosForm', 'Alaxos.AlaxosHtml');
	var $components = array('Alaxos.AlaxosFilter');
	var $name = 'Comptes';
var $paginate = array(
        'limit' => 500,
        'order' => array(
            'Compte.id' => 'asc'
        )
    );
	function index() {
		$this->Compte->recursive = 0;
		$this->set('comptes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid compte', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('compte', $this->Compte->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Compte->create();
			if ($this->Compte->save($this->data)) {
				$this->Session->setFlash(__('The compte has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compte could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Compte->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid compte', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Compte->save($this->data)) {
				$this->Session->setFlash(__('The compte has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compte could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Compte->read(null, $id);
		}
		$users = $this->Compte->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for compte', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Compte->delete($id)) {
			$this->Session->setFlash(__('Compte deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Compte was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	/*
	 * gestion du chalet des ravieres
	 */
	function chalet() {
	$this->Compte->recursive = 0;
		$this->set('comptes', $this->paginate());
		}
}
?>
