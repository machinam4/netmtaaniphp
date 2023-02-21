<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFiles;
use ErrorException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile("images")) {
            $files = $request->file('images');
            foreach ($files as $file) {
                // $fileName = $file->getClientOriginalName();
                $tmpName = uniqid() . '-' . now()->timestamp;
                $filePath = $file->storeAs('/images/tmp', $tmpName);
            }
            $fileUploaded = TemporaryFiles::create([
                "folder" => $filePath,
                "file" => $tmpName
            ]);
            return $fileUploaded->id;
        } else if ($request->hasFile("image")) { //upload single image
            $file = $request->file('image');
            // $ext = $file->getClientOriginalExtension();
            $tmpName = uniqid() . '-' . now()->timestamp;
            $filePath = $file->storeAs('/images/tmp', $tmpName);
            $fileUploaded = TemporaryFiles::create([
                "folder" => $filePath,
                "file" => $tmpName
            ]);
            return $fileUploaded->id;
        }
        return 'false';
    }

    public function destroy(TemporaryFiles $tempfile)
    {
        if (!Storage::exists($tempfile->folder)) {
            return "file not found";
        }
        try {
            Storage::delete($tempfile->folder);
            $tempfile->delete();
            return "success";
        } catch (ErrorException $e) {
            return $e;
        };
    }

    public function show(TemporaryFiles $tempfile)
    {
    }
}
