@extends('layouts.dashboard')

@section('content')
    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card bootstrap-table">
                                <div class="card-body table-full-width">
                                    <div class="pull-left search" >
                                        <form action="{{ url("my-courses/searchCourse") }}" method="POST" style="display: flex;">
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
                                            <th data-field="name" data-sortable="true">Tên</th>
                                            <th data-field="description" data-sortable="true">Mô tả</th>
                                            <th data-field="image" data-sortable="true">Hình</th>
                                            <th data-field="timeRegister">Thời gian đăng ký</th>
                                            <th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>

                                        </thead>
                                        <tbody>
                                            @foreach ($courses as $course)
                                            <tr>
                                                <td></td>                     
                                                <td>{{$course->name}}</td>
                                                <td>{{$course->description}}</td>
                                                <td>
                                                    <img src="{{ asset("assets/uploads/courses/".$course->image) }}" alt="hinh" style="border-radius: 7px; width: 130px">
                                                </td>
                                                <td>{{$course->created_at}}</td>
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