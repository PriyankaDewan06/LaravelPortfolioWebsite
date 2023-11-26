<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\admin\CMCDetail;
use App\Models\admin\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        $projects   = Project::where('status',1)->orderBy('id', 'DESC')->paginate(6);
        $cmsDetails       = CMCDetail::where('status',1)->orderBy('id', 'DESC')->get();
//        $cmsDetails       = CMCDetail::where('status',1)->orderBy('id', 'DESC')->paginate(3);

        return view('front.master', [
//            'projects'  => $projects,
            'cmsDetails'=> $cmsDetails,
        ]);
    }
}
