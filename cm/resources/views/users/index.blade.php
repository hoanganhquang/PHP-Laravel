@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="nc-icon nc-chart text-warning"></i>
                                            </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="numbers">
                                            <p class="card-category">Đã đăng ký</p>
                                            <h4 class="card-title">{{ $count }}</h4>
                                    </div>
                                </div>
                             </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection