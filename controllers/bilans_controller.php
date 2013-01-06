<?php
class BilansController extends AppController {

	var $name = 'Bilans';

	function index() {
		$this->Bilan->recursive = 0;
		$this->set('bilans', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid bilan', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bilan', $this->Bilan->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Bilan->create();
			if ($this->Bilan->save($this->data)) {
				$this->Session->setFlash(__('The bilan has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bilan could not be saved. Please, try again.', true));
			}
		}
		$comptes = $this->Bilan->Compte->find('list');
		$this->set(compact('comptes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid bilan', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Bilan->save($this->data)) {
				$this->Session->setFlash(__('The bilan has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bilan could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Bilan->read(null, $id);
		}
		$comptes = $this->Bilan->Compte->find('list');
		$this->set(compact('comptes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for bilan', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Bilan->delete($id)) {
			$this->Session->setFlash(__('Bilan deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bilan was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function bilan($id = null) {
		
	}

}
