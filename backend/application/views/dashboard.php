<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>ระบบจัดเก็บข้อมูลตัวชี้วัด</h1>
        <h2>คณะวิทยาศาสตร์ มหาวิทยาลัยอุบลราชธานี</h2>
        <div><a href="#services" class="btn-get-started scrollto">Get Started</a></div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="<?= base_url('Butterfly') ?>/assets/img/hero-img.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section>

<main id="main">

  <!-- ======= addmin Section ======= -->
  <?php if ($role == 0) { ?>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
      <div class="container">

        <div class="section-title">
          <h2>Menu</h2>
          <p>เมนูสำหรับผู้ดูแลระบบ</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-file-plus-fill" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="<?= site_url('main/add_indicator') ?>">เพิ่มข้อมูลตัวชี้วัด</a></h4>
              <p class="description">เพิ่มข้อมูลตัวชี้วัด<br><br><br></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gear-fill" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="<?= site_url('main/indicator_all/1') ?>">จัดการข้อมูลตัวชี้วัด</a></h4>
              <p class="description">จัดการข้อมูลตัวชี้วัด ลบหรือแก้ไขข้อมูลตัวชี้วัด<br><br><br></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-search" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="<?= site_url('main/indicator_all_search') ?>">รายการข้อมูลตัวชี้วัด</a></h4>
              <p class="description">ค้นหาข้อมูลตัวชี้วัดได้ตามเงื่อนไขต่าง ๆ <br><br><br></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-calendar-fill" style="color: #41cf2e;"></i></div>
              <h4 class="title">กำหนดปีเป้าตัวชี้วัดปัจจุบัน</h4>
              <p class="description">กำหนดปีเป้าตัวชี้วัดปัจจุบัน <?php $year_target_current = $year_target_current[0]->indicator_year_target_current; ?></p>
              <p class="description">
              <div class="row ">
                <div class="form-group col-md-2">
                </div>
                <div class="form-group col-md-6">
                  <select class="form-control" name="indicator_year_target_current" onchange='year_select(this.value);'>
                    <?php
                    for ($i = date("Y")+543; $i >= 2564; $i--) {
                      echo "<option " . (($i == $year_target_current) ? "selected" : "") . " value='" . $i . "' >" . $i . "</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group col-md-6">

                </div>
              </div>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-add" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="<?= site_url('main/add_user_indicator') ?>">กำหนดผู้กรอกข้อมูลตัวชี้วัดประจำปี</a></h4>
              <p class="description">กำหนดผู้กรอกข้อมูลตัวชี้วัดประจำปี<br><br><br></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-fill-gear" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="<?= site_url('main/user_all') ?>">จัดการผู้ใช้งาน</a></h4>
              <p class="description">จัดการข้อมูลผู้ใช้งาน เพิ่ม ลบ แก้ไข และกำหนดสิทธิ์การใช้งานของผู้ใช้ <br><br></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
  <?php } ?>


  <!-- ======= เจ้าหน้าที่ Section ======= -->
  <?php if ($role == 1) { ?>
    <section id="menu" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>เมนูสำหรับเจ้าหน้าที่</p>
        </div>

        <div class="row">
          <!-- <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-file-plus-fill" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="<?= site_url('main/add_indicator') ?>">เพิ่มข้อมูลตัวชี้วัด</a></h4>
              <p class="description">เพิ่มข้อมูลตัวชี้วัด<br><br><br></p>
            </div>
          </div> -->
          <div class="col-lg-2 col-md-6">
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gear-fill" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="<?= site_url('main/indicator_only') ?>">จัดการข้อมูลตัวชี้วัด</a></h4>
              <p class="description">กรอกข้อมูลตัวชี้วัดที่ได้รับมอบหมาย<br><br><br></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-search" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="<?= site_url('main/indicator_all_search') ?>">รายการข้อมูลตัวชี้วัด</a></h4>
              <p class="description">ค้นหาข้อมูลตัวชี้วัดได้ตามเงื่อนไขต่าง ๆ <br><br><br></p>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
          </div>
        </div>

      </div>
    </section><!-- End ======= เจ้าหน้าที่ Section ======= -->
  <?php } ?>


</main><!-- End #main -->
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script src="https://unpkg.com/file-saver@1.3.3/FileSaver.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
  function year_select(vval) {
    $.post('<?= site_url('main/edit_indicator_year_target_current') ?>', {
      "indicator_year_target_current": vval,
    }, function(data) {
      if (data.success == true) {}
    }, "json");

    setTimeout(() => {
            document.location.reload();
          }, 500);
  }

  
</script>


<style>
  .icon1 {
    font-size: 12px;
    color: white;
    background-color: #009900;
  }

  .icon1:hover {
    color: white;
    background-color: #009900;
  }

  .icon2 {
    font-size: 12px;
    color: white;
    background-color: #FF9900;
  }

  .icon2:hover {
    color: white;
    background-color: #FF9900;
  }

  .icon3 {
    font-size: 12px;
    color: white;
    background-color: #CC3333;
  }

  .icon3:hover {
    color: white;
    background-color: #CC3333;
  }

  .icon5 {
    font-size: 12px;
    color: gray;
    background-color: white;
  }

  .icon5:hover {
    color: white;
    background-color: #4ab6d4;
  }
</style>