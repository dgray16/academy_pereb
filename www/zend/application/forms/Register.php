<?php

class Application_Form_Register extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
		
		$this->setMethod('post');
		$this->setAttrib('action', 'save');
		
		// First style
		$this->addElement('text', 'email',array(
		'label' 		=> 'Email',
		'required' 		=> true,
		'filter' 		=> array('StringTrim'),
		'validators' 	=> array('EmailAddress')
		));
		
		// Second style
		$name = new Zend_Form_Element_Text('name');
		$name	->setLabel('Name')
				->setRequired(true)
				->addFilter('StripTags');
					
		
		$this->addElements(array($name));
		
		//$this->addElement('text', 'login');
		$this->addElement('password', 'password');
		$this->addElement('submit', 'save');
    }


}

