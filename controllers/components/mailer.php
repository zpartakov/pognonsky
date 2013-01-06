<?php
class MailerComponent
{
    var $components = array('Email');
    
    /**
     * @var AppController
     */
    protected $controller;
    
    private $errors = array();
    
    
    /****************************************************************************************************/
     
    public function initialize(&$controller)
	{
		$this->controller = $controller;
	}
	
	
	/**
	 * Send the same email to many recipients, one by one
	 * 
	 * @param unknown_type $title
	 * @param unknown_type $content
	 * @param Array $recipients array('email' => array('id' => '', 'name' => '')) 
	 */
    public function send_new_email_one_by_one($title, $content, $recipients)
    {
    	$this->errors = array();
    	
    	foreach($recipients as $email => $recipient)
    	{
	        $this->Email->from    = Configure :: read('email.default_sender');
	        $this->Email->to      = $recipient['name'] . '<' . $email . '>';
	        
	        $this->Email->subject = $title;
	        $this->Email->sendAs  = 'text';
        	
	        if(!$this->Email->send($content))
        	{
        		$this->errors[] = $this->Email->smtpError;
        	}
    	}
    	
        return count($this->errors) == 0;
    }
    
    public function get_errors()
    {
    	return $this->errors;
    }
    
}
?>