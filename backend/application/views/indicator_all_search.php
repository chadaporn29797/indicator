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
          <div class="input-group mb-3">
            <div class="input-group-prepend ">
              <label class="input-group-text form-control" for="inputGroupSelect01">ปี</label>
            </div>
            <select class="custom-select form-control" id='group_id' name='group_id'>
              <option value="1000" selected>---ทั้งหมด---</option>
              <?php
              for ($i = date("Y") - 2; $i >= 2018; $i--) {
                echo "<option value='" . ($i + 543) . "'>ปี " . ($i + 543) . "</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="input-group mb-3">
            <div class="input-group-prepend ">
              <label class="input-group-text form-control" for="inputGroupSelect01">หน่วยงาน</label>
            </div>
            <select class="custom-select form-control" id='group_id' name='group_id'>
              <option value="1000" selected>---ทั้งหมด---</option>
              
            </select>
          </div>
        </div>
      </div>
      <table class="table table-hover table table-bordered" style=' width:100%;' id='data'>
        <thead>
          <tr class="table-primary" align='center'>
            <th scope="col" style=' width:5%;'>ลำดับ</th>
            <th scope="col" align='center' style=' width:60%;'>ตัววัด</th>
            <th scope="col" align='center'>2561</th>
            <th scope="col" align='center'>2562</th>
            <th scope="col" align='center'>2563</th>
            <th scope="col" align='center'>2564</th>
            <th scope="col" class="table-warning" align='center' style=' width:8%;'>เป้า 2564</th>

          </tr>
        </thead>
        <tbody class="table-light">

          <tr>
            <th scope="row">7.1-1</th>
            <td>ร้อยละของบัณฑิตที่ได้งานทำหรือประกอบอาชีพอิสระภายใน 1 ปี หลังสำเร็จการศึกษา </td>
            <td align='center'>78.1</td>
            <td align='center'>71.43</td>
            <td align='center'>70.29</td>
            <td align='center'>62.34</td>
            <td class="table-warning" align='center'>75</td>
          </tr>
          <tr>
            <th scope="row">7.1-2</th>
            <td>ระดับความพึงพอใจผู้ใช้บัณฑิตตามกรอบมาตรฐานคุณวุฒิ 5 ด้าน ระดับป.ตรี</td>
            <td align='center'>84.8</td>
            <td align='center'>84</td>
            <td align='center'>78.4</td>
            <td align='center'>83.8</td>
            <td class="table-warning" align='center'>85</td>
          </tr>
          <tr>
            <th scope="row">7.1-3</th>
            <td>ระดับความพึงพอใจผู้ใช้บัณฑิตตามกรอบมาตรฐานคุณวุฒิ 5 ด้านระดับบัณฑิตศึกษา </td>
            <td align='center'>84.6</td>
            <td align='center'>96</td>
            <td align='center'>91</td>
            <td align='center'>92.6</td>
            <td class="table-warning" align='center'>95</td>
          </tr>
          <tr>
            <th scope="row">7.1-4</th>
            <td>ร้อยละของบัณฑิตที่เป็นผู้ประกอบการภายใน 1 ปี หลังสำเร็จการศึกษา</td>
            <td class="table-secondary" align='center'></td>
            <td class="table-secondary" align='center'></td>
            <td align='center'>5.72</td>
            <td align='center'>2.86</td>
            <td class="table-warning" align='center'>5</td>
          </tr>
          <tr>
            <th scope="row">7.1-5</th>
            <td>ร้อยละของบัณฑิตในระดับป.ตรี ที่ได้งานทำในองค์กรระดับนานาชาติ/ ข้ามชาติ/ ชั้นนำ</td>
            <td align='center'>15.79</td>
            <td align='center'>12.08</td>
            <td align='center'>13.28</td>
            <td align='center'>17.26</td>
            <td class="table-warning" align='center'>20</td>
          </tr>
          <tr>
            <th scope="row">7.1-6</th>
            <td>ร้อยละบัณฑิตที่ได้รับเงินเดือนเฉลี่ยสูงกว่าฐานเงินเดือนระดับป.ตรีที่รัฐบาลกำหนด</td>
            <td align='center'>21.3</td>
            <td align='center'>24.81</td>
            <td align='center'>21.33</td>
            <td align='center'>25.59</td>
            <td class="table-warning" align='center'>30</td>
          </tr>
          <tr>
            <th scope="row">7.1-7</th>
            <td>สัดส่วนของบทความวิจัยของนักศึกษาที่ตีพิมพ์ในฐานข้อมูล Q1 และ Q2 ต่อผลงานตีพิมพ์ระดับนานาชาติทั้งหมด (รอพี่อ้อยอัพเดต)</td>
            <td align='center'>33.33</td>
            <td align='center'>25</td>
            <td align='center'>66.67</td>
            <td align='center'>85.71</td>
            <td class="table-warning" align='center'>70</td>
          </tr>
          <tr>
            <th scope="row">7.1-8</th>
            <td>ร้อยละของบทความวิจัยของนักศึกษาระดับบัณฑิตศึกษาที่ตีพิมพ์ในระดับนานาชาติต่อจำนวนผู้ที่สำเร็จการศึกษาระดับบัณฑิตศึกษาในแต่ละปีการศึกษา</td>
            <td class="table-secondary" align='center'></td>
            <td class="table-secondary" align='center'></td>
            <td align='center'>34</td>
            <td align='center'>34</td>
            <td class="table-warning" align='center'>35</td>
          </tr>
          <tr>
            <th scope="row">7.1-9</th>
            <td>จำนวนของผู้เข้าอบรมหลักสูตรสำหรับทุกช่วงวัย (non degree)</td>
            <td class="table-secondary" align='center'></td>
            <td class="table-secondary" align='center'></td>
            <td align='center'>60</td>
            <td align='center'>93</td>
            <td class="table-warning" align='center'>90</td>
          </tr>
          <tr>
            <th scope="row">7.1-10</th>
            <td>จำนวนนักศึกษาแลกเปลี่ยนทั้งในและต่างประเทศ</td>
            <td class="table-secondary" align='center'></td>
            <td class="table-secondary" align='center'></td>
            <td align='center'>0</td>
            <td align='center'>0</td>
            <td class="table-warning" align='center'>3</td>
          </tr>
          <tr>
            <th scope="row">7.1-11</th>
            <td>จำนวนนวัตกรรมการเรียนการสอนทางวิทยาศาสตร์หรือการประยุกต์ใช้เทคโนโลยีดิจิทัลในการสอน (นับ LMS)</td>
            <td class="table-secondary" align='center'></td>
            <td class="table-secondary" align='center'></td>
            <td class="table-secondary" align='center'></td>
            <td align='center'>5/..</td>
            <td class="table-warning" align='center'>10</td>
          </tr>
          <tr>
            <th scope="row">7.1-12</th>
            <td>จำนวนผลงานวิจัยที่นำไปใช้ประโยชน์เพื่อพัฒนาพื้นที่</td>
            <td align='center'>5</td>
            <td align='center'>10</td>
            <td align='center'>4</td>
            <td align='center'>9</td>
            <td class="table-warning" align='center'>5</td>
          </tr>
          <tr>
            <th scope="row">7.1-13</th>
            <td> รายได้จากนวัตกรรมที่ไปใช้ประโยชน์เชิงพาณิชย์ (ล้านบาท) </td>
            <td align='center'>0.08</td>
            <td align='center'>0.17</td>
            <td align='center'>0.84</td>
            <td align='center'>1.8</td>
            <td class="table-warning" align='center'>2</td>
          </tr>
          <tr>
            <th scope="row">7.1-14</th>
            <td>ร้อยละผลงานวิจัยที่ตีพิมพ์ในฐานข้อมูล Scopus ต่ออาจารย์ประจำ</td>
            <td align='center'>89.18</td>
            <td align='center'>28.98</td>
            <td align='center'>29.32</td>
            <td align='center'>35.93</td>
            <td class="table-warning" align='center'>50</td>
          </tr>
          <tr>
            <th scope="row">7.1-15</th>
            <td>ร้อยละผลงานวิจัยที่ตีพิมพ์ Q1, Q2 ต่ออาจารย์ประจำ</td>
            <td align='center'>45.45</td>
            <td align='center'>15.94</td>
            <td align='center'>25.56</td>
            <td align='center'>35.16</td>
            <td class="table-warning" align='center'>40</td>
          </tr>
          <tr>
            <th scope="row">7.1-16</th>
            <td>จำนวนครั้งที่ได้รับการอ้างอิง (citation) ในระดับชาติและนานาชาติ</td>
            <td align='center'>290</td>
            <td align='center'>215</td>
            <td align='center'>912</td>
            <td align='center'>249</td>
            <td class="table-warning" align='center'>200</td>
          </tr>
          <tr>
            <th scope="row">7.1-17</th>
            <td>จำนวนบทความวิจัยที่ตีพิมพ์ในฐานข้อมูล Scopus ที่เกิดจาก Collaborative Institute </td>
            <td align='center'>15</td>
            <td align='center'>18</td>
            <td align='center'>30</td>
            <td align='center'>34</td>
            <td class="table-warning" align='center'>20</td>
          </tr>
          <tr>
            <th scope="row">7.1-18</th>
            <td>ค่า H-Index เฉลี่ยของอาจารย์ประจำ </td>
            <td align='center'>13</td>
            <td align='center'>-</td>
            <td align='center'>-</td>
            <td align='center'>4.09</td>
            <td class="table-warning" align='center'>4.5</td>
          </tr>
          <tr>
            <th scope="row">7.1-19</th>
            <td>จำนวนผลงานทรัพย์สินทางปัญญา (สิทธิบัตร อนุสิทธิบัตร)</td>
            <td align='center'>1</td>
            <td align='center'>0</td>
            <td align='center'>1</td>
            <td align='center'>2</td>
            <td class="table-warning" align='center'>2</td>
          </tr>
          <tr>
            <th scope="row">7.1-20</th>
            <td>จำนวนนวัตกรรมที่นำไปใช้ประโยชน์ </td>
            <td class="table-secondary" align='center'></td>
            <td align='center'>13/3</td>
            <td align='center'>14/6</td>
            <td align='center'>17/14</td>
            <td class="table-warning" align='center'>20/10</td>
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