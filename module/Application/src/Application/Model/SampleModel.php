<?php

namespace Application\Model;

class SampleModel
{
	private $engine;
	private $primary;
	private $text;

	public function getEngine()
	{
		return $this->engine;
	}

	public function setEngine($engine)
	{
		$this->engine = $engine;
		return $this;
	}

	public function getPrimary()
	{
		return $this->primary;
	}

	public function setPrimary($primary)
	{
		if (!is_int($primary)) {
			throw new \Exception("Primary ({$primary}) should be an integer!");
		}

		$this->primary = $primary;
		return $this;
	}

	public function getText()
	{
		return $this->text;
	}

	public function setText($text)
	{
		$this->text = $text;
		return $this;
	}

	public function doStuff($array)
	{
		return true;
	}
}