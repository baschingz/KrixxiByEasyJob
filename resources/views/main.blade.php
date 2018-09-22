<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Krixxi</title>

    @yield('import')
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-social.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-reboot.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/search.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="icon" href="{{asset('../images/icon/Icon-20.png')}}" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300,400,500|Quicksand:300,400,500" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yantramanav:100,200,300" rel="stylesheet">
    <script src="{{asset('js/angularjs.min.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript">
        var base_path = "{{url('/')}}";

    </script>

</head>

<body>
    <section class="section-navbar">
        <header>
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <nav class="navbar navbar-light bg-light text-nav">
                        <a class="navbar-brand" href="http://localhost:8000">Krixxi</a>         
                    </nav>
                </div>
            </div>            
        </header>
    </section>
    
    @yield('body')

    <footer class="footer">
        <div class="container text-footer">
            <div class="row">
                <div class="col-sm-6 text-footer-krixxi" style="margin-top: 2%;">
                    Krixxi
                </div>
                <div class="col-sm-6" style="margin-top: 2%;">
                    <ul class="nav">
                        <li>Contact us</li>
                        <li>E-mail : Krixxi@gmail.com</li>
                        <li>Tel : 098-107-5755</li>
                        <li>Facebook : Krixxi แหล่งรวมช่างภาพ</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/MainJs.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    @yield('script')
    </div>
</body>

</html>
