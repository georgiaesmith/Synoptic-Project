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
        $lInput = $aRequest->all();
        // dd( $lInput );
        /* Is the payload valid - check if its an array, and that the information inside is what you want */
        if ( !array_key_exists( "ID", $lInput ) ){
            /* there was no ID provided -> log error */
            // dd( "No ID provided" );
        }

        $lGeorgia = MediaModel::all();
        /* VALIDATE :: make sure that the selected ID is present in the database */
        dd( $lGeorgia);
        /* find a way to get error messages */


        // if( $lInput[ "ID" ] in  )



        // if ( count( $lInput ) < 1 ){
        //     dd( "im an empty array" );
        //
        // }

        /* If using IDs, look at doing a delete using laravel ORM delete */
        $lID = MediaModel::find( $lInput[ "ID" ] );
        $lID->delete();
        /* Log the successful delete */
        return response()->json([
            "ReturnStatus" => 'Success',
            "ReturnCode" => 200,
            'ReturnMessage' => "Media entry deleted successfully."
        ]);
    }
}
