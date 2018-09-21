@extends('main')

@section('body')
<section class="section-home">
    <div class="home-cover-image">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <button class="btn btn-default button-top btn-width-default btn-text-default"> <i class="fa fa-search" aria-hidden="true"></i> Smart search</button>        
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

@section('script')

@endsection

@endsection
