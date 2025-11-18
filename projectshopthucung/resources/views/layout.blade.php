
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('https://i.pinimg.com/originals/c7/c5/ee/c7c5ee9481e54ff75d26eb62e5d2e4d9.jpg')}}"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('frontend/css/bsgrid.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />

</head>
<body>
    <div class="header">

        <div class="navbar">
            <div class="navbar__left">
                <a href="{{ URL::to('/')}}" class="navbar__logo">
                    <img src="{{ asset('frontend/img/logo.jpg') }}" alt="">
                </a>

                <div class="navbar__menu">
                    <i id="bars" class="fa fa-bars" aria-hidden="true"></i>
                    <ul>
                        <li><a href="{{ URL::to('/')}}">Trang chủ</a></li>
                        <li><a href="{{ URL::to('/congiong')}}">Con giống</a></li>
                        <li>
                            <a href="{{ URL::to('/services')}}">Dịch vụ</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/donhang')}}">Đơn hàng</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="navbar__center">
                <form action="{{route('search')}}" method="GET" class="navbar__search">
                    <input type="text" value="" placeholder="Nhập để tìm kiếm..." name="tukhoa" class="search" required>
                    <i class="fa fa-search" id="searchBtn"></i>
                </form>
            </div>

            <div class="navbar__right">

                @if (Auth::check())
                <!-- Hiển thị nút logout -->

                <span class="mr-2">{{Auth::user()->hoten}}</span>

                <div class="logout">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button style="border: none;" type="submit"><i class="fas fa-sign-out-alt text-primary"></i></button>
                    </form>
                </div>
                @else
                    <!-- Hiển thị nút login -->
                    <div class="login">
                        <a href="{{ URL::to('login')}}"><i class="fa fa-user"></i> </a>
                    </div>
                @endif

                <a href="{{ route('cart') }}" class="navbar__shoppingCart">
                    <img src="{{ asset('frontend/img/shopping-cart.svg')}}" style="width: 24px;" alt="">

                    @if (session('cart'))
                        <span>{{ count((array) session('cart')) }}</span>
                    @else
                        <span>0</span>

                    @endif
                </a>
            </div>
        </div>

    </div>

    <!-- Content -->
    @yield('content')

    <div class="go-to-top"><i class="fas fa-chevron-up"></i></div>

    <footer class="text-white text-center" style="background-color: #003399;">
        <div class="container py-4">
            <!-- Social Media Links -->
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="https://facebook.com" role="button" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com" role="button" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://instagram.com" role="button" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://linkedin.com" role="button" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </section>




            <!-- Navigation and Company Info -->
            <section>
                <div class="row text-start">
                    <!-- Brand Name -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase fw-bold mb-3 text-light">PetShop</h5>
                        <p>
                            Đặt dịch vụ chăm sóc thú cưng nhanh chóng với trải nghiệm tuyệt vời!
                        </p>
                    </div>

                    <!-- Navigation Links -->
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h6 class="fw-bold mb-3 text-light">Điều hướng</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="/" class="text-white text-decoration-none">Trang chủ</a>
                            </li>
                            <li class="mb-2">
                                <a href="/movies" class="text-white text-decoration-none">Dịch vụ tại PetCare</a>
                            </li>
                            <li class="mb-2">
                                <a href="/news" class="text-white text-decoration-none">Tin tức</a>
                            </li>
                            <li>
                                <a href="/promotions" class="text-white text-decoration-none">Khuyến mãi</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Support Links -->
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h6 class="fw-bold mb-3 text-light">Hỗ trợ</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="/contact" class="text-white text-decoration-none">Liên hệ</a>
                            </li>
                            <li class="mb-2">
                                <a href="/about" class="text-white text-decoration-none">Về chúng tôi</a>
                            </li>
                            <li>
                                <a href="/privacy" class="text-white text-decoration-none">Chính sách bảo mật</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Company Info -->
                    <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                        <h6 class="fw-bold mb-3 text-light">Thông tin công ty</h6>
                        <p>
                            CÔNG TY TNHH PETSHOP<br>
                            Số ĐKKD: 0317891234<br>
                            Nơi cấp: Sở Kế hoạch và Đầu tư Thành Phố Đà Nẵng<br>
                            Ngày đăng ký: 20/10/2025<br>
                            Địa chỉ: 120 Hoàng Minh Thảo, Phường Hòa Khánh, Tp. Đà Nẵng
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3 bg-black">
            © 2025 PETSHOP. All rights reserved.
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        //Slider using Slick
        $(document).ready(function () {
            $('.post-wrapper').slick({
                slidesToScroll: 1,
                autoplay: true,
                arrow: true,
                dots: true,
                autoplaySpeed: 5000,
                prevArrow: $('.prev'),
                nextArrow: $('.next'),
                appendDots: $(".dot"),
            });
        });

        // Slick mutiple carousel
        $('.post-wrapper2').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: $('.prev2'),
            nextArrow: $('.next2'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 3,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>

    <script src="{{ asset('frontend/script/script.js') }}"></script>

</body>
</html>
