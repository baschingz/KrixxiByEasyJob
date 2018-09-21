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
                                    <i class="fa fa-camera"></i>
                                    Tommy
                                </div>
                            </div>
                            <div class="desc row">
                                <div class="col-sm-12">
                                    <i class="fa fa-list-alt"></i>
                                    สวัสดีค่ะดิฉันชื่อต๋อมหมี เป็นช่างภาพมืออาชีพ รักในการถ่ายภาพเป็นชีวิตจิตใจ หลงใหลในการกดชัตเตอร์ ขอบคุณทุกท่านที่เข้ามาดูผลงานของเรา หากรักในงานของเรา ให้เราเป็นส่วนหนึ่งในการสร้างความทรงจำให้กับทุกๆท่านนะคะ
                                </div>
                            </div>
                            <div class="desc row">
                                <div class="col-sm-12">
                                    <i class="fa fa-clock-o"></i>
                                    Fulltime : 3000
                                </div>
                            </div>
                            <div class="desc row">
                                <div class="col-sm-12">
                                    <i class="fa fa-clock-o"></i>
                                    Parttime : 2000
                                </div>
                            </div>
                            <div class="desc center2 row">
                                <div class="col-sm-12">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
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