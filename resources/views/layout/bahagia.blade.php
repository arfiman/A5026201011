<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

    {{-- Google Fonts - Lora & Roboto --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Roboto&display=swap" rel="stylesheet">

    {{-- Bootstrap 3.1.1 CSS CDN --}}
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    {{-- Bootstrap 3.3.1 JS CDN --}}
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    {{-- CDN custom untuk datetime --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
	<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

    {{-- Jquery 2.1.1 CDN --}}
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>

    {{-- W3School CDN untuk Sidebar --}}
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    {{-- JS dan CSS Local --}}
    <script src="{{URL::asset('/js/sidebar.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('/css/bahagia.css')}}">
</head>

<body class="font-default">

    {{-- Sidebar --}}
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <h3 class="w3-bar-item">Link</h3>
        <a href="/pegawai" class="w3-bar-item w3-button">Pegawai</a>
        <a href="/absen" class="w3-bar-item w3-button">Absen</a>
        <a href="/pendapatan" class="w3-bar-item w3-button">Pendapatan</a>
        <a href="#" class="w3-bar-item w3-button">Minggu Depan (Coming Soon)</a>
        <a href="#" class="w3-bar-item w3-button">Praktikum (Coming Soon)</a>
    </div>

    {{-- Non-Sidebar --}}
    <div id="main">
        {{-- Button untuk sidebar --}}
        <div class="w3-bar-block w3-card bg-blue">
            <button id="openNav" class="w3-button w3-xlarge bg-blue" onclick="sidebar_toggle()">&#9776;</button>
        </div>

        {{-- Header --}}
        <div class="container text-center mb-1">
            <div class="row mb-1 mt-2">
                <div class="col-md-3 col-lg-3">
                    <img src="{{URL::asset('/images/profile_pic.jpg')}}" alt="Foto" width="100">
                </div>
                <div class="col-md-9 col-lg-9">

                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    NRP : 5026201011 <br>
                    Nama : Muhammad Arif Nuriman
                </div>
                <div class="col-md-9 col-lg-9">

                </div>
            </div>
        </div>

        {{-- Isi --}}
        <div class="container mb-3">
            <div class="text-center mb-4">
                <h3>@yield('judulhalaman')</h3>
            </div>

            @section('konten')

            @show
        </div>

        {{-- Footer --}}
        <div class="padding-footer bg-gray font-alt container-fluid">
            <p class="text-center text-white">
                Hak Cipta Oleh<br>
                5026201011 - Muhammad Arif Nuriman
            </p>
        </div>
    </div>

</body>
</html>
