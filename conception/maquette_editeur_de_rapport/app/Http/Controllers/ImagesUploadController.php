<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ImagesUploadController extends Controller
{ 
    
    public function index(){

        $images = Image::all();
        return response()->json(['images' => $images]);
    }
    public function storeImage(Request $request)
    {
        // Validate the request, ensure it has a file
        // dd($request);
        $request->validate([
            'images' => 'required|image|mimes:png,jpg,jpeg|max:2048'

        ]);
        
        // Get the file from the request
        $image = $request->file('images');
        // dd($image);

    
        // Generate a unique name for the image
        $imageName = time() . '_' . $image->getClientOriginalName();
    
        // Move the file to the desired location
        $image->move(public_path('imgs'), $imageName);
    
        // Save the image information to the database
        $imageUpload = new Image;
        $imageUpload->filename = $imageName;
        $imageUpload->save();

        return Redirect()->back();
    
        // Return a success response

    }
}
