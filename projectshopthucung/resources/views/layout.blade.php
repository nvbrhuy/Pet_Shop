
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý cửa hàng thú cưng</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/img/logo.jpg')}}"/>
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
                    <img src="data:image/jpeg;base64,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" alt="">

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
