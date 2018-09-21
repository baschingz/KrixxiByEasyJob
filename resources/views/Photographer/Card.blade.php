@extends('main')

@section('body')

    <div ng-controller="CardController">
        <section >
            <div class="container">
                <div class="col-lg-4 col-sm-6" ng-repeat="">
                    <div class="card hovercard border-card">
                        <div class="cardheader">
                            <img src="" alt="">
                        </div>

                        <div class="avatar">
                            <a href="" target="_"><img src="" class="" alt=""></a>
                        </div>

                        <div class="info">
                            <div class="title row">
                                <div class="col-sm-12">
                                    <i class="glyphicon glyphicon-camera"></i>
                                    Tommy
                                </div>
                            </div>
                            <div class="desc row">
                                <div class="col-sm-12">
                                    <i class="glyphicon glyphicon-list-alt"></i>
                                    test
                                </div>
                            </div>
                            <div class="desc row">
                                <div class="col-sm-12">
                                    <i class="glyphicon glyphicon glyphicon-time"></i>
                                    Fulltime : 3000
                                </div>
                            </div>
                            <div class="desc row">
                                <div class="col-sm-12">
                                    <i class="glyphicon glyphicon glyphicon-time"></i>
                                    Parttime : 2000
                                </div>
                            </div>
                            <div class="desc center2 row">
                                <div class="col-sm-12">
                                    <i class="glyphicon glyphicon-star star-color"></i>
                                    <i class="glyphicon glyphicon-star star-color"></i>
                                    <i class="glyphicon glyphicon-star star-color"></i>
                                    <i class="glyphicon glyphicon-star star-color"></i>
                                    <i class="glyphicon glyphicon-star star-color"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@section('script')
    <script src="{{asset('js/MainJs.js')}}"></script>
    <script src="{{asset('js/CardController/Card.js')}}"></script>
@endsection

@endsection