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
                    <input type="text" id="signeree" name="signeree" class="form-control rounded" required />
                    <button type="button" id="sh" class="btn btn-outline-primary" data-toggle="modal" data-target="#add_panel">เพิ่ม</button>
                  </div>
                </div>
              </div>

              <br>
              <div class="row">
                <table class="table table-hover table table-bordered" style=' width:100%;' id='data'>
                  <thead>
                    <tr class="table-primary" align='center'>
                      <th scope="col" class="table-secondary" align='center' style=' width:5%;'>#</th>
                      <th scope="col" style=' width:10%;'>หมวดหมู่-ลำดับ</th>
                      <th scope="col"  style=' width:60%;'>ตัววัด</th>


                    </tr>
                  </thead>
                  <tbody class="table-light">

                    <tr>
                      <td class="table-secondary" align='center'><button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button></td>
                      <th scope="row">7.1-1</th>
                      <td>ร้อยละของบัณฑิตที่ได้งานทำหรือประกอบอาชีพอิสระภายใน 1 ปี หลังสำเร็จการศึกษา </td>
                    </tr>
                    <tr>
                      <td class="table-secondary" align='center'><button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button></td>
                      <th scope="row">7.1-2</th>
                      <td>ระดับความพึงพอใจผู้ใช้บัณฑิตตามกรอบมาตรฐานคุณวุฒิ 5 ด้าน ระดับป.ตรี</td>
                    </tr>


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
                    <input type="text" id="signeree" name="signeree" class="form-control rounded" required />
                    <button type="button" id="sh" class="btn btn-outline-primary" data-toggle="modal" data-target="#add_panel">เพิ่ม</button>
                  </div>
                </div>
              </div>

              <br>
              <div class="row">
                <table class="table table-hover table table-bordered" style=' width:100%;' id='data'>
                  <thead>
                    <tr class="table-primary" align='center'>
                      <th scope="col" class="table-secondary" align='center' style=' width:5%;'>#</th>
                      <th scope="col" >ชื่อ-นามสกุล</th>
                      <th scope="col" style=' width:10%;'>ตำแหน่ง</th>


                    </tr>
                  </thead>
                  <tbody class="table-light">

                  <tr><td align='center' colspan='3'><b>[==== ยังไม่เพิ่มข้อมูล ====]</b></td></tr>
                    


                  </tbody>
                </table>
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