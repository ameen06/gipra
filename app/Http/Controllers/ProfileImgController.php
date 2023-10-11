<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileImgController extends Controller
{
    public function img_upload(Request $request){
        if($request->hasFile('filepond')){
            $fileNameOriginal = $request->file('filepond') ->getClientOriginalName() ;
            $fileNameOld = pathinfo($fileNameOriginal, PATHINFO_FILENAME);
            $extension = $request->file('filepond')->getClientOriginalExtension();
            $image = $request->file('filepond');
            $filenameNew = $fileNameOld.'_'.time().'.'.$extension;
            $filename = str_replace(' ', '_', $filenameNew);
            
            if(Storage::disk('imagekit')->putFileAs('gipro/profiles', $image, $filename)){

                $fileurl = "https://ik.imagekit.io/k4cixy45r/gipro/profiles/tr:w-350,h-350/".$filename;

                return $fileurl;
            }
            
            return '';
        }

        return '';
    }
}
