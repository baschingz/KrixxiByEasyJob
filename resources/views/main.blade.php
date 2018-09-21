<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('import')
    <script src = "{{asset('js/angularjs.min.js')}}" ></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript">
        var base_path = "{{url('/')}}";
    </script>
    <title>Krixxi</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


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
