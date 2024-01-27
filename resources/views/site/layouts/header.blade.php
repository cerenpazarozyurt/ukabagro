<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UkabAgro</title>

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Poppins:wght@100&family=Raleway:wght@100;300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Raleway:wght@500;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Raleway:wght@500;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;900&family=Raleway:wght@500;700&display=swap" rel="stylesheet">

    <!-- font-awesone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<style>
    .nav-link{
        color: #333;
        font-family: Poppins;
        font-size: 15px;
        font-style: normal;
        font-weight: 600;
        line-height: 12px; /* 100% */
        text-transform: uppercase;
    }

    .nav-link-1{
        color: #9C641E;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color:#FFF; z-index:999;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/logo/logo 2-2 1.jpg') }}" alt="logo"> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" 
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-right:20px; margin-left:20px;">
                    <a class="nav-link" 
                    style="{{ Request::segment(1) == '' ? 'border-bottom: 1px solid #9C641E !important; color: #9C641E;' : '' }}"
                    href="{{ url('/') }}" style="margin-right:20px; margin-left:35px;">ANASAYFA <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item" style="margin-right:20px;">
                    <div class="dropdown ">
                        <a class="nav-link dropdown-toggle" href="{{ url('/#') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            KURUMSAL
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="{{ url('/hakkimizda') }}">HAKKIMIZDA</a>
                          <a class="dropdown-item" href="{{ url('/vizyon') }}">VİZYON / MİSYON</a>
                          <a class="dropdown-item" href="{{ url('/insankaynaklari') }}">İNSAN KAYNAKLARI</a>
                        </div>
                      </div>
                </li>

                <li class="nav-item" style="margin-right:20px;">
                    <div class="dropdown show">
                        <a class="nav-link dropdown-toggle"
                        href="{{ url('/#') }}" id="navbarDropdownProducts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ÜRÜNLER
                        </a>      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/urunler') }}">TÜM ÜRÜNLERİ</a>
                          <a class="dropdown-item" href="{{ url('/tahilurunleri') }}">TAHIL ÜRÜNLERİ</a>
                          <a class="dropdown-item" href="{{ url('/bakliyaturunleri') }}">BAKLİYAT ÜRÜNLERİ</a>
                          <a class="dropdown-item" href="{{ url('/kuruyemisurunleri') }}">KURUYEMİŞ ÜRÜNLERİ</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item" style="margin-right:20px">
                    <a class="nav-link" 
                    style="{{ Request::segment(1) == 'blog' ? 'border-bottom: 1px solid #9C641E !important; color: #9C641E;' : '' }}"
                    href="{{ url('/blog') }}">BLOG</a>
                </li>

                <li class="nav-item" style="margin-right:20px">
                    <a class="nav-link" 
                    style="{{ Request::segment(1) == 'e-katalog' ? 'border-bottom: 1px solid #9C641E !important; color: #9C641E;' : '' }}"
                    href="{{ url('/e-katalog') }}">E-KATALOG</a>
                </li>

                <li class="nav-item" style="margin-right:20px">
                    <a class="nav-link" 
                    style="{{ Request::segment(1) == 'iletisim' ? 'border-bottom: 1px solid #9C641E !important; color: #9C641E;' : '' }}" 
                    href="{{ url('/iletisim') }}">İLETİŞİM</a>
                </li>
          </ul>

          <ul class="navbar-nav ml-auto" style="color:#9C641E; display: flex; align-items: center;">

            <li class="nav-item">
                <a class="nav-link-1" href="#" style="margin-right:20px; margin-left:20px;"><i class="fa-brands fa-facebook-f"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link-1" href="#" style="margin-right:20px;"><i class="fa-brands fa-twitter"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link-1" href="#" style="margin-right:20px;"><i class="fa-brands fa-instagram"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link-1" href="#" style="margin-right:20px;"><i class="fa-brands fa-youtube"></i></a>
            </li>
          </ul>
          </div>
        </div>

    </nav>
