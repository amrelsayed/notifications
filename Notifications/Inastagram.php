<?php

require_once('NotificationInterface.php');

class Inastagram implements NotificationInterface
{
	public function send()
	{
		echo 'Inastagram notification';
	}
}