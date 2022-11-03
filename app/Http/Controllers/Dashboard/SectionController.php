<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function hero(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'title' => ['required', 'max:20'],
                'description' => ['required', 'min:10', 'max:200'],
                'get_started_link' => ['required', 'url'],
                'watch_video_link' => ['required', 'url'],
            ]);

        }

        return view('dashboard.pages.sections.hero.form')
            ->with('hero', [
                'title' => 'test',
                'description' => 'test',
                'get_started_link' => 'test',
                'watch_video_link' => 'test',
            ])
        ;
    }
}
