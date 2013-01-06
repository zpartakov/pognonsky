<?php
class InsurancesController extends AppController {

	var $name = 'Insurances';

	function index() {
		$this->Insurance->recursive = 0;
		$this->set('insurances', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid insurance', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('insurance', $this->Insurance->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Insurance->create();
			if ($this->Insurance->save($this->data)) {
				$this->Session->setFlash(__('The insurance has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The insurance could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid insurance', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Insurance->save($this->data)) {
				$this->Session->setFlash(__('The insurance has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The insurance could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Insurance->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for insurance', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Insurance->delete($id)) {
			$this->Session->setFlash(__('Insurance deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Insurance was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
