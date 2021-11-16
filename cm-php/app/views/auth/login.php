    <body class="full-screen login">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent nav-down" color-on-scroll="200">
            <div class="container">
                <div class="navbar-translate">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">Home</a>
                    </div>
                    <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Tài khoản</a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                                <a class="dropdown-item" href="/register"><i class="nc-icon nc-bookmark-2"></i>&nbsp; Đăng ký</a>
                                <a class="dropdown-item" href="#"><i class="nc-icon nc-bookmark-2"></i>&nbsp; Quên mật khẩu</a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-round btn-danger" href="#"> About Us </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="wrapper">
            <div class="page-header" style="background-image: url('/public/assets/img/bg5.jpg')">
                <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                            <div class="card card-register">
                                <h3 class="card-title">Đăng nhập tài khoản</h3>
                                <form class="register-form" method="POST" action="/login">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control no-border" placeholder="Email" />

                                    <label>Mật khẩu</label>
                                    <input type="password" name="password" class="form-control no-border" placeholder="Password" />
                                    <button type="submit" name="submit" class="btn btn-danger btn-block btn-round">
                                        Đăng nhập
                                    </button>
                                </form>
                                <div class="forgot">
                                    <a href="#" class="btn btn-link btn-danger">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="demo-footer text-center">
                        <h6>
                            &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with <i class="fa fa-heart heart"></i> by Creative Tim
                        </h6>
                    </div>
                </div>
            </div>
        </div>