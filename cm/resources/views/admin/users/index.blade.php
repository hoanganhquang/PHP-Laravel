@extends('layouts.dashboard')

@section('content')
    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card bootstrap-table">
                                <div class="card-body table-full-width">
                                    <div class="pull-left search" >
                                        <form action="{{ url("users/searchUser") }}" method="POST" style="display: flex;">
                                            @csrf
                                            <input class="form-control" name="name" type="text" placeholder="Search" style="margin-left: 12px;">
                                            <button type="submit" style="background-color: white; border: none;"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <table id="bootstrap-table" class="table">
                                        <thead>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="id" class="text-center">ID</th>
                                            <th data-field="name" data-sortable="true">Tên</th>
                                            <th data-field="email" data-sortable="true">Email</th>
                                            <th data-field="image" data-sortable="true">Hình</th>
                                            <th data-field="timeCreate">Thời gian tạo</th>
                                            <th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>

                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                                <td></td>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                    <img src="{{ asset("assets/uploads/users/".$user->image) }}" alt="hinh" style="border-radius: 7px; width: 130px">
                                                </td>
                                                <td>{{$user->created_at}}</td>
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection