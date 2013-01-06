<?php
class ThirdsController extends AppController {

	var $name = 'Thirds';

	function index() {
		$this->Third->recursive = 0;
		$this->set('thirds', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid third', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('third', $this->Third->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Third->create();
			if ($this->Third->save($this->data)) {
				$this->Session->setFlash(__('The third has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The third could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid third', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Third->save($this->data)) {
				$this->Session->setFlash(__('The third has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The third could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Third->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for third', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Third->delete($id)) {
			$this->Session->setFlash(__('Third deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Third was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Third->recursive = 0;
		$this->set('thirds', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid third', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('third', $this->Third->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Third->create();
			if ($this->Third->save($this->data)) {
				$this->Session->setFlash(__('The third has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The third could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid third', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Third->save($this->data)) {
				$this->Session->setFlash(__('The third has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The third could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Third->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for third', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Third->delete($id)) {
			$this->Session->setFlash(__('Third deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Third was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>