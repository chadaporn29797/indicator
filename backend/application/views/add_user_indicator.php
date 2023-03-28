<section id="testimonials" class="testimonials">
  <div class="container position-relative">

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <br>
            <br>
            <br>
            <br>
            <h3>กำหนดผู้กรอกข้อมูลตัวชี้วัดประจำปี</h3>
            <p> กำหนดผู้กรอกข้อมูลตัวชี้วัดประจำปี</p>

          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->

<main id="main">

  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>กำหนดผู้กรอกข้อมูลตัวชี้วัดประจำปี</h2>
        <!-- <p></p> -->
      </div>

      <div class="container ">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <form method='post' enctype='multipart/form-data' action='<?php echo base_url(); ?>index.php/Main/student_add_company_todb'>
              <div class="title_block title_l1" style="margin-top: 20px"> <b style="color:#37517e">ตอนที่ 1 : เลือกตัวชี้วัด</b></div>
              <hr style='width:100%'>

              <div class="row ">
                <div class="form-group">
                  <label>ตัวชี้วัด : </label>
                  <div class="input-group">
                    <input type="text" id="signeree" name="signeree" class="form-control rounded" required disabled />
                    <button type="button" id="sh" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ค้นหาตัวชี้วัด</button>
                  </div>
                </div>
              </div>

              <br>

              <div class="row">
                <table class="table table-hover table table-bordered" style=' width:100%;' id="myshow">
                  <thead>
                    <tr class="table-primary" align='center'>
                      <th scope="col" class="table-secondary" align='center' style=' width:5%;'>#</th>
                      <th scope="col" style=' width:10%;'>หมวดหมู่-ลำดับ</th>
                      <th scope="col" style=' width:60%;'>ตัววัด</th>


                    </tr>
                  </thead>
                  <tbody class="table-light" id="">




                  </tbody>
                </table>
              </div>
              <br>
              <div class="title_block title_l1" style="margin-top: 20px"> <b style="color:#37517e">ตอนที่ 2 : เลือกผู้กรอกข้อมูลตัวชี้วัด</b></div>
              <hr style='width:100%'>

              <div class="row ">
                <div class="form-group">
                  <label>ชื่อ-นามสกุล : </label>
                  <div class="input-group">
                    <input type="text" id="name_indicator" name="name_indicator" class="form-control rounded" required disabled />
                    <input type="hidden" id="uid" name="uid" class="form-control rounded" required disabled />
                    <button type="button"  class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">ค้นหาบุคลากร</button>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <button type="button" id="go_save" class="btn btn-success">บันทึกข้อมูล</button>
            </form>

          </div>
        </div>
      </div>

    </div>

    <!-- Modal -->
    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ค้นหาตัวชี้วัด</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">


            <div class="row ">
              <div class="form-group col-md-8">
                <label for="inputPassword4">หมวดหมู่ : </label>
                <select class="form-control" name="cid" id="cid">
                  <option value="1">7.1 - ผลลัพธ์ด้านการเรียนรู้ของผู้เรียนและบริการที่ตอบสนองลูกค้ากลุ่มอื่น และด้านกระบวนการ </option>
                  <option value="2">7.2 - ผลลัพธ์ด้านลูกค้า</option>
                  <option value="3">7.3 - ผลลัพธ์ด้านบุคลากร</option>
                  <option value="4">7.4 - ผลลัพธ์ด้านการนำองค์กรและการกำกับดูแลองค์กร </option>
                  <option value="5">7.5 - ผลลัพธ์ด้านงบประมาณ การเงิน ตลาด และกลยุทธ์</option>
                </select>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">ชื่อตัววัด : </label>
                <div class="input-group">
                  <input id='indicator_title' name='indicator_title' type="text" class="form-control">
                  <button type="button" id='konha' class="btn btn-success">ค้นหา</button>
                </div>
              </div>
            </div>
            <br>
            <div class="row " align='center'>
              <table class="table table-hover table table-bordered" style=' width:90%;' align='center'>
                <thead>
                  <tr class="table-primary" align='center'>
                    <th scope="col" style=' width:10%;'>หมวดหมู่-ลำดับ</th>
                    <th scope="col">ตัวชี้วัด</th>
                  </tr>
                </thead>
                <tbody class="table-light" id='show'>

                  <tr>
                    <td align='center' colspan='3'><b>[==== ไม่พบข้อมูล กรุณาค้นหา ====]</b></td>
                  </tr>



                </tbody>
              </table>
            </div>
            <div id='head'></div>
            <!-- <ul id='show'></ul> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ค้นหาบุคลากร</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <br>
            <div class="row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">ชื่อบุคลากร : </label>
                <div class="input-group">
                  <input id='name_in' name='name_in' type="text" class="form-control">
                  <button type="button" id='konha_user' class="btn btn-success">ค้นหา</button>
                </div>
              </div>
            </div>
            <br>
            <div class="row " align='center'>
              <table class="table table-hover table table-bordered" style=' width:90%;' align='center'>
                <thead>
                  <tr class="table-primary" align='center'>
                    <th scope="col" style=' width:10%;'>#</th>
                    <th scope="col">ชื่อ-นามสกุล</th>
                  </tr>
                </thead>
                <tbody class="table-light" id='show_user'>
                  <tr>
                    <td align='center' colspan='3'><b>[==== ไม่พบข้อมูล กรุณาค้นหา ====]</b></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div id='head'></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<script>
  $('#go_save').on("click", function(e) {
    e.preventDefault();


    var name_in = $("#name_indicator").val().length;
    if ($('#myshow tr').length == 1) {
      alert('กรุณาเลือกตัวชี้วัด');
    } else if (name_in == 0) {
      alert('กรุณาเลือกผู้กรอกข้อมูลตัวชี้วัด');
    } else {

          var table = document.getElementById("myshow")
          for (var i = 1; i < table.rows.length; i++) {

            $.post('<?= site_url('main/add_user_indicator_todb') ?>', {
              "indicator_id": table.rows[i].cells[0].innerHTML,
              "name": $("#name_indicator").val(),
              "uid": $("#uid").val(),
            }, function(data) {
              if (data.success == true) {
                location.reload();
              }
            }, "json");
          }
          alert('บันทึกข้อมูลเรียบร้อย');
          location.reload();

    }
  });

  $("#konha").click(function(e) {
    e.preventDefault();
    var url = "<?php echo base_url(); ?>index.php/Api/findindicator/" + $("#cid").val() + "/" + $("#indicator_title").val();

    $.get(url, function(data) {
      console.log(data);
      $("#show").html(" ");
      $("#show").html(' <table cellspacing="0"  style="border-width:0px;width:100%;border-collapse:collapse;"> <tbody> ');

      $.each(data, function(i, item) {

        $("#show").append('<tr id="sh' + i + '"><td id="empty">' + data[i].number_cat + ' </td><td align="left" style="width:100%;"><div style="font-weight: bold"><input type="hidden"  value="3445"><a href="#" style="color:Blue;" data-bs-dismiss="modal"> &nbsp;' + " " + data[i].indicator_title + '</a> </div> </td> </tr>');

        $("#sh" + i).click(function(e) {
          e.preventDefault();
          $("#myshow").append('<tr id="msh' + i + '"><td hidden>' + data[i].indicatorID + '</td><td ><button type="button" class="btnDelete btn icon3" ><i class="bx bx-trash"></i></button></td><td>' + data[i].number_cat + ' </td><td align="left" style="width:100%;"><div style="font-weight: bold"><input type="hidden"  value="3445"><a href="#" style="color:Blue;" data-bs-dismiss="modal"> &nbsp;' + " " + data[i].indicator_title + '</a> </div> </td> </tr>');
          $("#indicator_title").val("");
          $("#show").html(" ");

        });


      });


      $("#show").append('</tbody> </table> ');


    }, "json");
  });

  $("#konha_user").click(function(e) {
    e.preventDefault();
    var url = "<?php echo base_url(); ?>index.php/Api/findinUser/" + $("#name_in").val();

    $.get(url, function(data) {
      console.log(data);
      $("#show_user").html(" ");
      $("#show_user").html(' <table cellspacing="0"  style="border-width:0px;width:100%;border-collapse:collapse;"> <tbody> ');

      $.each(data, function(i, item) {

        $("#show_user").append('<tr id="sh' + i + '"><td>-</td><td align="left" style="width:100%;"><div style="font-weight: bold"><input type="hidden"  value="3445"><a href="#" style="color:Blue;" data-bs-dismiss="modal"> &nbsp;' + " " + data[i].name + '</a> </div> </td> </tr>');

        $("#sh" + i).click(function(e) {
          e.preventDefault();
          $("#name_indicator").val(data[i].name);
          $("#uid").val(data[i].userID);
          $("#name_in").val("");
          $("#show_user").html(" ");
        });
      });
      $("#show_user").append('</tbody> </table> ');

    }, "json");
  });

  $("#myshow").on('click', '.btnDelete', function() {
    $(this).closest('tr').remove();
  });
</script>

<style>
  label {
    color: #495057;
    font-weight: bold;
    font-size: 14px;
  }

  .button5 {
    background-color: #ebf7fc;
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 50%;
    cursor: pointer;
  }

  .button5:hover {
    background-color: #f1f1f1;
  }

  .icon3 {
    font-size: 12px;
    color: gray;
    background-color: white;
    /* padding: 8px 16px; */

  }

  .icon3:hover {
    color: white;
    background-color: red;
  }
</style>