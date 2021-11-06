@extends('layouts.dashboard')

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__(" Chỉnh sửa tài khoản")}}</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="/edit" autocomplete="off"
            enctype="multipart/form-data">
              @csrf
              @method('put')
              {{-- @include('alerts.success') --}}
              <div class="row">
              </div>
                <div class="row">
                    <div class="col-md-7 pr-1">
                        <div class="form-group">
                            <label>{{__("Tên")}}</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', auth()->user()->name) }}">
                                {{-- @include('alerts.feedback', ['field' => 'name']) --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__("Email")}}</label>
                      <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', auth()->user()->email) }}">
                      {{-- @include('alerts.feedback', ['field' => 'email']) --}}
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__("Hình ảnh")}}</label>
                      <input type="file" name="image" class="form-control">
                      {{-- @include('alerts.feedback', ['field' => 'email']) --}}
                    </div>
                  </div>
                </div>
              <div class="card-footer ">
                <button type="submit" class="btn btn-primary btn-round">{{__('Save')}}</button>
              </div>
              <hr class="half-rule"/>
            </form>
          </div>
          <div class="card-header">
            <h5 class="title">{{__("Thay đổi mật khẩu")}}</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="/edit" autocomplete="off">
              @csrf
              @method('put')
              {{-- @include('alerts.success', ['key' => 'password_status']) --}}
              <div class="row">
                <div class="col-md-7 pr-1">
                  <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                    <label>{{__(" Mật khẩu hiện tại ")}}</label>
                    <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="current_password" placeholder="{{ __('Current Password') }}" type="password"  required>
                    @if($errors->any())
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first() }}</strong>
                      </span>
                    @endif
                    {{-- @include('alerts.feedback', ['field' => 'old_password']) --}}
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 pr-1">
                  <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                    <label>{{__(" Mật khẩu mới")}}</label>
                    <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" type="password" name="password" required>
                    
                    {{-- @include('alerts.feedback', ['field' => 'password']) --}}
                  </div>
                </div>
            </div>
            {{-- <div class="row">
              <div class="col-md-7 pr-1">
                <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                  <label>{{__(" Confirm New Password")}}</label>
                  <input class="form-control" placeholder="{{ __('Confirm New Password') }}" type="password" name="password_confirmation" required>
                </div>
              </div>
            </div> --}}
            <div class="card-footer ">
              <button type="submit" class="btn btn-primary btn-round ">{{__('Change Password')}}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
      <div class="col-md-4">
        <div class="card card-user">
          <div class="card-body">
            <div class="author">
              
              <img class="avatar border-gray" src="{{ asset("assets/uploads/users/".auth()->user()->image)}}" alt="...">
              <h5 class="title">{{ auth()->user()->name }}</h5>
          
              <p class="description">
                  {{ auth()->user()->email }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection