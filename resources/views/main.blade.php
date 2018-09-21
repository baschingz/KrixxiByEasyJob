<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="myApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy Job</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-reboot.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />

    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300,400,500|Quicksand:300,400,500" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="{{asset('js/angularjs.min.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript">
        var base_path = "{{url('/')}}";
    </script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    @yield('import')
</head>

<body>
<div ng-controller='MainController'> 
    <section class="section-navbar">
        <header>
            <nav class="navbar navbar-light bg-light text-nav">                
                <a class="navbar-brand" href="http://localhost:8000">Easy Job</a>
                <button type="button" class="btn btn-login" data-toggle="modal" data-target="#exampleModalLong">Sign In</button>
            </nav>
        </header>
    </section>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="" >Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="text" class="form-control" ng-model='formSignIn.email'  placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" ng-model='formSignIn.password' placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" >
                        <label class="form-check-label" for="exampleCheck1">Remember</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-login" ng-click='signIn(formSignIn)'>Sign In</button>
                    <button type="button" class="btn btn-login" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    @yield('body')
    <footer>

    </footer>
    <script src="{{asset('js/MainController/MainJs.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    @yield('script')
    </div>
</body>
</html>
