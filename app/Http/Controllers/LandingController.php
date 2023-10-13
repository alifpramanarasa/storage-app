<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingController extends Controller
{

  protected $BMKG_URL = 'https://cuaca-gempa-rest-api.vercel.app/';
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $dataQuake = http::get($this->BMKG_URL . 'quake')->object();

    $dataWeather = http::get($this->BMKG_URL . 'weather/jawa-barat/bandung')->object();

    $result['weather'] = $dataWeather->data->params[6];
    $result['quake'] = $dataQuake->data;

    return view('landing/index', $result);
  }

  public function profile()
  {
    return view('profile/index');
  }

  public function status()
  {
    return response()->json([
      'status' => 'OK',
      'message' => 'API is running on ' . date('Y-m-d H:i:s')
    ]);
  }
}
