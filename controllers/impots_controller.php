<?php
class ImpotsController extends AppController {

	var $name = 'Impots';

	function index() {
		$this->Impot->recursive = 0;
		$this->set('impots', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid impot', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('impot', $this->Impot->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Impot->create();
			if ($this->Impot->save($this->data)) {
				$this->Session->setFlash(__('The impot has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The impot could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid impot', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Impot->save($this->data)) {
				$this->Session->setFlash(__('The impot has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The impot could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Impot->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for impot', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Impot->delete($id)) {
			$this->Session->setFlash(__('Impot deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Impot was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function recapitulatifs() {
		
	
	}
	
	function voisin($id = null) {
			$neighbors = $this->Impot->find('neighbors', array('field' => 'id', 'value' => $id));
			print_r($neighbors);
	}
function export() {
	  $this->layout = '';
        }
}
