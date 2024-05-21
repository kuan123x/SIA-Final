<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin Impact Wiki</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
            background: linear-gradient(to bottom, #8097a8, #313d46);
            font-family: 'Arial', sans-serif;
        }
        .card {
            border: solid #30363b;
            box-shadow: 0 8px 8px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .card:hover {
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .card-body {
            padding: 20px;
            background-color: #adcadf;
        }
        .card-title {
    margin-top: 10px;
    color: #333;
    font-weight: bold;
    font-size: 25px;
    font-family: 'Arial', sans-serif;
}

.card-text {
    margin-top: 5px;
    color: #555;
    font-size: 18px;
    font-family: 'Times New Roman', Times, serif;
}


        #sidebar {
            height: 100vh;
            position: sticky;
            top: 0;
            background-color: #36454F;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        #branding {
            text-align: center;
            margin-bottom: 10px;
            margin-top: 10px
        }
        #branding img {
            max-width: 100%;
            height: auto;
        }
        /* #branding h1 {
            font-size: 20px;
            margin-top: 10px;
        } */
        #main-nav {
            margin-top: 60px;
            font-size: 18px;
            text-align: center;
        }
        #main-nav a {
            display: block;
            padding: 20px 0;
            text-decoration: none;
            color: white;
        }
        #main-nav a:hover {
            background-color: #2e3b44;
        }

        #main-nav a.active {
            background-color: #2e3b44;
            font-weight: bold;
        }

        .no-padding {
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 no-padding">
                <div id="sidebar">
                    <div id="branding">
                        <img src="{{ asset('images/10.png') }}" alt="">
                        {{-- <h1 class="text-white">Genshin Impact Wiki</h1> --}}
                    </div>

                    <nav id="main-nav">
                        <a href="{{ url('/') }}" class="{{ Request::is('home') ? 'active' : '' }}"> HOME  </a>
                        <a href="{{ url('/heroes') }}" class="{{ Request::is('heroes') ? 'active' : '' }}">HEROES</a>
                        <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">STORIES</a>
                    </nav>
                </div>
            </div>
            <div class="col-md-9">
                <div id="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</body>
</html>
