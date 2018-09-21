@extends('main')
@section('import')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='{{asset('js/PhotographerController/PhotographerJs.js')}}'></script>
@endsection
@section('body')
<section class="section-cover">
    <div class="cover" style="margin-top:-5%;">
      <img class="card-img-top cover-img" style="height: 400px;" src="..\images\profile\profile1\cover\cv1.jpg">
    </div>
</section>

<div class="container-fluid" style="padding-top:1%; padding-bottom:2%;">
  <div class="col-sm-3 col-md-offset-1">
    <img src="..\images\profile\profile1\p1.jpg" id="img" class="photographer-avatar">
  </div>
  <div class="col-sm-7" style="padding-top:3%;">
    <div class="font-topic-penname">TOMMY</div>
    <div style="font-size:18px;"><span class="font-photograph">Detail : </span><span class="weight"><% photographer[0].description %></span></div>
    <ul class="list-unstyled"  style="font-size:18px;">
      <li class="font-photograph glyphicon glyphicon-user"></li><span class="font-photograph">  Name     :  </span> <span class="weight"><%  photographer[0].fullname %> </span>
      <br>
      <li class="font-photograph glyphicon glyphicon-globe"></li><span class="font-photograph">  Region    :   </span> <span class="weight"><% photographer[0].name %> </span>
      <br>
      <li class="font-photograph glyphicon glyphicon-camera" aria-hidden="true"></li><span class="font-photograph">  Half    :  </span> <span class="weight"><% photographer[0].parttime %></span></span>
      <br>
      <li class="font-photograph glyphicon glyphicon-camera" aria-hidden="true"></li><span class="font-photograph">  Full    :  </span>  <span class="weight"><% photographer[0].fulltime %></span> </span>
      <br>
      <li class="" aria-hidden="true"></li><button class="btn-deal" data-toggle="modal" data-target="#myModal">Deal</button>
    </ul>
  </div>
</div>

@section('script')
@endsection
@endsection
