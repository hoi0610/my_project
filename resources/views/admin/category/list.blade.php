@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>List</small>
                </h1>
            </div>
            <div class="pb-5" style="padding-bottom: 15px">
                <a class="btn btn-primary rounded-fill" href="{{ route('admin.category.getAdd') }}">
                    Thêm mới thể loại
                </a>
            </div>

            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message')  }}
                </div>
                @endif
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categorys as $category)
                <tr class="odd gradeX text-center" >
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.category.getUpdate', $category->id) }}">Sửa</a></td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('admin.category.delete', $category->id) }}">Xóa</a></td>
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
