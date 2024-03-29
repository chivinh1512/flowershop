<header>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="row">
                <div class="col-4">
                    <a href="">
                        <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-4">
                    <img src="{{asset('source/img/logo/logo.jpg')}}" alt="">
                </div>
                <div class="col-4 down">

                    <a href="#">
                        <i class="fa fa-user fa-2x"></i>
                        <div class="login">Đăng nhập</div>
                    </a>
                    <a href="#">
                        <div class="register">Đăng ký</div>
                    </a>

                    <a href="./shoppingcart.html">
                        <i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i>
                    </a>

                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-light menu">
    <a class="navbar-brand" href="#">Trang chủ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sản phẩm
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Giỏ hoa tươi</a>
                    <a class="dropdown-item" href="#">Bó hoa tươi</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Giới thiệu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Liên hệ</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
