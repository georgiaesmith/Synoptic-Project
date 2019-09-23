<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MediaModel;

class MediaController extends Controller
{
    public function GetMediaData( Request $aRequest ){
      $lData = MediaModel::all();
      return view( 'welcome', $lData );

    }

    public function LoadMediaData( Request $aRequest ){
      return MediaModel::all();
    }
}
