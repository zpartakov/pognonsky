<?php
class JournalsController extends AppController {

	var $name = 'Journals';
	#criteres de tri
	var $paginate = array(
        'limit' => 200,
        'order' => array(
            'Journal.date' => 'desc'
        )
    );
	function index() {
		if($this->data['Journal']['q']) {
			//echo "bla"; exit;
					$input = $this->data['Journal']['q']; 
					# sanitize the query
					App::import('Sanitize');
					$q = Sanitize::escape($input);
					$options = array(
					"Journal.lib LIKE '%" .$q ."%'" 
					." OR Journal.mont LIKE '%" .$q ."%'");
				$this->set(array('journals' => $this->paginate('Journal', $options))); 
				} else {
		
		$this->Journal->recursive = 0;
		   #$this->Photo->query("SELECT * FROM photos LIMIT 2;");
 #$comptes = $this->Compte->find('all');
		$this->set('journals', $this->paginate());
				}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid journal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('journal', $this->Journal->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Journal->create();
			if ($this->Journal->save($this->data)) {
				$this->Session->setFlash(__('The journal has been saved', true));
				$this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('The journal could not be saved. Please, try again.', true));
			}
		}
		
		/*$cc = $this->Journal->Compte->find('list');
		$cd = $this->Journal->Compte->find('list');
		//$this->set('comptes', $this->Compte->find('all'));
		$this->set(compact('cc', 'cd'));
		$users = $this->Journal->User->find('list');
		$this->set(compact('users'));*/
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid journal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Journal->save($this->data)) {
				$this->Session->setFlash(__('The journal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Journal->read(null, $id);
		}
		/*$ccs = $this->Journal->Cc->find('list');
		$cds = $this->Journal->Cd->find('list');
		$this->set(compact('ccs', 'cds'));*/
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for journal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Journal->delete($id)) {
			$this->Session->setFlash(__('Journal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Journal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function importccp($id = null) {
	}

	function importraiffeisen($id = null) {
	}	
	function ajustejournal($id = null) {
	}
	function bilan($id = null) {
	}

}

##### out of main class #########
	function comptes($lib,$id,$nom) {
		echo "<label for=\"Journal" .$id ."\">".$lib."</label>";
		echo "<select id=\"Journal" .$id ."\" name=\"data[Journal][".$nom."]\">";
		$sql="SELECT * FROM comptes ORDER BY lib ASC";
		#do and check sql
		$sql=mysql_query($sql);
		if(!$sql) {
			echo "SQL error: " .mysql_error(); exit;
		}
		
		$i=0;
		while($i<mysql_num_rows($sql)){
			echo "<option value=\"" .mysql_result($sql,$i,'id') ."\">" .mysql_result($sql,$i,'lib') ."</option>";
			$i++;
			}
		echo "</select>";
	}
	

	
	?>
