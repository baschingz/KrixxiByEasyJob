@extends('main')

@section('body')
<div class="cover-image">
  <br>
  <div class="container form-border" id="requirementEmployee" data-parent="#accordion">
    <div class="row">
      <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2 col-lg-2"></div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <br>
        <div>

          <h2>Requirement</h2>
          <br>
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="อายุ" autofocus>
            </div>
            <div class="col">
              <input list="type_work" class="form-control" placeholder="เพศ" />
              <datalist id="type_work">
                <option>ชาย</option>
                <option>หญิง</option>
                <option>ชายและหญิง</option>
              </datalist>
            </div>
            <div class="col">
              <input list="type_work" class="form-control" placeholder="ประเภทงาน" />
              <datalist id="type_work">
                <option>แม่บ้าน</option>
                <option>หญิง</option>
                <option>ชายและหญิง</option>
              </datalist>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="บาท/ชั่วโมง">
            </div>
          </div>
          <br>

          <label for="exampleInput">วันและเวลาทำงาน (เริ่ม-เลิก)</label>
          <div class="form-row" id="field-parent">
            <div class="col">
              <select class="form-control">
                <option>อาทิตย์</option>
                <option>จันทร์</option>
                <option>อังคาร</option>
                <option>พุธ</option>
                <option>พฤหัสบดี</option>
                <option>ศุกร์</option>
                <option>เสาร์</option>
              </select>
            </div>
            <div class="col">
              <input type="time" class="form-control" name="starttime[]">
            </div>
            -
            <div class="col">
              <input type="time" class="form-control" name="endtime[]">
            </div>
            <div class="input-group-btn">
              &nbsp;<button class="btn btn-success" id="add-more" type="button"><i class="fa fa-plus"></i> </button>
            </div>
          </div>

          <div id="field-children">
          </div>
          <br>
          <br>

        </div>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">
  function delbtn(e) {

    var deletebtn = document.getElementById(e.id)
    deletebtn.remove()
  }

  $(document).ready(function () {

    var count = 1
    $("#add-more").click(function () {
      // var html = $("#field").clone();
      $("#field-children").append('<div class="form-row" id="field_' + count +
        '"><div class="col"><select class="form-control"><option>อาทิตย์</option><option>จันทร์</option><option>อังคาร</option><option>พุธ</option><option>พฤหัสบดี</option><option>ศุกร์</option><option>เสาร์</option></select></div><div class="col"><input type="time" class="form-control" name="starttime[]"></div> - <div class="col"><input type="time" class="form-control" name="endtime[]"></div><div class="input-group-btn">&nbsp;<button class="btn btn-danger" id="delbtn" onclick="delbtn(field_' +
        count + ')" type="button"><i class="fa fa-minus"></i> </button> </div></div>'
      )
      count += 1
    })

  });
</script>


@endsection

@section('script')

@endsection