@extends('main')

@section('import')
@endsection

@section('body')
<section class="section-cover">
    <div class="cover-image">
        <div class="d-flex justify-content-center">
            <img src="{{asset('images/icon/icon-main.png')}}" class="icon-main">
        </div>
        <div class="d-flex justify-content-center text-logo-main">
            <span class="text-easy">Easy</span>
            <span class="text-job">Job</span>
        </div>  
        <div class="d-flex justify-content-center text-slogan-main">
            get job &#8226; good job
        </div> 
        <div class="d-flex justify-content-center button-main-top">
            <div class="col-sm-2 text-btn">
                <a href="#" class="btn btn-default btn-text btn-size-pink"  data-toggle="modal" data-target="#exampleModalLong">Sign In</a>
                <a href="http://localhost:8000/register" class="btn btn-default btn-text btn-size-blue">Register</a>
            </div>
        </div>          
    </div>
</section>

@endsection

@section('script')
<script>
    
</script>
@endsection

