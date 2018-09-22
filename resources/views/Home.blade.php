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
        <div class="row top-auction justify-content-center">
            <span class="text-topic-auction">ประมูลช่างภาพคนดัง </span>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <div class="card-auction">
                    <img src="{{asset('images/pop/bas.jpg')}}" alt="Avatar" style="width:100%">
                    <div class="container-auction">
                        <h5 class="card-title text-name-auction"> <i class="fa fa-camera" aria-hidden="true"></i> Bas the Pinocio</h5>
                        <p class="card-text text-detail-auction">ช่างภาพอารมณ์ดี ที่มีความสามารถในการถ่ายภาพได้ทุกรูปแบบ โดยเฉพาะแบบใสใส สไตล์เกาหลี</p>
                        <p id="demo1" class="timer"></p>
                        <p class="card-text text-detail-price">3,300 THB</p>
                        <div class="row justify-content-center">
                            <button class="btn btn-default text-btn-auction btn-width-auction">ประมูล</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-auction">
                    <img src="{{asset('images/pop/arm.jpg')}}" alt="Avatar" style="width:100%">
                    <div class="container-auction">
                        <h5 class="card-title text-name-auction"> <i class="fa fa-camera" aria-hidden="true"></i> Somsri Black Cat</h5>
                        <p class="card-text text-detail-auction">ช่างภาพสาย dark ที่มาแรงในยุคนี้ที่ไม่มีคนไหนไม่รู้จักชื่อเสียงของเขา ได้ผลงานการถ่ายภาหลายสถาบัน</p>
                        <p id="demo2" class="timer"></p>
                        <p class="card-text text-detail-price">3,100 THB</p>
                        <div class="row justify-content-center">
                            <button class="btn btn-default text-btn-auction btn-width-auction">ประมูล</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-auction">
                    <img src="{{asset('images/pop/bom.jpg')}}" alt="Avatar" style="width:100%">
                    <div class="container-auction">
                        <h5 class="card-title text-name-auction"> <i class="fa fa-camera" aria-hidden="true"></i> Atomic BomBey</h5>
                        <p class="card-text text-detail-auction">ช่างภาพสายฮา ถนัดงานแบบลุยๆ ถ่ายแบบให้ดาราระดับโลก ประจำนิตยสารชื่อดังในทั่วโลก</p>
                        <p id="demo3" class="timer"></p>
                        <p class="card-text text-detail-price">2,800 THB</p>
                        <div class="row justify-content-center">
                            <button class="btn btn-default text-btn-auction btn-width-auction">ประมูล</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

</section>
<div class="bottom"></div>

@section('script')
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>
</head>
<body>

<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Tu 25, 2018 :37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo1").innerHTML =  hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo1").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2019 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo2").innerHTML =  hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo2").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2019 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo3").innerHTML =  hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo3").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</body>
</html>

@endsection

@endsection
