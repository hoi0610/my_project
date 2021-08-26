@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Project
                    <small>List</small>
                </h1>
            </div>
            <div class="pb-5" style="padding-bottom: 15px">
                <a class="btn btn-primary rounded-fill" href="{{ route('admin.project.getAdd') }}">
                    Thêm mới project
                </a>
            </div>
            @if(session('message'))
                <div class="btn btn-success">
                    {{ session('message') }}
                </div>
            @endif
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Category ID</th>
                    <th>Name</th>
                    <th>Start day</th>
                    <th>End day</th>
                    <th>Performer</th>
                    <th>Status</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                <tr class="odd gradeX" align="center">
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->category_id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->start_day }}</td>
                    <td>{{ $project->end_day }}</td>
                    <td>{{ $project->performer }}</td>
                    <td>{{ $project->status }}</td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.project.getUpdate',  $project->id) }}">Edit</a></td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('admin.project.delete', $project->id) }}">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
