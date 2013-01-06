<?php
class OperationsController extends AppController {

	var $name = 'Operations';


 var $paginate = array(
 'limit' => 250,
 'order' => array(
 'Operation.DATEs' => 'asc'
 )
 );
/*
 var $paginate = array(
 'limit' => 250 )
 ;
 */
 
	function index() {
		$this->Operation->recursive = 0;
		$this->set('operations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid operation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('operation', $this->Operation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Operation->create();
			if ($this->Operation->save($this->data)) {
				$this->Session->setFlash(__('The operation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Operation->User->find('list');
		$thirds = $this->Operation->Third->find('list');
		$accounts = $this->Operation->Account->find('list');
		$this->set(compact('users', 'thirds', 'accounts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid operation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Operation->save($this->data)) {
				$this->Session->setFlash(__('The operation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Operation->read(null, $id);
		}
		$users = $this->Operation->User->find('list');
		$thirds = $this->Operation->Third->find('list');
		$accounts = $this->Operation->Account->find('list');
		$this->set(compact('users', 'thirds', 'accounts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for operation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Operation->delete($id)) {
			$this->Session->setFlash(__('Operation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Operation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Operation->recursive = 0;
		$this->set('operations', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid operation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('operation', $this->Operation->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Operation->create();
			if ($this->Operation->save($this->data)) {
				$this->Session->setFlash(__('The operation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Operation->User->find('list');
		$thirds = $this->Operation->Third->find('list');
		$accounts = $this->Operation->Account->find('list');
		$this->set(compact('users', 'thirds', 'accounts'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid operation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Operation->save($this->data)) {
				$this->Session->setFlash(__('The operation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Operation->read(null, $id);
		}
		$users = $this->Operation->User->find('list');
		$thirds = $this->Operation->Third->find('list');
		$accounts = $this->Operation->Account->find('list');
		$this->set(compact('users', 'thirds', 'accounts'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for operation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Operation->delete($id)) {
			$this->Session->setFlash(__('Operation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Operation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
