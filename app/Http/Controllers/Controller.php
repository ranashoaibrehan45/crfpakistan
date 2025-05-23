<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

abstract class Controller
{
    public function uploadImage($file, $path): string
    {
        $filename = Str::uuid().'.'.$file->getClientOriginalExtension();

        // Store the original file
        $file->storeAs($path, $filename, 'public');

        // Create thumbnail
        $manager = new ImageManager(new Driver);
        $image = $manager->read($file->getPathname());
        $image->cover(200, 200); // crop to 200x200

        // Ensure thumbnail directory exists
        $thumbnailDir = $path.'/thumbnails';
        if (! Storage::disk('public')->exists($thumbnailDir)) {
            Storage::disk('public')->makeDirectory($thumbnailDir);
        }

        // Save thumbnail
        $thumbnailPath = $thumbnailDir.'/'.$filename;
        Storage::disk('public')->put($thumbnailPath, (string) $image->encode());

        return $filename;
    }

    public function delImage($filename, $path)
    {
        try {
            $filePath = $path.'/'.$filename;
            Storage::disk('public')->delete($filePath);

            $thumbnail = $path.'/thumbnails/'.$filename;
            Storage::disk('public')->delete($thumbnail);
        } catch (\Exception $e) {
            \Log::erro($e->getMessage());
        }
    }
}
