<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected $repo;


    public function list()
    {
        $categorys = Category::all();
        return view('admin.category.list', ['categorys' => $categorys]);
    }

    public function getAdd()
    {
        return view('admin.category.add');
    }
    public function postAdd(Request $request)
    {
        $categorys = Category::create($request->all());
        $categorys->save();
        return redirect()->route('admin.category.index')->with('message', 'Thêm category thành công');
    }
    public function getUpdate($id)
    {
        $categorys = Category::findOrFail($id);
        return view('admin.category.update', ['categorys' => $categorys]);
    }

    public function postUpdate(Request $request, $id)
    {
        $categorys = Category::findOrFail($id);
        $categorys->name = $request->name;
        $categorys->save();

        return redirect()->route('admin.category.index')->with('message', 'Sửa category số '.$categorys->id.' thành công');
    }

    public function delete($id){
        $categorys = Category::findOrFail($id);
        $categorys -> delete();

        return redirect()->route('admin.category.index')->with('message', 'Xóa thành công category số '.$id);
    }
}
