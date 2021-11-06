@extends('layouts.dashboard')

@section('content')
    
    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card stacked-form">
                                <div class="card-header ">
                                    <h4 class="card-title">Thêm khoá học</h4>
                                </div>
                                <div class="card-body ">
                                    <form method="POST" action="{{ url('/add-course')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Tên khoá học</label>
                                            <input name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Mô tả</label>
                                            <input name="description" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <input type="file" name="image">
                                        </div>
                                        <div class="card-footer ">
                                            <button type="submit" class="btn btn-fill btn-info">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                </div>
            </div>
    </div>
@endsection