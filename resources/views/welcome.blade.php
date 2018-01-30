<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Đăng ký đá bóng SPKT</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|" rel="stylesheet" type="text/css">
    <link href="{{secure_asset(asset('fonts/font-awesome.min.css'))}}" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="{{secure_asset(asset('style.css'))}}">

    <!--[if lt IE 9]>
    <script src="{{secure_asset(asset('js/ie-support/html5.js'))}}"></script>
    <script src="{{secure_asset(asset('js/ie-support/respond.js'))}}"></script>
    <![endif]-->

</head>
<body>

<div class="site-content">
    <div class="hero" data-bg-image="{{secure_asset(asset('images/header-bg.jpg'))}}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="hero-title">Danh Sách Đá Bóng <strong>Ngày 04/02/2018</strong></h1>
                    <small class="hero-subtitle">Thông tin cơ bản.</small>
                    <div class="product-features">
                        <h2>Danh sách cầu thủ : </h2>
                        <ul class="check-list">
                            @php $i = 1; @endphp
                            @foreach($danhsach as $item)
                            <li>{{ $i }} - {{$item->HoTen}} - {{$item->SoDienThoai}}</li>
                                @php $i++; @endphp
                            @endforeach
                        </ul>
                    </div>

                    <div class="ribbon"> Đăng Ký <strong> Tham Gia </strong> Tại Đây </div>
                </div>
                <div class="col-md-4">
                    <div class="request-form">
                        <form method="post" action="{{route('home')}}">
                            {!! csrf_field() !!}
                            <h2 class="form-title">Các thông tin sau là bắt buộc</h2>
                            <p>Vui lòng điền thông tin chính xác.</p>

                            <div class="control">
                                <input name="HoTen" type="text" placeholder="Họ Tên...">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="control">
                                <input name="SoDienThoai" type="text" placeholder="Số Điện Thoại...">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="control">
                                <input name="VoteTime" type="text" placeholder="Vote Time...">
                                <i class="fa fa-globe"></i>
                            </div>
                            <input type="submit" value="Đăng ký">
                            @if ($errors->any())
                                <div class=" control alert alert-danger">
                                    <ul><span style="color:red">Vui Lòng điền thông tin đầy đủ</span></ul>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .hero -->

    <main class="main-content">
        <div class="fullwidth-block">
            <div class="container">
                <div class="row ingredient">
                    <div class="col-md-8">
                        <h2>Ghi chú</h2>
                        <p>Nội dung</p>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- .main-content -->

    <footer class="site-footer">
        <div class="container">
            <p>copyright 2018 Thanh Khoa. All rights reserved.</p>

            <div class="social-links">
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
            </div>
        </div>
    </footer> <!-- .site-footer -->
</div>

<script src="{{secure_asset(asset('js/jquery-1.11.1.min.js'))}}"></script>
<script src="{{secure_asset(asset('js/plugins.js'))}}"></script>
<script src="{{secure_asset(asset('js/app.js'))}}"></script>

</body>

</html>