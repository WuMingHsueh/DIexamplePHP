<?php
namespace DIexample\Controllers;

use Pimple\Container;

class A
{
	private $session;

	public function __construct(Container $container)
	{
		$this->session = $container['session'];
	}

	public function saveA()
	{
		$this->session->write(\session_id(), 'A write data');
	}

	public function readA()
	{
		return $this->session->read(\session_id());
	}

	public function deleteA()
	{
		return $this->session->destroy(\session_id());
	}
}
