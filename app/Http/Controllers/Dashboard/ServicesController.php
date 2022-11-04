<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.services.list');
    }

    public function create()
    {
        return view('dashboard.pages.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => ['required', 'max:20'],
            'title' => ['required', 'max:20'],
            'description' => ['required', 'min:10', 'max:200'],
        ]);

        return redirect()->route('services.list.view');

        // Here we will write our database logic
    }

    public function edit(Request $request, $id)
    {
        return view('dashboard.pages.services.edit')
            ->with('service', [
                'title' => '',
                'icon' => '',
                'description' => '',
            ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'icon' => ['required', 'max:20'],
            'title' => ['required', 'max:20'],
            'description' => ['required', 'min:10', 'max:200'],
        ]);

        return redirect()->route('services.list.view');

        // Here we will write our database logic
    }

    public function delete(Request $request, $id)
    {

        return redirect()->route('services.list.view');

        // Here we will write our database logic
    }
}
