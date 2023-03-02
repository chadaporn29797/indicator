<section id="testimonials" class="testimonials">
  <div class="container position-relative">

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <br>
            <br>
            <br>
            <h3>ข้อมูลตัวชี้วัด</h3>
            <p>ข้อมูลตัวชี้วัดทั้งหมด</p>

          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->

<main id="main" onload="myFunction()">

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
          <div class="input-group mb-3">
            <div class="input-group-prepend ">
              <label class="input-group-text form-control" for="inputGroupSelect01">ปี</label>
            </div>
            <select class="custom-select form-control" id='year_select' name='year_select' onchange='year_select(this.value);'>
              <?php
              for ($i = date("Y") + 543; $i >= 2564; $i--) {
                echo "<option " . (($i == $year) ? "selected" : "") . " value='" . $i . "' >" . $i . "</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="col-lg-5">
          <p>
            <a style="float:right;" href='#data' id='download_link' onClick='javascript:ExcelReport();''>
						<img src="https://sv1.picz.in.th/images/2021/12/03/6qwCQR.png" alt="6qwCQR.png"  style="width:20px;height:20px;float:right;"></a>
            <br>
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
                  <th scope="col" style=' width:7%;'>ลำดับ</th>
                  <th scope="col" align='center' style=' width:60%;'>ตัววัด</th>
                  <th scope="col" align='center'><?php echo $year - 3; ?></th>
                  <th scope="col" align='center'><?php echo $year - 2; ?></th>
                  <th scope="col" align='center'><?php echo $year - 1; ?></th>
                  <th scope="col" align='center'><?php echo $year; ?></th>
                  <th scope="col" class="table-warning" align='center' style=' width:8%;'>เป้า <?php echo $year; ?></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                foreach ($indicator as $row) {
                  $idca = $row->indicatorID;
                  $is = $row->sortOrder;
                  $uid = $row->uid;
                  $cid = $row->cid;
                ?>
                  <tr name="tr">
                    <th scope="row" >7. <?php echo $row->cid; ?> - <?php echo $no + 1; ?></th>
                    <td title="<?php echo $row->description; ?>"><?php echo $row->indicator_title; ?></td>
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

<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script src="https://unpkg.com/file-saver@1.3.3/FileSaver.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
  function ExcelReport() //function สำหรับสร้าง ไฟล์ excel จากตาราง
  {
    var sheet_name = "ตัวชี้วัด 7.<?php echo $cat; ?>";
    var elt = document.getElementById('data');

    /*------สร้างไฟล์ excel------*/
    var wb = XLSX.utils.table_to_book(elt, {
      sheet: sheet_name
    }, );
    XLSX.writeFile(wb, 'INDICATOR-report.xlsx');
  }

  function cat_select(vval) {
    window.location = "<?php echo base_url(); ?>index.php/main/indicator_all_search/" + vval + "/" + <?php echo $year; ?>;
  }

  function year_select(vval) {
    window.location = "<?php echo base_url(); ?>index.php/main/indicator_all_search/" + <?php echo $cat; ?> + "/" + vval;
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