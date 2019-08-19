<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class ImageUploadController extends Controller
{
    //
    public function uploadView()
    {
        return view('/admin/image/upload');
    }

    public function handleUpload(Request $request)
    {
        $image_name = $request->file('image_name')->getRealPath();
        Cloudder::upload($image_name);
        $result = Cloudder::getResult();
        $image_id = $result['public_id'] . '.' . $result['format'];
        return $image_id;
    }
}
