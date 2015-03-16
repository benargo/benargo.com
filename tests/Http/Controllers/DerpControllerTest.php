<?php namespace Portfolio\Tests\Http\Controllers;

Class DerpControllerTest extends \TestCase {

  /**
   * Tests the basic controller
   *
   * @return void
   */
  public function testHttpResponseCode()
  {
    $response = $this->call('GET', '/derp');

    $this->assertEquals(410, $response->getStatusCode());
  }

  public function testAjaxHttpResponseCode()
  {
    $response = $this->call('GET', '/derp/ajax');

    $this->assertEquals(410, $response->getStatusCode());
  }
}
