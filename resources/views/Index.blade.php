@extends('main')

@section('body')
<section class="section-cover">
    <div class="cover-image">
        <div class="d-flex justify-content-center">
            <img src="" class="icon-main">
        </div>
        <div class="d-flex justify-content-center text-logo-main">
            <span class="text-easy">Krixxi</span>
        </div>
        <div class="d-flex justify-content-center text-slogan-main">
            Keep Memory
        </div>
        <div class="d-flex justify-content-center button-main-top">
            <div class="col-sm-3 text-btn">
                <a href="#" class="btn btn-default btn-text btn-size-pink" data-toggle="modal" data-target="#exampleModalLong">Sign In</a>
                <!-- <a href="http://localhost:8000/register" class="btn btn-default btn-text btn-size-blue">Register</a> -->
                <a href="http://localhost:8000/home" class="btn btn-default btn-text btn-size-bluefacebook">Facebook</a>
            
            </div>
        </div>
    </div>
</section>




@section('script')

@endsection

@endsection
