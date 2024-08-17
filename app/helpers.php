<?php
use Illuminate\Support\Facades\Auth;
function upload(String $folderName,$request)
{
     if($request->hasFile('image'))
     {
        $file = $request->file('image');
        $path = Storage::disk("public")->putFileAs($folderName,$file,$file->getClientOriginalName());
     }
    return $path;
}