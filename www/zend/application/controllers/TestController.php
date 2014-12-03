<?php

class TestController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
		//echo 1;
		
    }
	public function chatAction(){
		//echo 'I`m in the chat method';
		//$this->view->assign('msg', 'This is a msg variable');
		$form = new Application_Form_Register();
		$this->view->form = $form;
		
		/*$register = new Application_Model_Register();
		$register->createUser(array(
			'group' 	=> 'Administrator',
			'login' 	=> 'admin1',
			'password' 	=> 'admin2'
			));*/
			
		$update = new Application_Model_Register();
		$update->updateUser(array(
			'group' 	=> 'Administrator',
			'login' 	=> 'admin12',
			'password' 	=> 'admin21'
			), 3);
	}
	public function saveAction(){
		
	}


}

