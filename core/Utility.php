<?php

class Utility
{

  public static function imageEncoderToBase64($imagePath)
  {
    $path = $imagePath;
    $type = pathinfo($path , PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = base64_encode($data);

    return $base64;
  }

  public static function imageEncodedFormattedForSrc($imagePath)
  {
    $path = $imagePath;
    $type = pathinfo($path , PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:Image/'.$type.':base64.'.base64_encode($data);

    return $base64;
  }

}
