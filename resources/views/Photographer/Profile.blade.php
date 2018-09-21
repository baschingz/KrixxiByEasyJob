@extends('main')
@section('body')

@endsection

@section('script')
<script src='{{asset('js/PhotographerController/PhotographerJs.js')}}'></script>



<div id="form1">
  <div class="card" style="margin-top:-5%;">
    <img class="card-img cover-img" src="..\images\profile\profile1\album\alp1.jpg">
  </div>
  <div class="container-fluid" style="padding-top:1%; padding-bottom:2%;">
    <div class="col-sm-3 col-md-offset-1">
      <img ng-src="<% photographer[0].profile_img %>" id="img" class="photographer-avatar">
    </div>
    <div class="col-sm-7" style="padding-top:3%;">
      <div class="font-topic-penname"><% photographer[0].penname %></div>
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

</div>
@endsection
