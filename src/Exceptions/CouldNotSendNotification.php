<?php

namespace NotificationChannels\NetCoreSms\Exceptions;

use Exception;

class CouldNotSendNotification extends Exception {
	/**
	 * @param Exception $exception
	 * @return static
	 */
	public static function serviceRespondedWithAnError(Exception $exception)
	{
		return new static("NetCore service responded with an error '{$exception->getCode()}: {$exception->getMessage()}'");
	}
}