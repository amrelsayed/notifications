<?php

require_once('NotificationInterface.php');

class NotificationClient
{
	private $notification;

	public function __construct(NotificationInterface $notification)
	{
		$this->notification = $notification;
	}
	
	public function send()
	{
		$this->notification->send();
	}
}