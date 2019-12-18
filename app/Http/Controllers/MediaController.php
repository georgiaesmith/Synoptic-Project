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
        $lInput = $aRequest->all();
        return MediaModel::all();
    }

    public function DeleteMediaEntry( Request $aRequest ){
        $lIsSuccessful = true;
        $lInput = $aRequest->all();
        $lGeorgia = MediaModel::all();
        if ( !array_key_exists( "ID", $lInput ) ){
            return response()->json([
                "ReturnStatus" => 'Error',
                'ReturnMessage' => "Media Entry ID is missing."
            ]);
        }
        $lID = MediaModel::find( $lInput[ "ID" ] );
        if ( $lID == null ){
            return response()->json([
                "ReturnStatus" => 'Error',
                'ReturnMessage' => "Media Entry ID is not valid."
            ]);
        }
        $lID->delete();
        return response()->json([
            "ReturnStatus" => 'Success',
            "ReturnCode" => 200,
            'ReturnMessage' => "Media entry deleted successfully."
        ]);
    }
}
