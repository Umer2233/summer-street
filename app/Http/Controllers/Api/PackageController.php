<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PluginController extends Controller
{
  /**
   * Display a listing of the resource.
   * @return \Illuminate\Http\Response
   */
  public function isLoaded(Request $request, $slug)
  {
    return is_incevio_package_loaded($slug) ? 'yes' : 'no';
  }
}
