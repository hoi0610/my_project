@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('admin.category.postAdd') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" name="name" placeholder="Nhập tên category"/>
                    </div>

                    <button type="submit" class="btn btn-default">Thêm category</button>
                    <button type="reset" class="btn btn-default">Làm lại</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>

</div>

@endsection
