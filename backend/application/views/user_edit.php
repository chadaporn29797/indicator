<section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <br>
                <br>
                <br>
                <h3>จัดการผู้ใช้งาน</h3>
        <p> จัดการข้อมูลผู้ใช้งาน เพิ่ม ลบ แก้ไข และกำหนดสิทธิ์การใช้งานของผู้ใช้</p>
                  
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
        <h2>แก้ไขผู้ใช้งาน</h2>
        <!-- <p></p> -->
      </div>

      <div class="row">
        <div class="col-lg-3 mt-5 mt-lg-0 d-flex align-items-stretch">
        </div>

        <div class="col-lg-6 d-flex align-items-stretch">
          <div class="info">
            <form action="<?= site_url('main/edit_user_todb') ?>" method="post" role="form" >

              <div class="address">
                <i class="bi bi-card-text"></i>
                <h4>ชื่อ-สกุล:</h4>
						    <input id='userID' name='userID' type='hidden' value='<?php echo $user[0]->userID; ?>'>
                <p><input id='name' name='name' type="text" value='<?php echo $user[0]->name; ?>' class="form-control" required></p>
              </div>

              <div class="email">
                <i class="bi bi-file-person"></i>
                <h4>Username:</h4>
                <p><input id='username' name='username' type="text" value='<?php echo $user[0]->username; ?>' class="form-control" required></p>
              </div>

              <div class="phone">
                <i class="bi bi-gear-fill"></i>
                <h4>หน้าที่:</h4>
                <p>
                  <?php if( $user[0]->role == 1 ){ ?>
                  <select class="form-control" id='role' name='role'>
    							<option value="1" selected>เจ้าหน้าที่</option>
    							<option value="0">ผู้ดูแลระบบ</option>
    						</select>
                <?php } else if( $user[0]->role == 0 ){ ?>
                  <select class="form-control" id='role' name='role'>
    							<option value="1">เจ้าหน้าที่</option>
    							<option value="0" selected>ผู้ดูแลระบบ</option>
    						</select>
                <?php } ?>
              </p>
              </div>

              <br>

              <div class="log">
                <h4><input type="submit" value="บันทึก" class="btn btn-block btn-success"></h4>
              </div>

            </form>
          </div>
        </div>

        <div class="col-lg-3 mt-5 mt-lg-0 d-flex align-items-stretch">
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
