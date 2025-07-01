<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.site.index');
    }

    public function about()
    {
        return view('web.site.about');
    }

    public function history()
    {
        return view('web.site.history');
    }

    public function partners()
    {
        return view('web.site.partners');
    }

    public function career()
    {
        return view('web.site.career');
    }

    public function contact()
    {
        return view('web.site.contact');
    }

    public function apply(Request $request)
    {
        // Append request data to a JSON log file
        $logFile = storage_path('logs/applied.json');
        $existing = [];

        if (file_exists($logFile)) {
            $existing = json_decode(file_get_contents($logFile), true) ?? [];
        }

        $newEntry = [
            'timestamp' => now()->toDateTimeString(),
            'data' => $request->all(),
        ];

        array_unshift($existing, $newEntry); // Add to the beginning of the array

        file_put_contents($logFile, json_encode($existing, JSON_PRETTY_PRINT));

        flash()->success('Thank you! Your job application has been received.');
        return redirect()->back();
    }
}
