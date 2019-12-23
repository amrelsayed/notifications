<?php 

require_once('Notifications/NotificationClient.php');
require_once('Notifications/Inastagram.php');


$notification = new NotificationClient(new Inastagram);

$notification->send();