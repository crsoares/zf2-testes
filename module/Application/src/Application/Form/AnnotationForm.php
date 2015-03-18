<?php

namespace Application\Form;

use Zend\Form\Annotation;

/**
 * @Annotation\Name("annotationform")
 *
 *
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
 */
class AnnotationForm
{
	/**
	 * @Annotation\Exclude()
	 */
	public $id;

	/**
	 * Adicionar dois filtros para este elemento.
	 *
	 * @Annotation\Filter({"name": "StringTrim"})
	 * @Annotation\Filter({"name": "StripTags"})
	 *
	 * Adicionar um validador para garantir que o comprimento da corda
	 * não vai ser maior do que 50, mas também não
	 * menor do que cinco.
	 *
	 * @Annotaion\Validator({
	 * 		"name": "StringLength",
	 * 		"options": {
	 *			"min": 5,
	 * 			"max": 50,
	 *			"encoding": "UTF-8"
	 *		}
	 * })
	 *
	 * Definir este elemento a ser necessário.
	 *
	 * @Annotation\Required(true)
	 *
	 * @Annotation\Attributes({
	 *		"type": "text",
	 * 		"placeholder": "Your name here...",
	 * })
	 *
	 * Defina os atributos para o elemento
	 *
	 * Defina as opções deste elemento.
	 *
	 * @Annotation\Options({
	 *		"label": "What is your name?"
	 * })
	 */
	public $name; 
}