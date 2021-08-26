@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Report
                    <small>List</small>
                </h1>
            </div>
            <div class="pb-5" style="padding-bottom: 15px">
                <a class="btn btn-primary rounded-fill" href="{{ route('admin.report.getAdd') }}">
                    Thêm mới report
                </a>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>User name</th>
                    <th>Project name</th>
                    <th>Task name</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reports as $report)
                <tr class="odd gradeX" align="center">
                    <td>{{ $report->id }}</td>
                    <td>{{ $report->user->user_profile->full_name }}</td>
                    <td>{{ $report->project->name }}</td>
                    <td>{{ $report->task->name }}</td>
                    <td>{{ $report->title }}</td>
                    <td>{{ $report->content }}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#">Sửa</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Xóa</a></td>
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
