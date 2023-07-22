<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Images
{
  public static function generateImageName($value): string
  {
    return time() . '_' . $value->getClientOriginalName();
  }
  public static function resizeAndSaveImage($imageName, $value, $path, $resize)
  {
    $img = Image::make($value->getRealPath());
    $img->resize($resize, null, function ($constraint) {
      $constraint->aspectRatio();
    });
    $img->save(storage_path($path . $imageName));
  }
}