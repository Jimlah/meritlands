<?php

namespace App\Http\Controllers;

use App\Services\ImageUploadToCloudinary;
use Illuminate\Http\Request;

class CkeditorController extends Controller
{
    public function imageUpload(Request $request)
    {
       if ($request->hasFile('upload')) {

          $imageUrl = $request->file('upload')->storeOnCloudinary()->getSecurePath();
          $CKEditorFuncNum = $request->input('CKEditorFuncNum');
          $msg = 'Image uploaded successfully';
          $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$imageUrl', '$msg')</script>";

@header('Content-type: text/html; charset=utf-8');
          echo $response;
       }
    }
}