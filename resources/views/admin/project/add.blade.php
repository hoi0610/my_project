@extends('admin.layout.index')

@section('content')
    <?php
    $categorys = \App\Models\Category::all()
    ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Project
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('admin.project.postAdd') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Chọn thể loại</label>
                        <select class="form-control" name="category_id">
                            @foreach($categorys as $category)
                            <option>{{ $category-> id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên dự án</label>
                        <input class="form-control" name="name" placeholder="Nhập tên dự án" />
                    </div>
                    <div class="form-group">
                        <label>Ngày bắt đầu</label>
                        <input class="form-control" name="start_day" placeholder="Nhập ngày bắt đầu" />
                    </div>
                    <div class="form-group">
                        <label>Ngày kết thúc</label>
                        <input class="form-control" name="end_day" placeholder="Nhập ngày kết thúc" />
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <input class="form-control" name="status" placeholder="Nhập trạng thái" />
                    </div>
                    <div class="form-group">
                        <label>Leader</label>
                        <input class="form-control" name="performer" placeholder="Nhập leader" />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm dự án</button>
                    <button type="reset" class="btn btn-default">Làm lại</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>

</div>

@endsection
