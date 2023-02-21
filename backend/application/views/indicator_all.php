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
            <p> จัดการข้อมูลตัวชี้วัด ลบหรือแก้ไขข้อมูลตัวชี้วัด</p>

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
      <div class='row'>

        <div class="col-lg-3">
          <div class="input-group mb-3">
            <div class="input-group-prepend ">
              <label class="input-group-text form-control" for="inputGroupSelect01">หมวดหมู่</label>
            </div>
            <?php if ($cat == 1) { ?>
              <select class="custom-select form-control" id='cat' name='cat' onchange='cat_select(this.value);'>
                <option value="1" selected>7.1 - ผลลัพธ์ด้านการเรียนรู้ของผู้เรียนและบริการที่ตอบสนองลูกค้ากลุ่มอื่น และด้านกระบวนการ </option>
                <option value="2">7.2 - ผลลัพธ์ด้านลูกค้า</option>
                <option value="3">7.3 - ผลลัพธ์ด้านบุคลากร</option>
                <option value="4">7.4 - ผลลัพธ์ด้านการนำองค์กรและการกำกับดูแลองค์กร </option>
                <option value="5">7.5 - ผลลัพธ์ด้านงบประมาณ การเงิน ตลาด และกลยุทธ์</option>
              </select>
            <?php } else if ($cat == 2) { ?>
              <select class="custom-select form-control" id='cat' name='cat' onchange='cat_select(this.value);'>
                <option value="1">7.1 - ผลลัพธ์ด้านการเรียนรู้ของผู้เรียนและบริการที่ตอบสนองลูกค้ากลุ่มอื่น และด้านกระบวนการ </option>
                <option value="2" selected>7.2 - ผลลัพธ์ด้านลูกค้า</option>
                <option value="3">7.3 - ผลลัพธ์ด้านบุคลากร</option>
                <option value="4">7.4 - ผลลัพธ์ด้านการนำองค์กรและการกำกับดูแลองค์กร </option>
                <option value="5">7.5 - ผลลัพธ์ด้านงบประมาณ การเงิน ตลาด และกลยุทธ์</option>
              </select>
            <?php } else if ($cat == 3) { ?>
              <select class="custom-select form-control" id='cat' name='cat' onchange='cat_select(this.value);'>
                <option value="1">7.1 - ผลลัพธ์ด้านการเรียนรู้ของผู้เรียนและบริการที่ตอบสนองลูกค้ากลุ่มอื่น และด้านกระบวนการ </option>
                <option value="2">7.2 - ผลลัพธ์ด้านลูกค้า</option>
                <option value="3" selected>7.3 - ผลลัพธ์ด้านบุคลากร</option>
                <option value="4">7.4 - ผลลัพธ์ด้านการนำองค์กรและการกำกับดูแลองค์กร </option>
                <option value="5">7.5 - ผลลัพธ์ด้านงบประมาณ การเงิน ตลาด และกลยุทธ์</option>
              </select>
            <?php } else if ($cat == 4) { ?>
              <select class="custom-select form-control" id='cat' name='cat' onchange='cat_select(this.value);'>
                <option value="1">7.1 - ผลลัพธ์ด้านการเรียนรู้ของผู้เรียนและบริการที่ตอบสนองลูกค้ากลุ่มอื่น และด้านกระบวนการ </option>
                <option value="2">7.2 - ผลลัพธ์ด้านลูกค้า</option>
                <option value="3">7.3 - ผลลัพธ์ด้านบุคลากร</option>
                <option value="4" selected>7.4 - ผลลัพธ์ด้านการนำองค์กรและการกำกับดูแลองค์กร </option>
                <option value="5">7.5 - ผลลัพธ์ด้านงบประมาณ การเงิน ตลาด และกลยุทธ์</option>
              </select>
            <?php } else if ($cat == 5) { ?>
              <select class="custom-select form-control" id='cat' name='cat' onchange='cat_select(this.value);'>
                <option value="1">7.1 - ผลลัพธ์ด้านการเรียนรู้ของผู้เรียนและบริการที่ตอบสนองลูกค้ากลุ่มอื่น และด้านกระบวนการ </option>
                <option value="2">7.2 - ผลลัพธ์ด้านลูกค้า</option>
                <option value="3">7.3 - ผลลัพธ์ด้านบุคลากร</option>
                <option value="4">7.4 - ผลลัพธ์ด้านการนำองค์กรและการกำกับดูแลองค์กร </option>
                <option value="5" selected>7.5 - ผลลัพธ์ด้านงบประมาณ การเงิน ตลาด และกลยุทธ์</option>
              </select>
            <?php } ?>

          </div>
        </div>
        <div class="col-lg-4">
          <!-- <button style="float:right;" type="button" class="btn btn-success" onclick='gotoadd()'><i class="fa fa-plus"></i> เพิ่ม</button> -->
        </div>
        <div class="col-lg-5">
          <p><a href="<?= site_url('main/add_indicator') ?>" class="btn btn-success" style="float:right;"><i class="bx bx-plus"></i> เพิ่ม</a>
          </p>
        </div>
      </div>
      <?php
      $year1 = $year;
      $year2 = $year - 1;
      $year3 = $year - 2;
      $year4 = $year - 3;
      ?>
      <table class="table table-hover table table-bordered" style=' width:100%;' id='data'>
        <thead>
          <tr class="table-primary" align='center'>
            <th scope="col" style=' width:5%;'>ลำดับ</th>
            <th scope="col" align='center' style=' width:60%;'>ตัววัด</th>
            <th scope="col" align='center'><?php echo $year - 3; ?></th>
            <th scope="col" align='center'><?php echo $year - 2; ?></th>
            <th scope="col" align='center'><?php echo $year - 1; ?></th>
            <th scope="col" align='center'><?php echo $year; ?></th>
            <th scope="col" class="table-warning" align='center' style=' width:8%;'>เป้า <?php echo $year; ?></th>
            <th scope="col" class="table-active" align='center' style=' width:15%;'> เลื่อน/แก้ไข/ลบ</th>

          </tr>
        </thead>
        <tbody>
          <?php
          $no = 0;
          foreach ($indicator as $row) {
            $idca = $row->indicatorID;
          ?>
            <tr>
              <th scope="row">7.<?php echo $row->cid; ?>-<?php echo $no + 1; ?></th>
              <td><?php echo $row->indicator_title; ?></td>
              <?php
              foreach ($indicator_year as $row) {
                if ($row->indicator_year == $year4 && $row->indicator_id == $idca) {
              ?>
                  <td align='center'><?php echo $row->indicator_year_result; ?></td>
                <?php
                }
              }

              foreach ($indicator_year as $row) {
                if ($row->indicator_year == $year3 && $row->indicator_id == $idca) {
                ?>
                  <td align='center'><?php echo $row->indicator_year_result; ?></td>
                <?php
                }
              }

              foreach ($indicator_year as $row) {
                if ($row->indicator_year == $year2 && $row->indicator_id == $idca) {
                ?>
                  <td align='center'><?php echo $row->indicator_year_result; ?></td>
                <?php
                }
              }
              foreach ($indicator_year as $row) {
                if ($row->indicator_year == $year1 && $row->indicator_id == $idca) {
                ?>
                  <td align='center'><?php echo $row->indicator_year_result; ?></td>
                  <td class="table-warning" align='center'><?php echo $row->indicator_year_target; ?></td>
              <?php }
              }
              ?>
              <td>
                <button type="button" class="btn icon1" onclick='sortup("<?php echo $idca; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='sortdown("<?php echo $idca; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $idca; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del("<?php echo $idca; ?>");'><i class="bx bx-trash"></i></button>
              </td>


            </tr>

          <?php
            $no++;
          }

          if ($no == 0) {
            echo "<tr><td align='center' colspan='8'><b>[==== ไม่พบข้อมูล ====]</b></td></tr>";
          }

          ?>
        </tbody>
      </table>

    </div>

</main><!-- End #main -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
<script>
  
  function get_edit(vid) {

    window.location = '<?php echo base_url(); ?>index.php/main/edit_indicator/' + vid +"#edit"
  }

  function cat_select(vval) {
    window.location = "<?php echo base_url(); ?>index.php/main/indicator_all/" + vval +"/"+ <?php echo $year; ?>;
  }

  function del(vid) {
    $.ajax({
      type: 'POST',
      url: '<?php echo base_url(); ?>index.php/main/hiden_indicator/' + vid,
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
    var rowsShown = 100;
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