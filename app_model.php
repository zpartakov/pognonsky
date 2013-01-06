<?php
/* SVN FILE: $Id$ */

/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppModel extends Model
{
    var $actsAs = array('Alaxos.UserLinker' => array('get_user_id_function' => 'get_logged_user_id',
                        'Containable'));
    
    /*
	 * Trick to be able to access the Auth component in models
	 * This variable is set in the beforeFilter() of the AppController
	 */
	static $cakeAuth = null;
	
	public function get_logged_user_id()
	{
	   // return AppModel :: $cakeAuth->user('id');
	}
	
    
    /**
     * Override method to automatically translate errors
     *
     * @param $field
     * @param $value
     */
	function invalidate($field, $value = true)
	{
		return parent :: invalidate($field, __($value, true));
	}
	
}
?>
