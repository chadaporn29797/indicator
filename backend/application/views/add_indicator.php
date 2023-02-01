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
            <h3>เพิ่มข้อมูลตัวชี้วัด</h3>
            <p> เพิ่มข้อมูลตัวชี้วัด</p>

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
        <h2>กรอกข้อมูลตัวชี้วัด</h2>
        <!-- <p></p> -->
      </div>

      <div class="container info">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <form method='post' enctype='multipart/form-data' action='<?php echo base_url(); ?>index.php/Main/student_add_company_todb'>
              <div class="title_block title_l1" style="margin-top: 20px"> <b style="color:#37517e">ข้อมูลตัวชี้วัด ปี 2566</b></div>
              <hr style='width:100%'>

              <div class="row ">
                <div class="form-group col-md-6">
                  <label for="inputPassword4">หมวดหมู่ : </label>
                  <select class="form-control" name="province" required>
                    <option value="" selected>--------- เลือกหมวดหมู่ ---------</option>
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
                  <input class="form-control" id="indicator_title" name="indicator_title" type="text" required />
                  <input class="form-control" id="uid" name="uid" type="hidden" value="<?php echo $userID ?>" />
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group col-md-3">
                  <label for="inputEmail4">เลขตัวชี้วัด </label>
                  <input class="form-control" id="indicator_title" name="indicator_title" type="text" required />
                  <input class="form-control" id="uid" name="uid" type="hidden" value="<?php echo $userID ?>" />
                </div>
                <div class="form-group col-md-3">
                  <label for="inputEmail4">เลขเป้าตัวชี้วัด </label>
                  <input class="form-control" id="indicator_title" name="indicator_title" type="text" required />
                  <input class="form-control" id="uid" name="uid" type="hidden" value="<?php echo $userID ?>" />
                </div>
              </div>
              <br>
              <!-- <div class="title_block title_l1" style="margin-top: 20px"> <b style="color:#37517e">ตอนที่ 2 : ปีตัวชี้วัด</b></div>
              <hr style='width:100%'>
              
              <div class="row">
                <div class="form-group col-md-1">
                  <label for="inputEmail4">2561  </label>
                  <input class="form-control" id="indicator_year_NO" name="indicator_year_NO" type="text" />
                </div>
                <div class="form-group col-md-1">
                  <label for="inputEmail4">2562  </label>
                  <input class="form-control" id="indicator_year_NO" name="indicator_year_NO" type="text" />
                </div>
                <div class="form-group col-md-1">
                  <label for="inputEmail4">2563  </label>
                  <input class="form-control" id="indicator_year_NO" name="indicator_year_NO" type="text" />
                </div>
                <div class="form-group col-md-1">
                  <label for="inputEmail4">2564  </label>
                  <input class="form-control" id="indicator_year_NO" name="indicator_year_NO" type="text" />
                </div>
                
                <div class="form-group col-md-1">
                  <button class="button5" type="button"><i class="bi bi-plus-square-fill"></i></button>
                </div>
                
              </div>
              <br>

              <div class="title_block title_l1" style="margin-top: 20px"> <b style="color:#37517e">ตอนที่ 3 : เป้าตัวชี้วัด</b></div>
              <hr style='width:100%'>
              <div class="row">
                <div class="form-group col-md-2">
                  <label for="inputEmail4">2564</label>
                  <input class="form-control" id="Indicator_year_ target _NO" name="Indicator_year_ target _NO" type="text" />
                </div>
              </div> -->


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