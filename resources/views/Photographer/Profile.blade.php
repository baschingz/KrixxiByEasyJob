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

    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }
    #myImg2 {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg2:hover {
        opacity: 0.7;
    }
    #myImg3 {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg3:hover {
        opacity: 0.7;
    }
    #myImg4{
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg4:hover {
        opacity: 0.7;
    }


    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (Image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image (Image Text) - Same Width as the Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation - Zoom in the Modal */
    .modal-content,
    #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
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
                    <img id="myImg" class="card-img photo-size" src="{{asset('images/profile/profile1/album/1.jpg')}}"
                        alt="Card image">
                </div>
                <div class="col-3">
                    <img id="myImg2" class="card-img photo-size" src="{{asset('images/profile/profile1/album/2.jpg')}}"
                        alt="Card image">
                </div>
                <div class="col-3">
                    <img class="card-img photo-size" src="{{asset('images/profile/profile1/album/12.jpg')}}" alt="Card image">
                </div>
                <div class="col-3">
                    <img class="card-img photo-size" src="{{asset('images/profile/profile1/album/13.jpg')}}" alt="Card image">
                </div>
            </div>
        </div>
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">

            <!-- Modal Caption (Image Text) -->
            <div id="caption"> Photo</div>
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
                    <img id="myImg3" class="card-img photo-size" src="{{asset('images/profile/profile1/album/32.jpg')}}" alt="Card image">
                </div>
                <div class="col-3">
                    <img id="myImg4" class="card-img photo-size" src="{{asset('images/profile/profile1/album/34.jpg')}}" alt="Card image">
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
                        <img src="{{asset('images/pop/pep.jpg')}}" style="width: 120px; height: 120px; border-radius: 50%"
                            class="img img-rounded img-fluid" />
                        <p class="text-secondary">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-9">
                        <p>
                            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Nakarin
                                    Jantratep</strong></a>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                        </p>
                        <div class="clearfix"></div>
                        <p>บริการเป็นกันเองมากครับ รูปออกมาสวย คนนี้ไม่ต้องหานานเลย ออกมาตามสไตล์ที่ smart search
                            หาให้เลย โดยรวมชอบมากครับ</p>
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
                        <img src="{{asset('images/pop/eye.jpg')}}" style="width: 120px; height: 120px; border-radius: 50%"
                            class="img img-rounded img-fluid" />
                        <p class="text-secondary">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-9">
                        <p>
                            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Nakarin
                                    Jantratep</strong></a>
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
                        <img src="{{asset('images/pop/ty.jpg')}}" style="width: 120px; height: 120px; border-radius: 50%"
                            class="img img-rounded img-fluid" />
                        <p class="text-secondary">45 Minutes Ago</p>
                    </div>
                    <div class="col-md-9">
                        <p>
                            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Nakarin
                                    Jantratep</strong></a>
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
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg2');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }
    var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg3');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg4');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}
</script>
@endsection
@endsection
