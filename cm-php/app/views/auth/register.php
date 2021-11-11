<body class="full-screen register">
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
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
                            <a class="dropdown-item" href="/login"><i class="nc-icon nc-lock-circle-open"></i>&nbsp; Đăng
                                nhập</a>
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
        <div class="page-header" style="background-image: url('/public/assets/img/full-screen-image-1.jpg');">
            <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7 col-12 ml-auto">
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-umbrella"></i>
                            </div>
                            <div class="description">
                                <h3> We've got you covered </h3>
                                <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. Everything you need in a single case.</p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-map-signs"></i>
                            </div>
                            <div class="description">
                                <h3> Clear Directions </h3>
                                <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-user-secret"></i>
                            </div>
                            <div class="description">
                                <h3> We value your privacy </h3>
                                <p>Completely synergize resource taxing relationships via premier niche markets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-12 mr-auto">
                        <div class="card card-register">
                            <h3 class="card-title text-center">Đăng ký tài khoản</h3>
                            <div class="social">
                                <button href="#" class="btn btn-just-icon btn-facebook"><i class="fa fa-facebook"></i></button>
                                <button href="#" class="btn btn-just-icon btn-google"><i class="fa fa-google"></i></button>
                                <button href="#" class="btn btn-just-icon btn-twitter"><i class="fa fa-twitter"></i></button>
                            </div>

                            <div class="division">
                                <div class="line l"></div>
                                <span>or</span>
                                <div class="line r"></div>
                            </div>
                            <form class="register-form" method="POST" action="/register">

                                <input type="text" name="name" class="form-control" placeholder="Tên của bạn">

                                <input type="text" name="email" class="form-control" placeholder="Email">

                                <input type="password" name="password" class="form-control" placeholder="Mật khẩu">

                                <input type="password" class="form-control" placeholder="Confirm Password">

                                <button type="submit" name="submit" class="btn btn-block btn-round">Register</button>
                            </form>
                            <div class="login">
                                <p>Already have an account? <a href="/login">Log in</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="demo-footer text-center">
                <h6>&copy; <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
            </div>
        </div>
    </div>