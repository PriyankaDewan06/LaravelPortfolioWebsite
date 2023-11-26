<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ProfileImage;
use Illuminate\Http\Request;

class ProfileImageController extends Controller
{
    public function mng ()
    {
        $images = ProfileImage::all();
        return view('admin.image.mng', [
            'images'    => $images,
        ]);
    }

    public function new (Request $request)
    {
        $this->validate($request, [
            'target' => 'required'
        ]);

        $image = new ProfileImage();
        $image->url = $request->url;
        if (isset($request->file))
        {
            $file   = $request->file('file');
//            $name   = $request->target.'-'.$file->getClientOriginalName();
            $name   = $file->getClientOriginalName();
            $storage = './admin/profile-image/';
            $path   = $storage.$name;
            $file->move($storage, $name);

            $image->file    = $path;
        }
        $image->target  = $request->target;
        $image->save();
        return redirect()->back();
    }
    public function del($id)
    {
        $image  = ProfileImage::findOrFail($id);
        if (isset($image->file))
        {
            unlink($image->file);
        }

        $image->delete();
        return redirect()->back();
    }
}
