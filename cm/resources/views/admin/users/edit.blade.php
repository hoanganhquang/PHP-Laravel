@extends('layouts.dashboard')

@section('content')
    
    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card stacked-form">
                                <div class="card-header ">
                                    <h4 class="card-title">Chỉnh sửa người dùng</h4>
                                </div>
                                <div class="card-body ">
                                    <form method="POST" action="{{ url('edit-user/'.$user->id)}}" enctype="multipart/form-data">
                                        {{ method_field('PUT') }}
                                        @csrf
                                        <div class="form-group">
                                            <label>Tên người dùng</label>
                                            <input name="name" value="{{$user->name}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" value="{{$user->email}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input name="password" value="{{$user->password}}" class="form-control">
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