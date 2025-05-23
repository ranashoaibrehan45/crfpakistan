<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller
{
    public function index()
    {
        return view('artisan.run');
    }

    public function runCommand(Request $request)
    {
        $request->validate([
            'command' => 'required|string',
        ]);

        try {
            Artisan::call($request->command);
            $output = Artisan::output();

            return back()->with('success', "Command executed: {$request->command}")
                ->with('output', $output);
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
