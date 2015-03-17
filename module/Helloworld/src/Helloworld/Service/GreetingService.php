<?php

namespace Helloworld\Service;

class GreetingService
{
	private $loggingService;

	public function getGreeting()
	{
		$this->loggingService->log("getGreeting executed!");

		if (date("H") <= 11) {
			return "Good morning, world!";
		} elseif (date("H") > 11 && date("H") < 17) {
			return "Hello, world!";
		} else {
			return "Good evening, world!";
		}
	}

	public function setLoggingService(LoggingServiceInterface $loggingService)
	{
		return $this->loggingService = $loggingService;
	}

	public function getLoggingService()
	{
		return $this->loggingService;
	}
}