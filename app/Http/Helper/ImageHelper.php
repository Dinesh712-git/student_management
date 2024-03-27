<?php
function ImageUpload($image){
  $extention="webp";
  $imageName=$image->getClientOriginalName();
  $uniquename=md5($imageName.time());

  $fullname=$uniquename.".".$extention;

  Storage::disk("image")->put($fullname,File::get($image));
  return $fullname;

}

function GetImage($imagename){
    $imagePath="/upload/images/".$imagename;
    return $imagePath;
}