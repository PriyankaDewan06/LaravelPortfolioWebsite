<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CMCDetail;
use App\Models\admin\Project;
use App\Models\admin\Stack;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function mng ()
    {
        $cmsdetails = CMCDetail::all();
//        type 1
//        $stacks = Stack::all();
        return view('admin.cms.mng', [
            'cmsdetails'    => $cmsdetails,
//            'stacks'        => $stacks
        ]);
    }
    protected function validation ($request)
    {
        $this->validate($request, [
            'name' => 'required',
//            'url' => 'required',
        ]);
    }

    protected function saveData ($request)
    {
        $cms = new CMCDetail();
        $cms->name = $request->name;
        $cms->url = $request->url;
        $cms->details = $request->details;
        $cms->user = $request->user;
        $cms->pass = $request->pass;
        $cms->image_url = $request->image_url;
        if (isset($request->file))
        {
            $file   = $request->file('file');
//            $name   = $request->target.'-'.$file->getClientOriginalName();
            $name   = $file->getClientOriginalName();
            $storage = './admin/cms-image/';
            $path   = $storage.$name;
            $file->move($storage, $name);

            $cms->file    = $path;
        }
        $cms->status  = 1;
        $cms->save();
        return $cms;
    }
    protected function multi ($request,$cms)
    {
        $multiInputs    = explode(',' ,$request->stack);
        foreach ($multiInputs as $stack)
        {
            $stacks  = new Stack();
            $stacks->cms_id = $cms->id;
            $stacks->stack = $stack;
            $stacks->save();
        }
    }
    public function new (Request $request)
    {
        $this->validation($request);
        $cms    = $this->saveData($request);
        $this->multi($request, $cms);
        return redirect()->back();
    }
    public function del($id)
    {
        $cms  = CMCDetail::findOrFail($id);
        if (isset($cms->file))
        {
            unlink($cms->file);
        }

        $cms->delete();
        $stacks = Stack::where('cms_id', $id)->get();
        foreach ($stacks as $stack)
        {
            $stack->delete();
        }
        return redirect()->back();
    }
    public function status ($id)
    {
        $cms    = CMCDetail::findOrFail($id);
        if ($cms->status == 1)
        {
            $cms->status = 0;
        } else {
            $cms->status = 1;
        }
        $cms->save();
        return redirect()->back();

    }
}
