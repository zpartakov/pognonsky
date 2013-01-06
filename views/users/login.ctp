<?php 
echo $html->script('jquery/jquery', false);
echo $html->scriptBlock('$(document).ready(function(){
	$("#UserUsername").focus();
});', array('inline' => false));

if(!$session->check('Auth.User'))
{
?>

<!--<div id="page_content" style="text-align:center;margin:50px;">-->
    <p>&nbsp;</p>
    
    <p style="text-align:center;">
    <?php 
    echo ___('Please enter your credential below');
    ?>
    </p>
    
    <?php 
    echo $this->AlaxosForm->create('User', array('url' => '/login', 'id' => 'loginForm'));
    ?>
    <div style="text-align:left;margin:10px auto;width:250px;">
    
	    <table border="0" style="width:100%">
	    <tr>
	    	<td style="width:90px"><?php echo __('login', true); ?></td>
	    	<td>:</td>
	    	<td><?php echo $this->AlaxosForm->input('username', array('label' => false, 'style' => 'width:100%'));?></td>
	    </tr>
	    <tr>
	    	<td><?php echo __('password', true); ?></td>
	    	<td>:</td>
	    	<td><?php echo $this->AlaxosForm->input('password', array('label' => false, 'style' => 'width:100%'));?></td>
	    </tr>
	    <tr>
	    	<td></td>
	    	<td></td>
	    	<td>
		    	<?php 
			    echo $this->AlaxosForm->end(__('submit', true));
			    ?>	
	    	</td>
	    </tr>
	    </table>
    </div>
    
<!--</div>-->
<?php 
}
else
{
    echo '<div style="margin:50px;text-align:center;">';
    echo sprintf(___("you are logged in as '%s'", true), $session->read('Auth.User.firstname') . ' ' . $session->read('Auth.User.lastname'));
    echo '</div>';
}
?>