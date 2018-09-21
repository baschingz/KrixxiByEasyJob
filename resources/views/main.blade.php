<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Krixxi</title>

    @yield('import')

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-reboot.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="icon" href="{{asset('../images/icon/Icon-20.png')}}" type="image/x-icon"/>

    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300,400,500|Quicksand:300,400,500" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src = "{{asset('js/angularjs.min.js')}}" ></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript">
        var base_path = "{{url('/')}}";
    </script>  

</head>

<body>

    

    @yield('body')
    
    <footer>

    </footer>
    <script src="{{asset('js/MainJs.js')}}"></script>
    @yield('script')
    </div>
</body>

</html>
