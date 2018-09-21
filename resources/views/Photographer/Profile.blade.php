@extends('main')
@section('body')

@endsection
div id="form1">
    <div ng-controller="PhotographerController" ng-init="init({{$id}})">
    <div class="card" style="margin-top:-5%;">
            <img class="card-img cover-img" src="<% photographer[0].cover_img %>">
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

        <!---Modal---->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content modal-deal">
                    <div class="modal-body">
                        <p>กรุณารอการติดต่อกลับจากช่างภาพ</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-close-deal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ------------Album------------ -->

        <div class="container-fluid" id="album1" ng-controller="AlbumController"
             ng-init="getImage({{$id}})">
            <div class="card" style="border: none; padding-bottom:2%;" ng-repeat="imgs in Images">
                <div class="row" ng-repeat="img in imgs">
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <img src="<% img[0].albumcover %>" class="albam-size card-img">
                            <div class="card-img-overlay">
                                <div class="album-title"><% img[0].albumname %></div>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <h3 class="card-title"><% img[0].albumname %></h3>
                            <ul ng-repeat="imgall in img[1]">
                                <li ng-repeat="imgb64 in imgall" class="test-li">

                                <div id="img<% img[0].albumname %><% $index+1 %>" class='modal'>
                                    <span class='close' id="img<% img[0].albumname %><% $index+1 %>c" ><i class="glyphicon glyphicon-remove"></i></span>
                                    <img class="modal-content" src='<% imgb64.imgBase64 %>'>
                                </div>
                                    <img src="<% imgb64.imgBase64 %>" onclick="show(this)" id="img<% img[0].albumname %><% $index+1 %>s"  class="photo-size"  >
                            <script>
                                function show(e){
                                    var getid = $(e).attr("id");
                                    var id = getid.substring(0,getid.length - 1);
                                    var myid = document.getElementById(id);
                                    myid.style.display="block";
                                    var getspan = id+"c";
                                    var span = document.getElementById(getspan);
                                    span.onclick=function(){
                                    myid.style.display="none";
                                    }
                                    window.onclick = function(event) {
                                        if (event.target == myid) {
                                            myid.style.display = "none";
                                        }
                                    }
                                }
                            </script>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </div>

            <!-- ------------Album------------ -->

    </div>
</div>

@section('script')
<script src='{{asset('js/PhotographerController/PhotographerJs.js')}}'></script>
@endsection
