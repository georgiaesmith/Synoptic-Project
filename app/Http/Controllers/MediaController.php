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

    public function DeleteMediaEntry( Request $aRequest ){
        $lInput = $aRequest->all();
        /* Make sure we have got our payload - i.e. "IDsToDelete": array( 1,2,3,4 ) */
        dd( $lInput );

        /* Is the payload valid - check if its an array, and that the information inside is what you want */

        /* If using IDs, look at doing a delete using laravel ORM delete */

        $lUserID = $this->argument( 'id' );
        return view( 'welcome', $lData );
    }
}
