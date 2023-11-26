<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ProfileImage;
use App\Models\admin\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function mng ()
    {
        $projects = Project::all();
        return view('admin.projects.mng', [
            'projects'    => $projects,
        ]);
    }

    public function new (Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $project = new Project();
        $project->name = $request->name;
        $project->url = $request->url;
        if (isset($request->file))
        {
            $file   = $request->file('file');
//            $name   = $request->target.'-'.$file->getClientOriginalName();
            $name   = $file->getClientOriginalName();
            $storage = './admin/project-image/';
            $path   = $storage.$name;
            $file->move($storage, $name);

            $project->file    = $path;
        }
        $project->image_url  = $request->image_url;
        $project->status  = 1;
        $project->save();
        return redirect()->back();
    }
    public function del($id)
    {
        $project  = Project::findOrFail($id);
        if (isset($project->file))
        {
            unlink($project->file);
        }

        $project->delete();
        return redirect()->back();
    }
    public function status ($id)
    {
        $project    = Project::findOrFail($id);
        if ($project->status == 1)
        {
            $project->status = 0;
        } else {
            $project->status = 1;
        }
        $project->save();
        return redirect()->back();

    }
}
