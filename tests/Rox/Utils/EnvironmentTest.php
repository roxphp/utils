<?php

namespace Rox\Utils;

class EnvironmentTest extends \PHPUnit_Framework_TestCase
{

	public function testDetect()
	{
		Environment::detect(function () {
			return 'arus';
		});

		$this->assertEquals('arus', Environment::get());
		$this->assertTrue(Environment::is('arus'));
	}

	public function testGetterSetter()
	{
		Environment::set('melmac');
		$this->assertEquals('melmac', Environment::get());
		$this->assertTrue(Environment::is('melmac'));
	}

}
