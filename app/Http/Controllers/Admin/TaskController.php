<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function list()
    {
        $tasks = Task::all();
        return view('admin.task.list', ['tasks' => $tasks]);
    }
    public function getAdd()
    {
        return view('admin.task.add');
    }
}
