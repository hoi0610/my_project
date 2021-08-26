<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $repo;

    public function list()
    {
        $projects = Project::all();
        return view('admin.project.list', ['projects' => $projects]);
    }

    public function getAdd()
    {
        return view('admin.project.add');
    }
    public function postAdd(Request $request)
    {
        $projects = Project::create($request->all());
        $projects->save();
        return redirect()->route('admin.project.index')->with('message', 'Thêm project thành công');
    }
    public function getUpdate($id)
    {
        $projects = Project::findOrFail($id);
        return view('admin.project.update', ['projects' => $projects]);
    }

    public function postUpdate(Request $request, $id)
    {
        $projects = Project::findOrFail($id);
        $projects->category_id = $request->category_id;
        $projects->name = $request->name;
        $projects->start_day = $request->start_day;
        $projects->end_day = $request->end_day;
        $projects->performer = $request->performer;
        $projects->status = $request->status;
        $projects->save();

        return redirect()->route('admin.project.index')->with('message', 'Sửa project số '.$projects->id.' thành công');
    }

    public function delete($id){
        $categorys = Project::findOrFail($id);
        $categorys -> delete();

        return redirect()->route('admin.project.index')->with('message', 'Xóa thành công project số '.$id);
    }
}
