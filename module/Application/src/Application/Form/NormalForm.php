<?php

namespace Application\Form;

use Zend\Form\Form;

class NormalForm extends Form
{
	public function __construct($name = null)
	{
		parent::__construct($name);
		$this->setAttribute("novalidate", true);

		$this->add(array(
			'name' => 'name',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'placeholder' => 'You name here...',
				'required' => 'required',
			),
			'options' => array(
				'label' => 'What is your name?',
			),
		));

		$this->add(array(
			'name' => 'password',
			'type' => 'Zend\Form\Element\Password',
			'attributes' => array(
				'placeholder' => 'Digite sua senha.',
			),
			'options' => array(
				'label' => 'Senha:',
			),
		));

		$this->add(array(
			'name' => 'password_verify',
			'type' => 'Zend\Form\Element\Password',
			'attributes' => array(
				'placeholder' => 'Repita a senha.',
			),
			'options' => array(
				'label' => 'Repetir Senha:',
			),
		));

		$this->add(array(
			'name' => 'email',
			'type' => 'Zend\Form\Element\Email',
			'attributes' => array(
				'placeholder' => 'Digite o email.',
			),
			'options' => array(
				'label' => 'Email:',
			),
		));

		$this->add(array(
			'name' => 'birthdate',
			'type' => 'Zend\Form\Element\Date',
			'attributes' => array(
				'placeholder' => 'Digite uma data.',
			),
			'options' => array(
				'label' => 'Digite a data:',
			),
		));

		$this->add(array(
			'name' => 'Submit',
			'type' => 'Zend\Form\Element\Submit',
			'attributes' => array(
				'value' => 'Submit',
			),
		));
	}
}