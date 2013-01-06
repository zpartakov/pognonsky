<?php
class WeblinksController extends AppController {

	var $name = 'Weblinks';

	function index() {
		$this->Weblink->recursive = 0;
		$this->set('weblinks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid weblink', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('weblink', $this->Weblink->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Weblink->create();
			if ($this->Weblink->save($this->data)) {
				$this->Session->setFlash(__('The weblink has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The weblink could not be saved. Please, try again.', true));
			}
		}
		$categories = $this->Weblink->Category->find('list');
		$this->set(compact('categories'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid weblink', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Weblink->save($this->data)) {
				$this->Session->setFlash(__('The weblink has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The weblink could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Weblink->read(null, $id);
		}
		$categories = $this->Weblink->Category->find('list');
		$this->set(compact('categories'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for weblink', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Weblink->delete($id)) {
			$this->Session->setFlash(__('Weblink deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Weblink was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
