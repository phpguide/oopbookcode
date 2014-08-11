<?php

namespace MyWebSite
{
	require 'EmailSystem/Event.php';
	require 'Calendar/Event.php';

	$calendarEvent = new \Calendar\Event();
	$emailEvent = new \EmailSystem\Event();
}