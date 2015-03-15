<?php namespace Portfolio\Tests\Http\Controllers;

Class WelcomeControllerTest extends \TestCase {

  /**
   * Tests the basic controller
   *
   * @return void
   */
  public function testHttpResponseCode()
  {
    $response = $this->call('GET', '/');

    $this->assertEquals(200, $response->getStatusCode());
  }
}
