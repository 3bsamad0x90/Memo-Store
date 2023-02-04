<?php
    namespace App\helpers\files;

    function checkForDirectory($path)
    {
        File::exists($path) or File::makeDirectory($path);
    }

    function upload_image_without_resize($path, $image)
    {
        checkForDirectory('uploads/' . $path);
        // $image must be a $request->image
        Intervention\Image\Facades\Image::make($image)->save(public_path('uploads/' . $path . '/' . $image->hashName()));
        return $image->hashName();
    }
