<?php
/* Copyright (C) 2020 Andor Molnár <andor@apache.org> */

/**
 * \file    test/unit/NatStatusTest.php
 * \ingroup natsend
 * \brief   PHPUnit test for NatStatus class.
 */

namespace test\unit;

/**
 * Class NatStatusTest
 * @package Testnatsend
 */
class NatStatusTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Global test setup
     * @return void
	 */
	public static function setUpBeforeClass()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
	}

	/**
	 * Unit test setup
     * @return void
	 */
	protected function setUp()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
	}

	/**
	 * Verify pre conditions
     * @return void
	 */
	protected function assertPreConditions()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
	}

	/**
	 * A sample test
     * @return bool
	 */
	public function testSomething()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
		// TODO: test something
		$this->assertTrue(true);
	}

	/**
	 * Verify post conditions
     * @return void
	 */
	protected function assertPostConditions()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
	}

	/**
	 * Unit test teardown
     * @return void
	 */
	protected function tearDown()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
	}

	/**
	 * Global test teardown
     * @return void
	 */
	public static function tearDownAfterClass()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
	}

	/**
	 * Unsuccessful test
	 *
	 * @param  Exception $e    Exception
     * @return void
	 * @throws Exception
	 */
	protected function onNotSuccessfulTest(Exception $e)
	{
		fwrite(STDOUT, __METHOD__ . "\n");
		throw $e;
	}
}
