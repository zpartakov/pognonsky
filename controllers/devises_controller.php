<?php
class DevisesController extends AppController {

	var $name = 'Devises';

	function index() {
		$this->Devise->recursive = 0;
		$this->set('devises', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid devise', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('devise', $this->Devise->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Devise->create();
			if ($this->Devise->save($this->data)) {
				$this->Session->setFlash(__('The devise has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The devise could not be saved. Please, try again.', true));
			}
		}
		$comptes = $this->Devise->Compte->find('list');
		$this->set(compact('comptes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid devise', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Devise->save($this->data)) {
				$this->Session->setFlash(__('The devise has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The devise could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Devise->read(null, $id);
		}
		//		$ingredients = $this->Recette->Ingredient->find('all', array ('order' => 'Ingredient.libelle'));
		//$this->set(compact('ingredients'));
		$comptes = $this->Devise->Compte->find('list', array('order'=>'Compte.lib'));
	//	$this->set(compact('comptes'),array('order'=>'Compte.lib'));
			$this->set(compact('comptes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for devise', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Devise->delete($id)) {
			$this->Session->setFlash(__('Devise deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Devise was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
