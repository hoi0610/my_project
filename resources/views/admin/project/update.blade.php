@extends('admin.layout.index')
@section('content')
    <?php
        $categorys = \App\Models\Category::all()->pluck('id')->toArray()
    ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Project
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('admin.project.postUpdate', $projects->id ) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Category id</label>
                        <select class="form-control">
                            @foreach($categorys as $category)
                            <option> {{ $category }}</option>
                            @endforeach
                        </select>
{{--                        <input class="form-control" name="category_id" value=" {{ $projects->id }}" />--}}
                    </div>
                    <div class="form-group">
                        <label>Tên dự án</label>
                        <input class="form-control" name="name" value="{{ $projects->name }}" />
                    </div>
                    <div class="form-group">
                        <label>Ngày bắt đầu</label>
                        <input class="form-control" name="start_day" value="{{ $projects->start_day }}"/>
                    </div>
                    <div class="form-group">
                        <label>Ngày hoàn thành</label>
                        <input class="form-control" name="end_day" value="{{ $projects->end_day }}" />
                    </div>
                    <div class="form-group">
                        <label>Leader</label>
                        <input class="form-control" name="performer" value="{{ $projects->performer }}" />
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <input class="form-control" name="status" value="{{ $projects->status }}" />
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
