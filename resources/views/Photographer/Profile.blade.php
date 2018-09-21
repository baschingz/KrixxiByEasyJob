<style>
.font-topic-penname {
    color: #114c5e;
    font-size: 40px;
}
.font-photograph {
    color: #70939f;
    font-size: 16px;
}
.weight {
    font-weight: 200;
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
.btn-deal:hover{
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
ul, ol {
    margin-top: 0;
    margin-bottom: 10px;
}
ul, menu, dir {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
</style>
@extends('main')
@section('import')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='{{asset('js/PhotographerController/PhotographerJs.js')}}'></script>
@endsection
@section('body')
<section class="section-cover">
  <div class="" style="margin-top:-50%;">
    <img class="card-img cover-img" src="{{asset('images/profile/profile1/cover/cv1.jpg')}}">
  </div>
</section>

<div class="container-fluid" style="background-color:blue;color:white">
  asdfkjaslkdfjkls;
</div>







<div class="container-fluid">
  <div class="row " style="padding:50px">
    <div class="col-sm-12">
    <div class="container-fluid">
      <div class="col-4">
        <img  style="width: 256px; height: 256px; border-radius: 50%;" src="{{asset('images/profile/profile1/tommy.jpg')}}" id="img">
      </div>
      <div class="col-8" style="padding-top:3%;">
        <div class="font-topic-penname">TOMMY</div>
        <div style="font-size:18px;"><span class="font-photograph fa">Detail : </span><span class="weight">สวัสดีค่ะดิฉันชื่อต๋อมหมี เป็นช่างภาพมืออาชีพ รักในการถ่ายภาพเป็นชีวิตจิตใจ หลงใหลในการกดชัตเตอร์ ขอบคุณทุกท่านที่เข้ามาดูผลงานของเรา หากรักในงานของเรา ให้เราเป็นส่วนหนึ่งในการสร้างความทรงจำให้กับทุกๆท่านนะคะ </span></div>
        <ul class="list-unstyled"  style="font-size:18px;">
          <li class="font-photograph glyphicon glyphicon-user"></li><span class="font-photograph fa fa-user-circle">  Name     :  </span> <span class="weight">Thanita Khopengklang</span>
          <br>
          <li class="font-photograph glyphicon glyphicon-globe"></li><span class="font-photograph fa fa-globe">  Location   :   </span> <span class="weight">ภาคตะวันออกเฉียงเหนือ </span>
          <br>
          <li class="font-photograph glyphicon glyphicon-camera" aria-hidden="true"></li><span class="font-photograph fa fa-camera">  Half    :  </span> <span class="weight">2000</span></span>
          <br>
          <li class="font-photograph glyphicon glyphicon-camera" aria-hidden="true"></li><span class="font-photograph fa fa-camera">  Full    :  </span>  <span class="weight">3000</span> </span>
          <br>
          <li class="" aria-hidden="true"></li><button class="btn-deal" data-toggle="modal" data-target="#myModal">Deal</button>
        </ul>
      </div>

    </div>
    <div class="col-sm-9">
      <div class="col">
      <img src="{{asset('images/profile/profile1/album/1.jpg')}}" class="albam-size card-img">
      <div class="card-img-overlay">
        <div class="album-title">PRE CON</div>
      </div>
      <ul ng-repeat="imgall in img[1]">
          <li ng-repeat="imgb64 in imgall" class="test-li">
              <img src="{{asset('images/profile/profile1/album/1.jpg')}}" onclick="show(this)" class="photo-size"  >
          </li>
      </ul>
    </div>

    <div class="col" style="padding-top:3%;">
      <img src="{{asset('images/profile/profile1/album/2.jpg')}}" class="albam-size card-img">
      <div class="card-img-overlay">
        <div class="album-title">Congratulations</div>
      </div>
    </div>
    <div class="col" style="padding-top:3%;">
      <img src="{{asset('images/profile/profile1/album/3.jpg')}}" class="albam-size card-img">
      <div class="card-img-overlay">
        <div class="album-title">Grace</div>
      </div>
    </div>
    </div>


  </div>



  </div>
</div>

@section('script')
@endsection
@endsection
