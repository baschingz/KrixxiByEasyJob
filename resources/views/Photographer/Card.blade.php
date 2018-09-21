@extends('main')

@section('body')

<div ng-controller="CardController">
    <section>
        <div class="container">
            <h2>Recommend for you</h2>
            <div class="row">
                <div class="col-sm-4" ng-repeat="">
                    <div class="card hovercard border-card">
                        <div class="cardheader">
                            <img src="{{asset('images/profile/profile1/album/1.jpg')}}" alt="" width="auto" height="200px">
                        </div>

                        <div class="avatar">
                            <a href="" target="_blank"><img src="{{asset('images/profile/profile1/tommy.jpg')}}" class="img-cover1"
                                    alt="" /></a>
                        </div>
                        <br>
                        <div class="info">
                            <div class="title row">
                                <div class="col-sm-12">
                                    <i class="fa fa-camera"></i>
                                    Tommy
                                </div>
                            </div>
                            <div class="desc row">
                                <div class="col-sm-12">
                                    <div id="textmore">
                                        <i class="fa fa-list-alt"></i>
                                        สวัสดีค่ะดิฉันชื่อต๋อมหมี เป็นช่างภาพมืออาชีพ รักในการถ่ายภาพเป็น <a href="#" onclick="showMore()"><u>...อ่านต่อ</u></a>                                    
                                    </div>
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
                            <br>
                            <div class="row">
                                <div class="input-group-btn col" align="center">
                                    <button type="button" class="btn-primary">Deal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4" ng-repeat="">
                    <div class="card hovercard border-card">
                        <div class="cardheader">
                            <img src="{{asset('images/profile/profile2/cover.jpg')}}" alt="" width="auto" height="200px">
                        </div>

                        <div class="avatar">
                            <a href="" target="_blank"><img src="{{asset('images/profile/profile2/profile.jpg')}}"
                                    class="img-cover1" alt="" /></a>
                        </div>
                        <br>
                        <div class="info">
                            <div class="title row">
                                <div class="col-sm-12">
                                    <i class="fa fa-camera"></i>
                                    Withp
                                </div>
                            </div>
                            <div class="desc row">
                                <div class="col-sm-12">
                                    <div id="textmore">
                                        <i class="fa fa-list-alt"></i>
                                        สวัสครับ ผมชื่อพี เป็นคนชอบถ่ายรูป ไว้ว่างๆ มาร่วมถ่ายรูปไปด้วยกันนะครับ
                                    </div>
                                </div>
                            </div>
                            <div class="desc row">
                                <div class="col-sm-12">
                                    <i class="fa fa-clock-o"></i>
                                    Fulltime : 3500
                                </div>
                            </div>
                            <div class="desc row">
                                <div class="col-sm-12">
                                    <i class="fa fa-clock-o"></i>
                                    Parttime : 2500
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
                            <br>
                            <div class="row">
                                <div class="input-group-btn col" align="center">
                                    <button type="button" class="btn-primary">Deal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4" ng-repeat="">
                    <div class="card hovercard border-card">
                        <div class="cardheader">
                            <img src="{{asset('images/profile/profile3/cover.jpg')}}" alt="" width="auto" height="200px">
                        </div>

                        <div class="avatar">
                            <a href="" target="_blank"><img src="{{asset('images/profile/profile3/profile.jpg')}}"
                                    class="img-cover1" alt="" /></a>
                        </div>
                        <br>
                        <div class="info">
                            <div class="title row">
                                <div class="col-sm-12">
                                    <i class="fa fa-camera"></i>
                                    PRYN
                                </div>
                            </div>
                            <div class="desc row">
                                <div class="col-sm-12">
                                    <div id="textmore">
                                        <i class="fa fa-list-alt"></i>
                                        ยินดีต้อนรับเข้าสู่ PRYN ที่จะทำให้ความทรงจำของทุกท่านเก็บอยู่ในรูปที่สวยงามที่สุด
                                    </div>
                                </div>
                            </div>
                            <div class="desc row">
                                <div class="col-sm-12">
                                    <i class="fa fa-clock-o"></i>
                                    Fulltime : 3500
                                </div>
                            </div>
                            <div class="desc row">
                                <div class="col-sm-12">
                                    <i class="fa fa-clock-o"></i>
                                    Parttime : 2500
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
                            <br>
                            <div class="row">
                                <div class="input-group-btn col" align="center">
                                    <button type="button" class="btn-primary">Deal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
</div>




@section('script')
<script>
    function showMore() {
        var item_text = document.getElementById("textmore")
        item_text.innerHTML =
            "สวัสดีค่ะดิฉันชื่อต๋อมหมี เป็นช่างภาพมืออาชีพ รักในการถ่ายภาพเป็นชีวิตจิตใจหลงใหลในการกดชัตเตอร์ ขอบคุณทุกท่านที่เข้ามาดูผลงานของเรา หากรักในงานของเราให้เราเป็นส่วนหนึ่งในการสร้างความทรงจำให้กับทุกๆท่านนะคะ"

    }

</script>

<script src="{{asset('js/MainJs.js')}}"></script>
<script src="{{asset('js/CardController/Card.js')}}"></script>
@endsection

@endsection
