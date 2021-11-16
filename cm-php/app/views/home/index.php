 <body>
     <nav class="navbar navbar-expand-lg fixed-top navbar-transparent nav-down" color-on-scroll="500">
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
                             <?php if (!empty($auth)) : ?>
                                 <a class="dropdown-item" href="/profile"><i class="nc-icon nc-lock-circle-open"></i>&nbsp; Dashboard</a>
                                 <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                     <i class="nc-icon nc-bookmark-2"></i>&nbsp; Đăng xuất
                                     <form id="logout-form" action="/logout" method="POST">

                                     </form>
                                 </a>

                             <?php else : ?>
                                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Tài khoản</a>
                                 <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                                     <a class="dropdown-item" href="/login"><i class="nc-icon nc-lock-circle-open"></i>&nbsp; Đăng
                                         nhập</a>
                                     <a class="dropdown-item" href="/register"><i class="nc-icon nc-bookmark-2"></i>&nbsp; Đăng ký</a>
                                     <a class="dropdown-item" href="#"><i class="nc-icon nc-bookmark-2"></i>&nbsp; Quên mật khẩu</a>
                                 </ul>

                             <?php endif ?>
                         </ul>
                     </li>
                     <li class="nav-item">
                         <a class="btn btn-round btn-danger" href="#"> About Us </a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>

     <div class="page-header" data-parallax="true" style="background-image: url('/public/assets/img/home.jpg')">
         <div class="filter"></div>
         <div class="content-center">
             <div class="container">
                 <div class="motto">
                     <h1 class="title">Welcome!</h1>
                     <h3 class="description">Học từ ngày hôm nay</h3>
                     <br />
                     <?php if (!empty($auth)) : ?>
                         <a href="#" class="btn btn-neutral btn-round"><i class="fa fa-play"></i> <?= $auth["name"] ?> </a>
                     <?php else : ?>
                         <a href="/login" class="btn btn-neutral btn-round"><i class="fa fa-play"></i>Đăng nhập</a>
                         <a type="button" href="/register" class="btn btn-outline-neutral btn-round">
                             Đăng ký
                         </a>
                     <?php endif ?>
                 </div>
             </div>
         </div>
     </div>

     <div class="wrapper">
         <div class="section text-center landing-section">
             <div class="container">
                 <div class="row">
                     <div class="col-md-8 ml-auto mr-auto">
                         <h2 class="title">Quản lý khoá học</h2>
                         <h5>Website tri thức tốt nhất mọi thời đại</h5>
                         <br />
                         <a href="#" class="btn btn-danger btn-fill btn-round">CHI TIẾT</a>
                     </div>
                 </div>
                 <br /><br />
                 <div class="row">
                     <div class="col-md-3">
                         <div class="info">
                             <div class="icon icon-danger">
                                 <i class="nc-icon nc-palette"></i>
                             </div>
                             <div class="description">
                                 <h4 class="info-title">Thư viện đầy màu sắc</h4>
                                 <p class="description">
                                     Spend your time generating new ideas. You don't have to
                                     think of implementing.
                                 </p>
                                 <a href="#" class="btn btn-link btn-danger">See more</a>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="info">
                             <div class="icon icon-danger">
                                 <i class="nc-icon nc-bulb-63"></i>
                             </div>
                             <div class="description">
                                 <h4 class="info-title">Nhiều ý tưởng mới</h4>
                                 <p>
                                     Larger, yet dramatically thinner. More powerful, but
                                     remarkably power efficient.
                                 </p>
                                 <a href="#" class="btn btn-link btn-danger">See more</a>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="info">
                             <div class="icon icon-danger">
                                 <i class="nc-icon nc-chart-bar-32"></i>
                             </div>
                             <div class="description">
                                 <h4 class="info-title">Thống kê</h4>
                                 <p>
                                     Choose from a veriety of many colors resembling sugar paper
                                     pastels.
                                 </p>
                                 <a href="#" class="btn btn-link btn-danger">See more</a>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="info">
                             <div class="icon icon-danger">
                                 <i class="nc-icon nc-sun-fog-29"></i>
                             </div>
                             <div class="description">
                                 <h4 class="info-title">Thiết kế đẹp mắt</h4>
                                 <p>
                                     Find unique and handmade delightful designs related items
                                     directly from our sellers.
                                 </p>
                                 <a href="#" class="btn btn-link btn-danger">See more</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="section section-dark text-center landing-section">
             <div class="container">
                 <h2 class="title">Top khoá học</h2>
                 <div class="row">
                     <?php foreach ($courses as $course) : ?>

                         <div class="col-md-4">
                             <div class="card card-profile card-plain">
                                 <div class="card-image">
                                     <img class="img-rounded img-responsive" src="public/assets/uploads/courses/<?= $course["image"] ?>" alt="..." />
                                 </div>
                                 <div class="card-body">
                                     <a href="#paper-kit">
                                         <div class="author">
                                             <h4 class="card-title"><?= $course["name"] ?></h4>
                                         </div>
                                     </a>
                                     <p class="card-description text-center">
                                         <?= $course["description"] ?>
                                     </p>
                                 </div>
                                 <div class="card-footer text-center">
                                     <form method="GET" action="/login">
                                         <button type="submit" class="btn btn-danger btn-round">
                                             Đăng ký ngay
                                         </button>
                                     </form>
                                 </div>
                             </div>
                         </div>

                     <?php endforeach; ?>
                 </div>
             </div>
         </div>

         <div class="section landing-section">
             <div class="container">
                 <div class="row">
                     <div class="col-md-8 ml-auto mr-auto">
                         <h2 class="text-center">Liên hệ với chúng tôi</h2>
                         <form class="contact-form" action="#">
                             <div class="row">
                                 <div class="col-md-6">
                                     <label>Tên</label>
                                     <input class="form-control" placeholder="Tên của bạn" />
                                 </div>
                                 <div class="col-md-6">
                                     <label>Email</label>
                                     <input class="form-control" placeholder="Email của bạn" />
                                 </div>
                             </div>
                             <label>Tin nhắn</label>
                             <textarea class="form-control" rows="4" placeholder="Cảm nghĩ của bạn..."></textarea>
                             <div class="row">
                                 <div class="col-md-4 offset-md-4">
                                     <button class="btn btn-danger btn-lg btn-fill">Gửi</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <footer class="footer section-dark">
         <div class="container">
             <div class="row">
                 <!-- <nav class="footer-nav">
            <ul>
              <li><a href="https://www.creative-tim.com">Creative Tim</a></li>
              <li><a href="http://blog.creative-tim.com">Blog</a></li>
              <li>
                <a href="https://www.creative-tim.com/license">Licenses</a>
              </li>
            </ul>
          </nav> -->
                 <div class="credits ml-auto">
                     <span class="copyright">
                         ©
                         <script>
                             document.write(new Date().getFullYear());
                         </script>
                         , made with <i class="fa fa-heart heart"></i> by Creative Tim
                     </span>
                 </div>
             </div>
         </div>
     </footer>