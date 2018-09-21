@extends('main')

@section('body')
<section class="section-register">
  <div class="container top">
    <div class="row justify-content-center">
      <div class="col-sm-3">
        <a href="" id='em' class="btn btn-default btn-text btn-size-pink">Employee</a>
      </div>
      <div class="col-sm-3">
        <a href="" id='job' class="btn btn-default btn-text btn-size-blue">JobSeeker</a>
      </div>
    </div>

    <div class="row form-register-top">
      <div class="col-sm-6">
        <div class="row justify-content-center">
          <div class="col-sm-12">
            <img src="{{asset('images/img/img1.jpg')}}" class="size-img-register">
          </div>          
        </div>
      </div>
      
      <div class="col-sm-6" ng-controller='RegisterController'>
        <form name="Employee" id='employerForm'>
          <div >
            <div class="row text-topic-register">
              <div class="col-sm-12">
                Employee  
              </div>                           
            </div>
            <hr>  
            <div class="row justify-content-center">
              <div class="col-sm-8">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" class="form-control text-input-register" placeholder="ชื่อ">
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-sm-8">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text width-group"><i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" class="form-control text-input-register" id="nameShop" placeholder="ชื่อร้าน">
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-sm-8">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" class="form-control text-input-register" id="address" placeholder="ที่อยู่ร้าน">
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-sm-8">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-shopping-cart" aria-hidden="true"></i></label>
                  </div>
                    <select class="custom-select text-input-register">
                      <option value="" disabled selected>เลือกประเภทร้าน</option>
                      <option value="">ร้านนม</option>
                      <option value="">ร้านข้าว</option>
                      <option value="">ร้านขนม</option>
                    </select>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-sm-8">
                <div class="custom-file">
                  <input type="file" class="custom-file-input">
                  <label class="custom-file-label">Choose file...</label>
                </div>
              </div>
            </div>
            <div class="row top-regis justify-content-center">
              <div class="col-sm-8">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" class="form-control text-input-register" id="phonenumber" placeholder="เบอร์โทรร้าน">
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-sm-8">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                  </div>
                  <input type="email" class="form-control text-input-register"  placeholder="อีเมล">
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-sm-5">
                <a href="" class="btn btn-default btn-text btn-size-regis">Register</a>
              </div>
            </div>
          </div>
        </form>

        <!-- registere form for jobseeker -->
        <form name="Jobseeker"  id='jobseekerForm' style='display:none;'>
          <div>
            <div class="row text-topic-register">
                <div class="col-sm-12">
                  Job Seeker  
                </div>                           
              </div>
              <hr>  
              <div class="row justify-content-center">
                <div class="col-sm-8">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control text-input-register" placeholder="ชื่อ">
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-sm-8">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control text-input-register" placeholder="อายุ">
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
              <div class="col-sm-8">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" class="form-control text-input-register" id="phonenumber" placeholder="เบอร์โทรศัพท์">
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-sm-8">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-user-circle" aria-hidden="true"></i></label>
                  </div>
                    <select class="custom-select text-input-register">
                      <option value="" disabled selected>เพศ</option>
                      <option value="">ชาย</option>
                      <option value="">หญิง</option>
                      <option value="">อื่นๆ</option>
                    </select>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-sm-8">
                <div class="custom-file">
                  <input type="file" class="custom-file-input"></label>
                  <label class="custom-file-label">Choose file...</label>
                </div>
              </div>
            </div>
            <div class="row justify-content-center top-regis">
              <div class="col-sm-5">
                <a href="" class="btn btn-default btn-text btn-size-regis">Register</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>

@endsection

@section('script')
  <script src="{{asset('js/RegisterController/RegisterJs.js')}}"></script>
  <script>
    $(function () {
      var em = $('#employerForm');
      var job = $('#jobseekerForm');

      $('#em').click(function () {
        em.slideDown(500);
        em.css('display', 'block');
        job.css('display', 'none');
      });

      $('#job').click(function () {
        job.slideDown(500);
        em.css('display', 'none');
        job.css('display', 'show');
      });
    });
  </script>
@endsection
