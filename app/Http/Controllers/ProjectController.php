<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use App\Models\Projects;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $projects = DB::table('projects')->get();
        // $portfolio = Projects::orderBy('created_at', 'DESC')->get();
        // $portfolio = Projects::latest()->paginate(2);

        return view('projects.index', [
            'projects' => Projects::latest()->paginate()
        ]);
    }

    // project function show($project){
    //     $project = Projects::findOrFail($project);
    //     return view('projects.show', compact('project'));
    // }

    public function show(Projects $project) {

        return view('projects.show', compact('project'));
    }

    public function create() {
        return view('projects.create', [
            'project' => new Projects
        ]);
    }

    public function store( SaveProjectRequest $request) {

        // $data = request()->validate([
        //     'title' => 'required',
        //     'url' => 'required',
        //     'description' => 'required',
        // ]);

        Projects::create($request -> validated() );

        // Request $request
        // $id = $request['id'];
        // $data['title'] = $request['title'];
        // $data['url'] = $request['url'];
        // $data['description'] = $request['description'];

        // $title = request('title');
        // $url = request('url');
        // $description = request('description');

        // Projects::create([
        //     'title' => $title,
        //     'url' => $url,
        //     'description' => $description,
        // ]);

        // Projects::create(request()->all());

        return redirect()->route('projects.index')->with('status', 'Creado con éxito');

    }

    public function edit( Projects $project) {
        
        return view('projects/edit', [
            'project' => $project
        ]);
    }

    public function update( Projects $project, SaveProjectRequest $request ) {

        $project->update( $request->validated() );

        // $project->update([
        //     'title'=>request('title'),
        //     'url'=>request('url'),
        //     'description'=>request('description'),
        // ]);

        return redirect()->route('projects.show', $project)->with('status', 'Actualizado con éxito');
    }

    public function destroy( Projects $project ) {
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'Eliminado con éxito');
    }

    
}
