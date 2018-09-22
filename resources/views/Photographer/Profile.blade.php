<style>
    .font-topic-penname {
        color: #114c5e;
        font-size: 40px;
        font-family: 'Kanit';
    }

    .font-photograph {
        color: #2e4c56;
        font-size: 16px;
    }

    .font-photograph2 {
        color: #2e4c56;
        font-size: 20px;
        font-family: 'Kanit';
    }

    .weight {
        font-weight: 200;
        font-family: 'Kanit';
    }

    .btn-deal {
        margin-top: 2%;
        border-radius: 4px;
        background-color: #000000;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 18px;
        padding: 5px;
        width: 120px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
    }

    .btn-close-deal:hover,
    .btn-deal:hover {
        background-color: #FFFFFF;
        color: #000000;
    }

    .photo-size {
        object-fit: cover;
        width: 180px;
        height: 180px;
        max-width: 250px;
        max-height: 100px;
    }

    ul,
    ol {
        margin-top: 0;
        margin-bottom: 10px;
    }

    ul,
    menu,
    dir {
        display: block;
        list-style-type: disc;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 40px;
    }

    .photo-size {
        object-fit: cover;
        width: 180px;
        height: 180px;
        max-width: 250px;
        max-height: 100px;
        margin-top: 10 px;
        margin-bottom: 10px;
    }

</style>
@extends('main')
@section('import')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@endsection
@section('body')
<section class="section-cover">
    <div class="" style="margin-top:-50%;">
        <img class="card-img cover-img" src="{{asset('images/profile/profile1/cover/cv1.jpg')}}">
    </div>
</section>

