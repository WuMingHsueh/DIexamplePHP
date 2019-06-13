<?php
namespace DIexample\Controllers;

use Pimple\Container;

class B
{
	private $session;

	public function __construct(Container $container)
	{
		$this->session = $container['session'];
	}

	public function saveB()
	{
		$this->session->write(\session_id(), 'B write data');
	}

	public function readB()
	{
		return $this->session->read(\session_id());
	}
}
