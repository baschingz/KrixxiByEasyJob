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

  <div class="container-fluid" style="padding-top:5%; padding-bottom:2%; padding-left:5%;">
    <div class="col-sm-4 col-md-offset-1">
      <img  style="width: 256px; height: 256px; border-radius: 50%;" src="{{asset('images/profile/profile1/tommy.jpg')}}" id="img">
    </div>
    <div class="col-sm-3" style="padding-top:3%;">
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
</section>

@section('script')
@endsection
@endsection
