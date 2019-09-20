<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MediaModel;

class MediaController extends Controller
{
    public function GetMediaData( Request $aRequest ){
      $lData = MediaModel::all();
      dd( $lData->toArray() );
      // $lInput = $aRequest->all();
    }
}
