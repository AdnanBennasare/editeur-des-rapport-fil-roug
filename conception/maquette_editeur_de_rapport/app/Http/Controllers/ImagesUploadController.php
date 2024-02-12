<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImagesUploadController extends Controller
{   public function __invoke(Request $request)
    {
        // Validate the request, ensure it has a file
        dd($request);
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // adjust the max file size as needed
        ]);
    
        // Get the file from the request
        $image = $request->file('file');
    
        // Generate a unique name for the image
        $imageName = time() . '_' . $image->getClientOriginalName();
    
        // Move the file to the desired location
        $image->move(public_path('imgs'), $imageName);
    
        // Save the image information to the database
        $imageUpload = new Image;
        $imageUpload->filename = $imageName;
        $imageUpload->save();
    
        // Return a success response
        return response()->json(['success' => $imageName]);
    }
}
