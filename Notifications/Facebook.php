<?php

require_once('NotificationInterface.php');

class Facebook implements NotificationInterface
{
	public function send()
	{
		echo 'facebook notification';
	}
}