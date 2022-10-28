<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    public function Upload(Request $request)
    {
        $request->validate([
            'image' => "file|filled|image"
        ]);

        $path = $request->file('image')->store('uploads', 'public');

        session()->flash('imagePath', $path);
        $image = new Image();
        $image->path = $path;
        $image->save();

        return redirect()->route('image.upload.get');
    }

    public function viewImg(Request $request)
    {
        $image = Image::all();

        return view('viewImage', ['image' => $image]);
    }
}
