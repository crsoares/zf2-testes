<?php

namespace Application\Model\Hydrator;

use Zend\Stdlib\Hydrator\AbstractHydrator;

class SampleModelHydrator extends AbstractHydrator
{
	private $mapping = array(
		'id' => 'primary',
		'value' => 'engine',
		'description' => 'text',
	);

	public function extract($object)
	{
		if (is_object($object) === false) {
			throw new \Exception("We expect object to be an actual object!");
		}

		$return = array();

		foreach ($this->mapping as $key => $map) {
			$getter = 'get' . ucfirst($map);

			$return[$key] = $this->extractValue($key, $object->$getter());
		}

		return $return;
	}

	public function hydrate(array $data, $object)
	{
		if (is_object($object) === false) {
			throw new \Exception("We expect object to be an actual object!");
		}

		foreach ($data as $property => $value) {
			if (array_key_exists($property, $this->mapping) === true) {
				$setter = 'set' . ucfirst($this->mapping[$property]);

				$object->$setter($this->hydrateValue($this->mapping[$property], $value));
			}
		}

		return $object;
	}
}