<div class="container" style="margin-top:60px">
    <div class="row">
        <div class="col-sm-3">
            <div class="col-4" style=" padding-right:100px; ">
                <img align="center" style="width: 256px; height: 256px; border-radius: 50%" src="{{asset('images/profile/profile1/tommy.jpg')}}"
                    id="img">
            </div>
        </div>
        <div class="col-sm-7" style=" padding-left:50px;">
            <div class="font-topic-penname">TOMMY</div>
            <div style="font-size:18px;"><span class="font-photograph fa"></span><span class="font-photograph2">Detail
                    : </span> <span class="weight">สวัสดีค่ะดิฉันชื่อต๋อมหมี
                    เป็นช่างภาพมืออาชีพ รักในการถ่ายภาพเป็นชีวิตจิตใจ หลงใหลในการกดชัตเตอร์
                    ขอบคุณทุกท่านที่เข้ามาดูผลงานของเรา หากรักในงานของเรา
                    ให้เราเป็นส่วนหนึ่งในการสร้างความทรงจำให้กับทุกๆท่านนะคะ </span></div>
            <ul class="list-unstyled" style="font-size:18px; font-family: 'Kanit';">
                <li class="font-photograph glyphicon glyphicon-user"></li><span class="font-photograph fa fa-user-circle">
                </span> <span class="font-photograph2">Name : </span> <span class="weight">Thanita Khopengklang</span>
                <br>
                <li class="font-photograph glyphicon glyphicon-globe"></li><span class="font-photograph fa fa-globe">
                </span> <span class="font-photograph2">Location : </span> <span class="weight">ภาคตะวันออกเฉียงเหนือ
                </span>
                <br>
                <li class="font-photograph glyphicon glyphicon-camera" aria-hidden="true"></li><span class="font-photograph fa fa-camera">
                </span> <span class="font-photograph2">Half : </span> <span class="weight">2000</span></span>
                <br>
                <li class="font-photograph glyphicon glyphicon-camera" aria-hidden="true"></li><span class="font-photograph fa fa-camera">
                </span> <span class="font-photograph2">Full : </span> <span class="weight">3000</span> </span>
                <br>
                <li class="" aria-hidden="true"></li><button class="btn-deal" data-toggle="modal" data-target="#myModal">Deal</button>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-bottom:20px">
    <div class="row">

        <div class="col-sm-4 container">
            <img class="card-img " src="{{asset('images/profile/profile1/album/1.jpg')}}" alt="Card image" style="max-width:100%">
        </div>

        <div class="col-sm-8" style="margin:auto">
            <div class="row">
                <div class="col-3">
                    <img class="card-img photo-size" src="{{asset('images/profile/profile1/album/1.jpg')}}" alt="Card image">
                </div>
                <div class="col-3">
                    <img class="card-img photo-size" src="{{asset('images/profile/profile1/album/2.jpg')}}" alt="Card image">
                </div>
                <div class="col-3">
                    <img class="card-img photo-size" src="{{asset('images/profile/profile1/album/12.jpg')}}" alt="Card image">
                </div>
                <div class="col-3">
                    <img class="card-img photo-size" src="{{asset('images/profile/profile1/album/13.jpg')}}" alt="Card image">
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid" style="margin-bottom:20px">
    <div class="row">

        <div class="col-sm-4">
            <img class="card-img" src="{{asset('images/profile/profile1/album/3.jpg')}}" alt="Card image" style="max-width:100%">
        </div>

        <div class="col-sm-8" style="margin:auto">
            <div class="row">
                <div class="col-3">
                    <img class="card-img photo-size" src="{{asset('images/profile/profile1/album/32.jpg')}}" alt="Card image">
                </div>
                <div class="col-3">
                    <img class="card-img photo-size" src="{{asset('images/profile/profile1/album/34.jpg')}}" alt="Card image">
                </div>
                <div class="col-3">
                    <img class="card-img photo-size" src="{{asset('images/profile/profile1/album/33.jpg')}}" alt="Card image">
                </div>
                <div class="col-3">
                    <img class="card-img photo-size" src="{{asset('images/profile/profile1/album/31.jpg')}}" alt="Card image">
                </div>
                <div class="col-3">
                    <img class="card-img photo-size" src="{{asset('images/profile/profile1/album/50.jpg')}}" alt="Card image">
                </div>
                <div class="col-3">
                    <img class="card-img photo-size" src="{{asset('images/profile/profile1/album/51.jpg')}}" alt="Card image">
                </div>
                <div class="col-3">
                    <img class="card-img photo-size" src="{{asset('images/profile/profile1/album/52.jpg')}}" alt="Card image">
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container">
    <h2 class="text-center">FeedBack</h2>
    <div class="row justify-content-center">
    <div class="card w-75">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('images/pop/pep.jpg')}}"  style="width: 120px; height: 120px; border-radius: 50%" class="img img-rounded img-fluid" />
                    <p class="text-secondary">15 Minutes Ago</p>
                </div>
                <div class="col-md-9">
                    <p>
                        <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Nakarin Jantratep</strong></a>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                    </p>
                    <div class="clearfix"></div>
                    <p>บริการเป็นกันเองมากครับ รูปออกมาสวย คนนี้ไม่ต้องหานานเลย ออกมาตามสไตล์ที่ smart search หาให้เลย โดยรวมชอบมากครับ</p>
                    <p>
                        <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                        <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div class="card w-75">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('images/pop/eye.jpg')}}"  style="width: 120px; height: 120px; border-radius: 50%" class="img img-rounded img-fluid" />
                    <p class="text-secondary">15 Minutes Ago</p>
                </div>
                <div class="col-md-9">
                    <p>
                        <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Nakarin Jantratep</strong></a>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                    </p>
                    <div class="clearfix"></div>
                    <p>ชอบมากเลย ช่างภาพกันเองมากๆ ให้แกได้ตลอดเลย ได้ของตามเวลา<p>
                        <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                        <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card w-75">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('images/pop/ty.jpg')}}"  style="width: 120px; height: 120px; border-radius: 50%" class="img img-rounded img-fluid" />
                    <p class="text-secondary">45 Minutes Ago</p>
                </div>
                <div class="col-md-9">
                    <p>
                        <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Nakarin Jantratep</strong></a>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                    </p>
                    <div class="clearfix"></div>
                    <p>สนุกมากถ่ายกับช่างภาพคนนี้ ขอบคุณเว็บนี้มาก หาช่างภาพได้เร็วมาก<p>
                        <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                        <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
</div>




@section('script')
<script>
function click(e){
    var id = document.getElementById(e);
    
}
</script>
@endsection
@endsection
