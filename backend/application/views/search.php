<section id="testimonials" class="testimonials">

</section>

<main id="main">

  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>ค้นหาข้อมูล</h2>
        <!-- <p></p> -->
      </div>

      <div class="container info">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <form method='post' enctype='multipart/form-data' action='<?php echo base_url(); ?>index.php/Main/intern_search_value'>

              <div class="row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">หมวดหมู่ : </label>
                  <select class="form-control" name="training_type" required>
                    <option value="1000" selected>---ทั้งหมด---</option>
                    <option value="1">7.1-ผลลัพธ์ด้านการเรียนรู้ของผู้เรียนและบริการที่ตอบสนองลูกค้ากลุ่มอื่น และด้านกระบวนการ </option>
                    <option value="2">7.2-ผลลัพธ์ด้านลูกค้า</option>
                    <option value="3">7.3-ผลลัพธ์ด้านบุคลากร</option>
                    <option value="4">7.4-ผลลัพธ์ด้านการนำองค์กรและการกำกับดูแลองค์กร </option>
                    <option value="5">7.5-ผลลัพธ์ด้านงบประมาณ การเงิน ตลาด และกลยุทธ์</option>
                  </select>
                </div>
              </div>
              <br>
              <div class="row ">
                <div class="form-group col-md-6">
                  <label for="inputPassword4">ปีงบประมาณ : </label>
                  <select class="form-control" name="train_year" required>
                    <option value="1000" selected>---ทั้งหมด---</option>
                    <?php
                    for ($i = date("Y") + 1; $i >= 2018; $i--) {
                      echo "<option value='" . ($i + 543) . "'>ปีการศึกษา " . ($i + 543) . "</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">หน่วยงาน : </label>
                  <select class="form-control" name="term" required>
                    <option value="1000" selected>---ทั้งหมด---</option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                  </select>
                </div>
              </div>
              <br>

              <br>
              <button type="button" class="btn btn-primary" onclick='get_search(training_type.value,train_year.value,term.value,mid.value);'>ค้นหาข้อมูล</button>
            </form>

          </div>
        </div>
      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
<script>
  function get_search(training_type, train_year, term, mid) {
    window.location = '<?php echo base_url(); ?>index.php/main/intern_search_value/' + training_type + '/' + train_year + '/' + term + '/' + mid + '#data';
  }

  $('#country').on('change', function(e) {

    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
    if (valueSelected == "1") {
      $('#mid').html('<option value="12" selected>---ทั้งหมด---</option><option value="1">เคมี</option><option value="2">เทคโนโลยียางและพอลิเมอร์</option>');
      // remove the city <select> dropdown
    } else if (valueSelected == "2") {
      $('#mid ').html('<option value="3">ฟิสิกส์ชีวการแพทย์</option>');
    } else if (valueSelected == "3") {
      $('#mid ').html('<option value="78910" selected>---ทั้งหมด---</option><option value="7">ชีววิทยา</option><option value="8">จุลชีววิทยา</option><option value="9">วิทยาศาสตร์สิ่งแวดล้อม</option><option value="10">อาชีวอนามัยและความปลอดภัย</option>');
    } else if (valueSelected == "4") {
      $('#mid ').html('<option value="456" selected>---ทั้งหมด---</option><option value="4">คณิตศาสตร์</option><option value="5">วิทยาการข้อมูลและนวัตกรรมซอฟต์แวร์</option><option value="6">เทคโนโลยีสารสนเทศและการสื่อสาร</option>');
    } else if (valueSelected == "0") {
      $('#mid ').html('<option value="1000" selected>---ทั้งหมด---</option><option value="1">เคมี</option><option value="2">เทคโนโลยียางและพอลิเมอร์</option><option value="3">ฟิสิกส์ชีวการแพทย์</option><option value="4">คณิตศาสตร์</option><option value="5">วิทยาการข้อมูลและนวัตกรรมซอฟต์แวร์</option><option value="6">เทคโนโลยีสารสนเทศและการสื่อสาร</option><option value="7">ชีววิทยา</option><option value="8">จุลชีววิทยา</option><option value="9">วิทยาศาสตร์สิ่งแวดล้อม</option><option value="10">อาชีวอนามัยและความปลอดภัย</option>');
    }
  });
</script>

<style>
  label {
    color: #495057;
    font-weight: bold;
    font-size: 14px;
  }
</style>