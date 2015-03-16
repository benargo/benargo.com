<?php namespace Portfolio\Http\Controllers;

class DerpController extends Controller {
  /**
   * Derp button controller
   * 
   * This section of my Portfolio was removed in version 9. 
   * It now returns a custom HTTP/1.1 410 Gone message.
   */

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest');
  }

  /**
   * Show the HTTP/1.1 410 Gone message to the user
   *
   * @return Response
   */
  public function index()
  {
    $view = view('shared.master', array(
      'title' => 'The Mighty Derp Button!',
      'description' => 'The mighty derp button of UWE Students\' Union.',
      'css' => array('/css/derp.css')
    ))->nest('content', 'pages.derp');

    return response($view, 410);
  }
}