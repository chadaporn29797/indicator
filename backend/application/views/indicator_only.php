<section id="testimonials" class="testimonials">
  <div class="container position-relative">

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <br>
            <br>
            <br>
            <h3>จัดการข้อมูลตัวชี้วัด</h3>
            <p> กรอกข้อมูลตัวชี้วัดที่ได้รับมอบหมาย</p>

          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->

<main id="main">

  <!-- ======= Services Section ======= -->
  <section id="menu" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>ตัวชี้วัด</h2>
        <!-- <p><a href="<?= site_url('main/user_add') ?>" class="btn btn-success" style="float:right;"><i class="bx bx-plus"></i> เพิ่ม</a> -->
        </p>
      </div>
      <!-- <div class='row'>
        <div class="col-lg-3">
          <div class="input-group mb-3">
            <div class="input-group-prepend ">
              <label class="input-group-text form-control" for="inputGroupSelect01">หมวดหมู่</label>
            </div>
            <select class="custom-select form-control" id='group_id' name='group_id'>
              <option value="1">7.1 - ผลลัพธ์ด้านการเรียนรู้ของผู้เรียนและบริการที่ตอบสนองลูกค้ากลุ่มอื่น และด้านกระบวนการ </option>
              <option value="2">7.2 - ผลลัพธ์ด้านลูกค้า</option>
              <option value="3">7.3 - ผลลัพธ์ด้านบุคลากร</option>
              <option value="4">7.4 - ผลลัพธ์ด้านการนำองค์กรและการกำกับดูแลองค์กร </option>
              <option value="5">7.5 - ผลลัพธ์ด้านงบประมาณ การเงิน ตลาด และกลยุทธ์</option>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-5">
          <p><a href="<?= site_url('main/user_add') ?>" class="btn btn-success" style="float:right;"><i class="bx bx-plus"></i> เพิ่ม</a></p>
        </div>
      </div> -->
      <table class="table table-hover table table-bordered" style=' width:100%;' id='data'>
        <thead>
          <tr class="table-primary" align='center'>
            <th scope="col" style=' width:5%;'>ลำดับ</th>
            <th scope="col" align='center' style=' width:60%;'>ตัววัด</th>
            <th scope="col" class="table-active" align='center' style=' width:10%;'>แก้ไข</th>

          </tr>
        </thead>
        <tbody class="table-light">

          <tr>
            <th scope="row">7.1-1</th>
            <td>ร้อยละของบัณฑิตที่ได้งานทำหรือประกอบอาชีพอิสระภายใน 1 ปี หลังสำเร็จการศึกษา </td>
            <td>
              <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
            </td>
          </tr>
          <tr>
            <th scope="row">7.1-2</th>
            <td>ระดับความพึงพอใจผู้ใช้บัณฑิตตามกรอบมาตรฐานคุณวุฒิ 5 ด้าน ระดับป.ตรี</td>
            <td>
              <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
            </td>
          </tr>
          <tr>
            <th scope="row">7.1-3</th>
            <td>ระดับความพึงพอใจผู้ใช้บัณฑิตตามกรอบมาตรฐานคุณวุฒิ 5 ด้านระดับบัณฑิตศึกษา </td>
            <td>
              <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
            </td>
          </tr>
          <tr>
            <th scope="row">7.1-4</th>
            <td>ร้อยละของบัณฑิตที่เป็นผู้ประกอบการภายใน 1 ปี หลังสำเร็จการศึกษา</td>
            <td>
              <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
            </td>
          </tr>
          <tr>
            <th scope="row">7.1-5</th>
            <td>ร้อยละของบัณฑิตในระดับป.ตรี ที่ได้งานทำในองค์กรระดับนานาชาติ/ ข้ามชาติ/ ชั้นนำ</td>
            <td>
              <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
            </td>
          </tr>
        </tbody>
      </table>

    </div>

</main><!-- End #main -->



<script>
  function get_edit(vid) {

    window.location = '<?php echo base_url(); ?>index.php/main/user_edit/' + vid
  }

  function del_user(vid) {
    $.ajax({
      type: 'POST',
      url: '<?php echo base_url(); ?>index.php/main/del_user_db/' + vid,
      cache: false,
      success: function(data) {
        if (data) {
          // alert("ลบข้อมูลเรียบร้อย");
        }
      }
    });
    alert("ลบข้อมูลเรียบร้อย");
    location.reload();

  }

  $(document).ready(function() {
    $('#data').after('<div id="nav"></div>');
    var rowsShown = 20;
    var rowsTotal = $('#data tbody tr').length;
    var numPages = rowsTotal / rowsShown;
    for (i = 0; i < numPages; i++) {
      var pageNum = i + 1;
      $('#nav').append('<a href="#" rel="' + i + '">' + pageNum + '</a> ');
    }
    $('#data tbody tr').hide();
    $('#data tbody tr').slice(0, rowsShown).show();
    $('#data thead tr').show();
    $('#nav a:first').addClass('active');
    $('#nav a').bind('click', function() {

      $('#nav a').removeClass('active');
      $(this).addClass('active');
      var currPage = $(this).attr('rel');
      var startItem = currPage * rowsShown;
      var endItem = startItem + rowsShown;
      $('#data tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).
      css('display', 'table-row').animate({
        opacity: 1
      }, 300);
    });
  });
</script>

<style>
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

  .icon2 {
    font-size: 12px;
    color: gray;
    background-color: white;
    /* padding: 8px 16px; */

  }

  .icon2:hover {
    color: white;
    background-color: #4ab6d4;
  }

  .icon1 {
    font-size: 12px;
    color: gray;
    background-color: white;
  }

  .icon1:hover {
    color: white;
    background-color: #66CC66;
  }

  .icon4 {
    font-size: 12px;
    color: gray;
    background-color: white;
  }

  .icon4:hover {
    color: white;
    background-color: #FFCC66;
  }
</style>