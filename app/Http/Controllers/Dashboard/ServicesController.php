<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        // dd($services);
        return view('dashboard.pages.services.list')->with('services', $services);
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

        $service = new Service();

        $service->title = $request->post('title');
        $service->icon = $request->post('icon');
        $service->description = $request->post('description');

        $service->save();

        return redirect()->route('services.list.view');

        // Here we will write our database logic
    }

    public function edit(Request $request, $id)
    {
        $service = Service::find($id);

        return view('dashboard.pages.services.edit')
            ->with('service', [
                'title' => $service->title,
                'icon' => $service->icon,
                'description' => $service->description,
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
