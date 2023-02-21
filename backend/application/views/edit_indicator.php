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
            <h3>แก้ไขข้อมูลตัวชี้วัด</h3>
            <p> แก้ไขข้อมูลตัวชี้วัด</p>

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
        <h2 id="edit">แก้ไขข้อมูลตัวชี้วัด</h2>
        <!-- <p></p> -->
      </div>

      <div class="container info">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <form method='post' enctype='multipart/form-data' action='<?php echo base_url(); ?>index.php/Main/edit_indicator_todb'>
              <div class="title_block title_l1" style="margin-top: 20px"> <b style="color:#37517e">ข้อมูลตัวชี้วัด ปี <?php echo $year_target_current[0]->indicator_year_target_current; ?></b></div>
              <hr style='width:100%'>
              <?php

              $cid = $indicator[0]->cid;
              $year = $year_target_current[0]->indicator_year_target_current;
              $idca = $indicator[0]->indicatorID;

              if ($cid == 1) {
                $cid_title = "7.1 - ผลลัพธ์ด้านการเรียนรู้ของผู้เรียนและบริการที่ตอบสนองลูกค้ากลุ่มอื่น และด้านกระบวนการ";
              } else if ($cid == 2) {
                $cid_title = "7.2 - ผลลัพธ์ด้านลูกค้า";
              } else if ($cid == 3) {
                $cid_title = "7.3 - ผลลัพธ์ด้านบุคลากร";
              } else if ($cid == 4) {
                $cid_title = "7.4 - ผลลัพธ์ด้านการนำองค์กรและการกำกับดูแลองค์กร";
              } else if ($cid == 5) {
                $cid_title = "7.5 - ผลลัพธ์ด้านงบประมาณ การเงิน ตลาด และกลยุทธ์";
              }
              $year1 = $year;
              $year2 = $year - 1;
              $year3 = $year - 2;
              $year4 = $year - 3;

              ?>

              <div class="row ">
                <div class="form-group col-md-8">
                  <label for="inputPassword4">หมวดหมู่ : </label>
                  <select class="form-control" name="cid" required disabled>

                    <option value="<?php echo $indicator[0]->cid; ?>" selected><?php echo $cid_title; ?></option>
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
                  <input class="form-control" id="indicator_title" name="indicator_title" type="text" value="<?php echo $indicator[0]->indicator_title; ?>" required />
                  <input class="form-control" id="indicatorID" name="indicatorID" type="hidden" value="<?php echo $indicator[0]->indicatorID; ?>" />
                  <input class="form-control" id="cid" name="cid" type="hidden" value="<?php echo $indicator[0]->cid; ?>" />
                  <input class="form-control" id="year" name="year" type="hidden" value="<?php echo $year1; ?>" />
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">คำอธิบาย : </label>
                  <textarea class="form-control" id="description" name="description" rows="2"><?php echo $indicator[0]->description; ?></textarea>
                </div>
              </div>

              <div class="title_block title_l1" style="margin-top: 20px"> <b style="color:#37517e">ตอนที่ 2 : ปีตัวชี้วัด</b></div>
              <hr style='width:100%'>

              <div class="row">
                <div class="form-group col-md-1">
                  <label for="inputEmail4"><?php echo $year4; ?> </label>
                  <?php
                  foreach ($indicator_year as $row) {
                    if ($row->indicator_year == $year4 && $row->indicator_id == $idca) {
                  ?>
                      <input class="form-control" id="year4" name="year4" type="text" value="<?php echo $row->indicator_year_result; ?>"/>
                      <input class="form-control" id="id_year4" name="id_year4" type="hidden" value="<?php echo $row->indicator_yearID; ?>" />
                  <?php
                    }
                  } ?>
                </div>
                <div class="form-group col-md-1">
                  <label for="inputEmail4"><?php echo $year3; ?> </label>
                  <?php
                  foreach ($indicator_year as $row) {
                    if ($row->indicator_year == $year3 && $row->indicator_id == $idca) {
                  ?>
                      <input class="form-control" id="year3" name="year3" type="text" value="<?php echo $row->indicator_year_result; ?>"/>
                      <input class="form-control" id="id_year3" name="id_year3" type="hidden" value="<?php echo $row->indicator_yearID; ?>" />
                  <?php
                    }
                  } ?>
                </div>
                <div class="form-group col-md-1">
                  <label for="inputEmail4"><?php echo $year2; ?></label>
                  <?php
                  foreach ($indicator_year as $row) {
                    if ($row->indicator_year == $year2 && $row->indicator_id == $idca) {
                  ?>
                      <input class="form-control" id="year2" name="year2" type="text" value="<?php echo $row->indicator_year_result; ?>"/>
                      <input class="form-control" id="id_year2" name="id_year2" type="hidden" value="<?php echo $row->indicator_yearID; ?>" />
                  <?php
                    }
                  } ?>
                </div>
                <div class="form-group col-md-1">
                  <label for="inputEmail4"><?php echo $year1; ?></label>
                  <?php
                  foreach ($indicator_year as $row) {
                    if ($row->indicator_year == $year1 && $row->indicator_id == $idca) {
                  ?>
                      <input class="form-control" id="year1" name="year1" type="text" value="<?php echo $row->indicator_year_result; ?>"/>
                      <input class="form-control" id="id_year1" name="id_year1" type="hidden" value="<?php echo $row->indicator_yearID; ?>" />
                  <?php
                    }
                  } ?>
                </div>
              </div>
              <div class="title_block title_l1" style="margin-top: 20px"> <b style="color:#37517e">ตอนที่ 3 : เป้าตัวชี้วัด</b></div>
              <hr style='width:100%'>
              <div class="row">
                <div class="form-group col-md-2">
                  <label for="inputEmail4"><?php echo $year1; ?></label>
                  <?php
                  foreach ($indicator_year as $row) {
                    if ($row->indicator_year == $year1 && $row->indicator_id == $idca) {
                  ?>
                  <input class="form-control" id="target" name="target" type="text" value="<?php echo $row->indicator_year_target; ?>"/>
                  <?php
                    }
                  } ?>
                </div>
              </div>


              <br>
              <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
            </form>

          </div>
        </div>
      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->


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
</style>