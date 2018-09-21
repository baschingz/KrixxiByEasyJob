@extends('main')

@section('body')
<section class="section-home">
    <div class="home-cover-image">
        <div class="row justify-content-center">
            <div class="col-sm-5">
              <a href="http://localhost:8000/card"> <button class="btn btn-default button-top btn-width-default btn-text-default"> <i class="fa fa-search" aria-hidden="true"></i> Smart search</button> </a>       
            </div>
        </div>
    </div>
    <div class="container home-menu-top">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('../images/menu/search.png')}}">
                        </div>
                        <div class="row justify-content-center">
                            <span class="text-menu">Booking</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('../images/menu/pin.png')}}">
                        </div>
                        <div class="row justify-content-center">
                            <span class="text-menu">Location </span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('../images/menu/megaphone.png')}}">
                        </div>
                        <div class="row justify-content-center">
                            <span class="text-menu">Promotion</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</section>

<section class="section-auction">
    <div class="container">
        <div class="card">
            <div class="card-header">
                ประมูลช่างภาพคนดัง
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('images/pop/bas.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Bas the Pinocio</h5>
                                <p class="card-text">ช่างภาพอารมณ์ดี ที่มีความสามารถในการถ่ายภาพได้ทุกรูปแบบ โดยเฉพาะแบบใสใส สไตล์เกาหลี ได้รับรางวัลด้านความคิดสร้างสรรค์ ได้รับงานในระดับโลกหลายงาน</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('images/pop/arm.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Somsri Puss Kill</h5>
                                <p class="card-text">ช่างภาพสาย dark ที่มาแรงในยุคนี้ที่ไม่มีคนไหนไม่รู้จักชื่อเสียงของเขา 
                                    ได้ผลงานการถ่ายภาหลายสถาบัน</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('images/pop/bom.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">BomBey</h5>
                                <p class="card-text">ช่างภาพสายฮา ถนัดงานแบบลุยๆ ถ่ายแบบให้ดาราระดับโลก ประจำนิตยสารชื่อดังในทั่วโลก</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@section('script')

@endsection

@endsection
