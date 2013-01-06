<?php
class AppError extends ErrorHandler 
{
    /**
     * Determines if the layout used when displaying the error must be 'ajax'
     * 
     * @var boolean
     */
    private $isAjax = false;
    
    function __construct($method, $messages) 
    {
        $this->setAjax($messages);
        
        parent :: __construct($method, $messages);
    }
    
    
    /*********************************************************************/
    
    function notAuthorized($params)
    {
        if(isset($params['message']))
        {
            $this->controller->set('message', $params['message']);
        }
        else
        {
            $this->controller->set('message', ___('not authorized', true));
        }
        
        $this->_outputMessage('not_authorized');
    }
    
    
    function linkError($params)
    {
        if(isset($params['message']))
        {
            $this->controller->set('message', $params['message']);
        }
        else
        {
            $this->controller->set('message', ___('link error', true));
        }
        
        $this->_outputMessage('link_error');
    }
    
    function simpleMessage($params)
    {
        if(isset($params['message']))
        {
            $this->controller->set('message', $params['message']);
        }
        else
        {
            $this->controller->set('message', ___('an error occured', true));
        }
        
        $this->_outputMessage('simple_message');
    }
    
    
    /*********************************************************************/
    
    private function setAjax($params)
    {
        $this->isAjax = (array_key_exists('ajax', $params) && $params['ajax'] == true);
    }
    
    
    /**
     * Override to automatically use the layout 'ajax'
     * 
     * @param $template
     */
    function _outputMessage($template) 
    {
        if($this->isAjax)
        {
            $this->controller->layout = 'ajax';
        }
        
		$this->controller->render($template);
		$this->controller->afterFilter();
		echo $this->controller->output;
	}
	

}
?>