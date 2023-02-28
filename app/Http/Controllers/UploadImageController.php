<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Image;
use App\Models\images;

class UploadImageController extends Controller
{
  public function upload(Request $request){
//dd($request->all());
$image=$request->profile;
//$image->storeAS('public/images',$name);
$image_save= new Image;
$image_save->name=$name;
$image_save->save();
return back;


}
}
