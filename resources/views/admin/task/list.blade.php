@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Task
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Project id</th>
                    <th>User id</th>
                    <th>Name</th>
                    <th>Start day</th>
                    <th>End day</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                <tr class="odd gradeX" align="center">
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->project_id }}</td>
                    <td>{{ $task->user_id }}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->start_day }}</td>
                    <td>{{ $task->end_day }}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
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
