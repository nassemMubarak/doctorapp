<?php

namespace App\Helpers;

class Image
{
    public static function addImage($request, $folder= ''){
        if($request->hasFile('image')) {

            $file = $request->file('image');

            $image_file = $file->store('/'.$folder , [
                'disk' => 'uploads',
            ]);
            $request->merge([
                'image_url' => $image_file,
            ]);
        }
    }
    public static function addFile($request, $folder= '', $flag){
        if($request->hasFile('file')) {

            $file = $request->file('file');

            $file_file = $file->store('/'.$folder , [
                'disk' => 'uploads',
            ]);
            if($flag == 1){
                $request->merge([
                    'doctor_prescription' => $file_file,
                ]);
            }else{
                $request->merge([
                    'patient_prescription' => $file_file,
                ]);
            }
        }
    }
    public static function updateImage($request, $object , $folder= ''){
        if($request->hasFile('image')) {
            if($object->image_url !== null){
                unlink(public_path('uploads\\').$object->image_url);
            }

            $file = $request->file('image');

            $image_file = $file->store('/'.$folder , [
                'disk' => 'uploads',
            ]);
            $request->merge([
                'image_url' => $image_file,
            ]);
        }
    }
    public static function deleteImage($object , $folder= ''){
        if($object->image_url !== null){
            unlink(public_path('uploads\\').$object->image_url);
        }
    }
}
