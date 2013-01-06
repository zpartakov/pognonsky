<?php
$links   = array();

/*//Operations - Journal
$class = ($this->params['controller'] == 'operations' && isset($this->params['prefix']) && $this->params['prefix'] == 'admin') ? 'selected' : null;
$links[] = $this->Html->link(___('Journal', true), '/operations', array('class' => $class));*/
###########
//Operations - Journal
$class = ($this->params['controller'] == 'operations' && isset($this->params['prefix']) && $this->params['prefix'] == 'admin') ? 'selected' : null;
$links[] = $this->Html->link(___('Journal', true), '/journals', array('class' => $class));
###########
//Accounts / cptes
$class = ($this->params['controller'] == 'thirds' && isset($this->params['prefix']) && $this->params['prefix'] == 'admin') ? 'selected' : null;
$comptes_links[] = $this->Html->link(___('Comptes', true), '/comptes', array('class' => $class));
$links[] = $this->Html->link(___('', true), '/journals/add', array('class' => $class));

//ajuste journal
$class = ($this->params['controller'] == 'thirds' && isset($this->params['prefix']) && $this->params['prefix'] == 'admin') ? 'selected' : null;
$comptes_links[] = $this->Html->link(___('Màj Journal', true), '/journals/ajustejournal', array('class' => $class));
//ccp
$class = ($this->params['controller'] == 'thirds' && isset($this->params['prefix']) && $this->params['prefix'] == 'admin') ? 'selected' : null;
$comptes_links[] = $this->Html->link(___('CCP Import', true), '/journals/importccp', array('class' => $class));

//raiff
$class = ($this->params['controller'] == 'thirds' && isset($this->params['prefix']) && $this->params['prefix'] == 'admin') ? 'selected' : null;
$comptes_links[] = $this->Html->link(___('Raiffeisen Import', true), '/journals/importraiffeisen', array('class' => $class));

//Plan comptable
$class = ($this->params['controller'] == 'thirds' && isset($this->params['prefix']) && $this->params['prefix'] == 'admin') ? 'selected' : null;
$comptes_links[] = $this->Html->link(___('Plan comptable', true), '/pages/plan', array('class' => $class));

$links['<a>Comptes</a>'] = $comptes_links;
########### FACTURES
//Invoices
$class = ($this->params['controller'] == 'invoices' && isset($this->params['prefix']) && $this->params['prefix'] == 'admin') ? 'selected' : null;
$links[] = $this->Html->link(___('invoices', true), '/admin/invoices', array('class' => $class));

###########

//Members
$class = ($this->params['controller'] == 'members' && isset($this->params['prefix']) && $this->params['prefix'] == 'admin') ? 'selected' : null;
$links[] = $this->Html->link(___('members', true), '/admin/members', array('class' => $class));
###########

//Insurances
$class = ($this->params['controller'] == 'insurances' && isset($this->params['prefix']) && $this->params['prefix'] == 'admin') ? 'selected' : null;
$links[] = $this->Html->link(___('insurances', true), '/admin/insurances', array('class' => $class));
##########//Users
$class = ($this->params['controller'] == 'users' && isset($this->params['prefix']) && $this->params['prefix'] == 'admin') ? 'selected' : null;
$admin_links[] = $this->Html->link(___('users', true), '/admin/users', array('class' => $class));

//Roles
$class = ($this->params['controller'] == 'roles' && isset($this->params['prefix']) && $this->params['prefix'] == 'admin') ? 'selected' : null;
$admin_links[] = $this->Html->link(___('roles', true), '/admin/roles', array('class' => $class));

//ACL
$class = ($this->params['plugin'] == 'acl') ? 'selected' : null;
$admin_links[] = $this->Html->link(___('ACL', true), '/admin/acl', array('class' => $class));

$links['<a>Admin</a>'] = $admin_links;

##########//links
$class = ($this->params['controller'] == 'users' && isset($this->params['prefix']) && $this->params['prefix'] == 'web') ? 'selected' : null;
$web[] = $this->Html->link(___('Liens', true), '/weblinks/', array('class' => $class));

//categories
$class = ($this->params['controller'] == 'roles' && isset($this->params['prefix']) && $this->params['prefix'] == 'web') ? 'selected' : null;
$web[] = $this->Html->link(___('Categories', true), '/categories/', array('class' => $class));


$links['<a>Links</a>'] = $web;
##########


if(count($links) > 0)
{
    //echo '	<div style="float:left;color:#000000;">';
    //echo '	</div>';
    echo '	<div class="menu_wrapper">';
        echo $this->Html->nestedList($links, array('class' => 'navbar'));
    echo '	</div>';
}
