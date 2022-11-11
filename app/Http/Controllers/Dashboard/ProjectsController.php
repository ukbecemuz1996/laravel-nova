<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {

        $projects = Project::paginate(15);
        // dd($services);
        return view('dashboard.pages.projects.list')->with('projects', $projects);
    }

    public function create()
    {
        $cats = ProjectCategory::all();

        return view('dashboard.pages.projects.create', ['cats' => $cats]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:100'],
            'subtitle' => ['required', 'max:100'],
            'client' => ['required', 'max:100'],
            'project_url' => ['max:200', 'nullable'],
            'description' => ['required', 'min:10', 'max:500'],
            'project_date' => ['required', 'date'],
        ]);

        $project = new Project();

        $project->title = $request->post('title');
        $project->subtitle = $request->post('subtitle');
        $project->client = $request->post('client');
        $project->project_url = $request->post('project_url');
        $project->description = $request->post('description');
        $project->project_date = $request->post('project_date');
        $project->cover_image = 'dewdewdew.png';
        $project->images = 'dewdewde';

        $project->save();

        $cats = $request->post('cats');

        if (count($cats) > 0) {
            $ids = array_values($cats);
            $project->categories()->attach($ids);
        }

        return redirect()->route('projects.list.view');

        // Here we will write our database logic
    }

    public function edit(Request $request, $id)
    {
        $project = Project::find($id);

        $cats = ProjectCategory::with(['projects' => function ($query) use ($project) {
            $query->where('projects.id', $project->id);
        }])->get();

        // dd($cats);

        return view('dashboard.pages.projects.edit')
            ->with('project', [
                'id' => $id,
                'title' => $project->title,
                'subtitle' => $project->subtitle,
                'client' => $project->client,
                'project_url' => $project->project_url,
                'description' => $project->description,
                'project_date' => $project->project_date,
            ])
            ->with('cats', $cats);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => ['required', 'max:100'],
            'subtitle' => ['required', 'max:100'],
            'client' => ['required', 'max:100'],
            'project_url' => ['max:200', 'nullable'],
            'description' => ['required', 'min:10', 'max:500'],
            'project_date' => ['required', 'date'],
        ]);

        $project = Project::find($id);

        $project->title = $request->post('title');
        $project->subtitle = $request->post('subtitle');
        $project->client = $request->post('client');
        $project->project_url = $request->post('project_url');
        $project->description = $request->post('description');
        $project->project_date = $request->post('project_date');

        $project->save();

        $cats = $request->post('cats');

        if (count($cats) > 0) {
            $ids = array_values($cats);
            $project->categories()->sync($ids);
        }

        return redirect()->route('projects.list.view');

        // Here we will write our database logic
    }

    public function delete(Request $request, $id)
    {
        // Service::findOrFail($id)->delete();

        $project = Project::find($id);

        if (!$project) {
            abort(404);
        }

        $project->delete();
        // Service::destroy($id);

        return redirect()->route('projects.list.view');

        // Here we will write our database logic
    }
}
