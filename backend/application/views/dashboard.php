
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
              <h4 class="title"><a href="<?= site_url('main/indicator_all') ?>">จัดการข้อมูลตัวชี้วัด</a></h4>
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
              <p class="description">กำหนดปีเป้าตัวชี้วัดปัจจุบัน</p>
              <p class="description"><div class="row ">
              <div class="form-group col-md-2">
                  
                  </div>
                <div class="form-group col-md-6">
                  <select class="form-control" name="train_year" required>
                    <?php
                    for ($i = date("Y"); $i >= 2018; $i--) {
                      echo "<option value='" . ($i + 543) . "'> " . ($i + 543) . "</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  
                </div>
              </div></p>
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
    window.location = "<?php echo base_url(); ?>index.php/main/dashboard2/0/0/" + vval + '#about';
  }

  function department_select(vval) {
    y = <?php echo $year; ?>;
    window.location = "<?php echo base_url(); ?>index.php/main/dashboard2/" + vval +'/0/'+ y+ '#about';
  }

  function major_select(vval) {
    y = <?php echo $year; ?>;
    window.location = "<?php echo base_url(); ?>index.php/main/dashboard2/0/" + vval +'/'+ y+ '#about';
  }

  function get_detail_student(vid) {
    window.location = '<?php echo base_url(); ?>index.php/main/student_profile/' + vid;
  }


  function ExcelReport() //function สำหรับสร้าง ไฟล์ excel จากตาราง
  {
    var sheet_name = "ข้อมูลการฝึกงาน-สหกิจ";
    var elt = document.getElementById('data2');

    /*------สร้างไฟล์ excel------*/
    var wb = XLSX.utils.table_to_book(elt, {
      sheet: sheet_name
    }, );
    XLSX.writeFile(wb, 'report.xlsx');
  }

  it1 = <?php echo count($internship_type1); ?>;
  it2 = <?php echo count($internship_type2); ?>;

  create_chart("chart_pj_comp", [it1, it2],
    ['#36a2eb', '#63ffc6'], ['การฝึกงาน', 'สหกิจศึกษา']);

  function create_chart(vel, vdata, vcolor, vlb) {
    //var ctx = document.getElementById(vel);
    //var ctx = document.getElementById(vel).getContext('2d');
    var ctx = $('#' + vel);
    //var ctx = 'chart1';
    var options = {
      maintainAspectRatio: false,
      onClick: function(event, item) {},
    };
    var data = {
      datasets: [{
        data: vdata,
        backgroundColor: vcolor
      }],

      // These labels appear in the legend and in the tooltips when hovering different arcs
      labels: vlb
    };
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: data,
      options: options
    });
  }


  is1 = <?php echo count($internship_status1); ?>;
  is2 = <?php echo count($internship_status2); ?>;
  is3 = <?php echo count($internship_status3); ?>;

  create_chart2("chart_pj_comp2", [is1, is2, is3],
    ['#FFD700', '#31fc03', '#FE2A7D'], ['กำลังดำเนินการ', 'ฝึกผ่านแล้ว', 'ไม่ผ่านการฝึก']);

  function create_chart2(vel, vdata, vcolor, vlb) {
    //var ctx = document.getElementById(vel);
    //var ctx = document.getElementById(vel).getContext('2d');
    var ctx = $('#' + vel);
    //var ctx = 'chart1';
    var options = {
      maintainAspectRatio: false,
      onClick: function(event, item) {},
    };
    var data = {
      datasets: [{
        data: vdata,
        backgroundColor: vcolor
      }],

      // These labels appear in the legend and in the tooltips when hovering different arcs
      labels: vlb
    };
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: data,
      options: options
    });
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