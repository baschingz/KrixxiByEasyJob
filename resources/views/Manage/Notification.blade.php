@extends('main')

@section('body')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="">Manage</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Notification <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Employer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Job Seeker</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">

            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Out</button>
        </form>
    </div>
</nav>

<div>
    <div class='container'>
        <h3> รายชื่อร้านที่เข้ามาลงทะเบียน</h3>
    </div>

    <div class='container'>
        <h3> รายชื่อคนหางานที่เข้ามาลงทะเบียน</h3>
    </div>

</div>
@endsection

@section('script')
<script src="{{asset('js/ManageController/NotificationJs.js')}}"></script>
@endsection