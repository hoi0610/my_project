<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function list()
    {
        $reports = Report::all();
        return view('admin.report.list', ['reports' => $reports]);
    }

    public function getAdd()
    {
        $reports = Report::all();
        return view('admin.report.add', ['reports' => $reports]);
    }
}
