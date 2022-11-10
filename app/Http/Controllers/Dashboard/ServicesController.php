<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        // $services = Service::all();
        $services = Service::paginate(15);
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
            'icon_color' => ['required'],
            'title' => ['required', 'max:20'],
            'description' => ['required', 'min:10', 'max:200'],
        ]);

        $service = new Service();

        $service->title = $request->post('title');
        $service->icon = $request->post('icon');
        $service->icon_color = $request->post('icon_color');
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
                'id' => $id,
                'title' => $service->title,
                'icon' => $service->icon,
                'icon_color' => $service->icon_color,
                'description' => $service->description,
            ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'icon' => ['required', 'max:20'],
            'icon_color' => ['required'],
            'title' => ['required', 'max:20'],
            'description' => ['required', 'min:10', 'max:200'],
        ]);

        // $service = Service::find($id);

        // if ($service) {
        //     $service->title = $request->post('title');
        //     $service->icon = $request->post('icon');
        //     $service->description = $request->post('description');

        //     $service->save();
        // }

        Service::where('id', $id)->update([
            'title' => $request->post('title'),
            'icon' => $request->post('icon'),
            'icon_color' => $request->post('icon_color'),
            'description' => $request->post('description'),
        ]);

        return redirect()->route('services.list.view');

        // Here we will write our database logic
    }

    public function delete(Request $request, $id)
    {
        // Service::findOrFail($id)->delete();

        $service = Service::find($id);

        if (!$service) {
            abort(404);
        }

        $service->delete();
        // Service::destroy($id);

        return redirect()->route('services.list.view');

        // Here we will write our database logic
    }
}
