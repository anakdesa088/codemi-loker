<?php 
/**
 * 
 */
class Auth
{
	protected $ci;
	function __construct()
	{
		$this->ci = &get_instance();
	}
}