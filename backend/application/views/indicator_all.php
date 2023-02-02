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
            <th scope="col" class="table-active" align='center' style=' width:15%;'> เลื่อน/แก้ไข/ลบ</th>

          </tr>
        </thead>
        <tbody class="table-light">
          <?php if ($cat == 1) { ?>
            <tr>
              <th scope="row">7.1-1</th>
              <td>ร้อยละของบัณฑิตที่ได้งานทำหรือประกอบอาชีพอิสระภายใน 1 ปี หลังสำเร็จการศึกษา </td>
              <td align='center'>78.1</td>
              <td align='center'>71.43</td>
              <td align='center'>70.29</td>
              <td align='center'>62.34</td>
              <td class="table-warning" align='center'>75</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.1-2</th>
              <td>ระดับความพึงพอใจผู้ใช้บัณฑิตตามกรอบมาตรฐานคุณวุฒิ 5 ด้าน ระดับป.ตรี</td>
              <td align='center'>84.8</td>
              <td align='center'>84</td>
              <td align='center'>78.4</td>
              <td align='center'>83.8</td>
              <td class="table-warning" align='center'>85</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.1-3</th>
              <td>ระดับความพึงพอใจผู้ใช้บัณฑิตตามกรอบมาตรฐานคุณวุฒิ 5 ด้านระดับบัณฑิตศึกษา </td>
              <td align='center'>84.6</td>
              <td align='center'>96</td>
              <td align='center'>91</td>
              <td align='center'>92.6</td>
              <td class="table-warning" align='center'>95</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.1-4</th>
              <td>ร้อยละของบัณฑิตที่เป็นผู้ประกอบการภายใน 1 ปี หลังสำเร็จการศึกษา</td>
              <td class="table-secondary" align='center'></td>
              <td class="table-secondary" align='center'></td>
              <td align='center'>5.72</td>
              <td align='center'>2.86</td>
              <td class="table-warning" align='center'>5</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.1-5</th>
              <td>ร้อยละของบัณฑิตในระดับป.ตรี ที่ได้งานทำในองค์กรระดับนานาชาติ/ ข้ามชาติ/ ชั้นนำ</td>
              <td align='center'>15.79</td>
              <td align='center'>12.08</td>
              <td align='center'>13.28</td>
              <td align='center'>17.26</td>
              <td class="table-warning" align='center'>20</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.1-6</th>
              <td>ร้อยละบัณฑิตที่ได้รับเงินเดือนเฉลี่ยสูงกว่าฐานเงินเดือนระดับป.ตรีที่รัฐบาลกำหนด</td>
              <td align='center'>21.3</td>
              <td align='center'>24.81</td>
              <td align='center'>21.33</td>
              <td align='center'>25.59</td>
              <td class="table-warning" align='center'>30</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.1-7</th>
              <td>สัดส่วนของบทความวิจัยของนักศึกษาที่ตีพิมพ์ในฐานข้อมูล Q1 และ Q2 ต่อผลงานตีพิมพ์ระดับนานาชาติทั้งหมด (รอพี่อ้อยอัพเดต)</td>
              <td align='center'>33.33</td>
              <td align='center'>25</td>
              <td align='center'>66.67</td>
              <td align='center'>85.71</td>
              <td class="table-warning" align='center'>70</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.1-8</th>
              <td>ร้อยละของบทความวิจัยของนักศึกษาระดับบัณฑิตศึกษาที่ตีพิมพ์ในระดับนานาชาติต่อจำนวนผู้ที่สำเร็จการศึกษาระดับบัณฑิตศึกษาในแต่ละปีการศึกษา</td>
              <td class="table-secondary" align='center'></td>
              <td class="table-secondary" align='center'></td>
              <td align='center'>34</td>
              <td align='center'>34</td>
              <td class="table-warning" align='center'>35</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.1-9</th>
              <td>จำนวนของผู้เข้าอบรมหลักสูตรสำหรับทุกช่วงวัย (non degree)</td>
              <td class="table-secondary" align='center'></td>
              <td class="table-secondary" align='center'></td>
              <td align='center'>60</td>
              <td align='center'>93</td>
              <td class="table-warning" align='center'>90</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
          <?php } else if ($cat == 2) { ?>
            <tr>
              <th scope="row">7.2-1</th>
              <td>ร้อยละความพึงพอใจของนักศึกษาชั้นปีสุดท้ายต่อคุณภาพของหลักสูตร (ป.ตรี)</td>
              <td align='center'>80.08</td>
              <td align='center'>80.94</td>
              <td align='center'>81.66</td>
              <td align='center'>91.8</td>
              <td class="table-warning" align='center'>90</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.2-2</th>
              <td>ร้อยละความพึงพอใจของนักศึกษาชั้นปีสุดท้ายต่อคุณภาพของหลักสูตร บัณฑิตศึกษา</td>
              <td align='center'>87.8</td>
              <td align='center'>79.83</td>
              <td align='center'>86.42</td>
              <td align='center'>88</td>
              <td class="table-warning" align='center'>90</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.2-3</th>
              <td>ร้อยละความพึงพอใจต่อระบบการให้คำปรึกษาของอาจารย์ที่ปรึกษา</td>
              <td align='center'>57.8</td>
              <td align='center'>54</td>
              <td align='center'>55.6</td>
              <td align='center'>94.2</td>
              <td class="table-warning" align='center'>80</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.2-4</th>
              <td>ร้อยละความพึงพอใจของนักศึกษาต่อกิจกรรมเสริมหลักสูตร</td>
              <td align='center'>86.08</td>
              <td align='center'>86.24</td>
              <td align='center'>82.6</td>
              <td align='center'>87</td>
              <td class="table-warning" align='center'>85</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.2-5</th>
              <td>ร้อยละความพึงพอใจของนักศึกษาหลักสูตรศึกษาศาสตรบัณฑิตของคณะศิลปศาสตร์ ต่อการจัดการศึกษาและสิ่งสนับสนุนการเรียนรู้</td>
              <td align='center' class="table-secondary"></td>
              <td align='center' class="table-secondary"></td>
              <td align='center'>88.9</td>
              <td align='center'>88.4</td>
              <td class="table-warning" align='center'>9</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
          <?php } else if ($cat == 3) { ?>
            <tr>
              <th scope="row">7.3-1</th>
              <td>ร้อยละของอาจารย์ที่มีตำแหน่งทางวิชาการ </td>
              <td align='center'>51.47</td>
              <td align='center'>52.98</td>
              <td align='center'>54.13</td>
              <td align='center'>58.14</td>
              <td class="table-warning" align='center'>60</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.3-2</th>
              <td>จำนวนรางวัลระดับชาติหรือระดับนานาชาติที่บุคลากรได้รับทั้งหมด</td>
              <td align='center'>4</td>
              <td align='center'>4</td>
              <td align='center'>3</td>
              <td align='center'>2</td>
              <td class="table-warning" align='center'>3</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.3-3</th>
              <td>ทุนวิจัยต่อจำนวนอาจารย์ประจำ (บาท)</td>
              <td align='center'>71079</td>
              <td align='center'>48806</td>
              <td align='center'>95639</td>
              <td align='center'>98328</td>
              <td class="table-warning" align='center'>98,000</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.3-4</th>
              <td>ร้อยละของอาจารย์ที่สามารถรับทุนวิจัยจากภายนอก </td>
              <td align='center'>15.9</td>
              <td align='center'>15.2</td>
              <td align='center'>21.8</td>
              <td align='center'>27.34</td>
              <td class="table-warning" align='center'>25</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.3-5</th>
              <td>จำนวนผลงานที่ตีพิมพ์ในฐานข้อมูล Scopus ต่ออาจารย์ประจำ</td>
              <td align='center'>0.24</td>
              <td align='center'>0.28</td>
              <td align='center'>0.29</td>
              <td align='center'>0.35</td>
              <td class="table-warning" align='center'>0.35</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
          <?php } else if ($cat == 4) { ?>
            <tr>
              <th scope="row">7.4-1</th>
              <td>ร้อยละของบุคลากรในการรับรู้วิสัยทัศน์และค่านิยมของคณะ</td>
              <td align='center' class="table-secondary"></td>
              <td align='center' class="table-secondary"></td>
              <td align='center'>56.56</td>
              <td align='center'>80.41</td>
              <td class="table-warning" align='center'>80</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.4-2</th>
              <td>ร้อยละความพึงพอใจของนักศึกษาระดับปริญญาตรีในการรับรู้แนวปฏิบัติช่วงสถานการณ์ฉุกเฉิน</td>
              <td align='center' class="table-secondary"></td>
              <td align='center' class="table-secondary"></td>
              <td align='center'>74.6</td>
              <td align='center'>74.55</td>
              <td class="table-warning" align='center'>80</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.4-3</th>
              <td>จำนวนข้อทักท้วงจากหน่วยตรวจสอบภายในของมหาวิทยาลัย </td>
              <td align='center' class="table-secondary"></td>
              <td align='center' class="table-secondary"></td>
              <td align='center'>4</td>
              <td align='center'>5</td>
              <td class="table-warning" align='center'>3</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.4-4</th>
              <td>ความพึงพอใจในภาพรวมของบุคลากรต่อการกำกับดูแลองค์กร </td>
              <td align='center' class="table-secondary"></td>
              <td align='center' class="table-secondary"></td>
              <td align='center' class="table-secondary"></td>
              <td align='center'>4.54</td>
              <td class="table-warning" align='center'>4.5</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.4-5</th>
              <td>(ผลประเมิน คณบดี/ ผู้บริหาร/ หัวหน้าภาควิชา) แยกประเด็น ธรรมาภิบาล (เลือกวัด โปร่งใส การมีส่วนร่วม การกระจายอำนาจ) / การประพฤติเป็นแบบอย่างที่ดี/ การปฏิบัติตามกฎระเบียบ/ การสื่อสาร (คนตอบทั้งสายวิชาการและสายสนับสนุน)</td>
              <td align='center'class="table-secondary"></td>
              <td align='center'class="table-secondary"></td>
              <td align='center'class="table-secondary"></td>
              <td align='center'class="table-secondary"></td>
              <td class="table-warning" align='center'></td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
          <?php } else if ($cat == 5) { ?>
            <tr>
              <th scope="row">7.5-1</th>
              <td>เงินรายได้ต่อจำนวนบุคลากร (Productivity Per Head) (แสนบาท) </td>
              <td align='center'>6.49</td>
              <td align='center'>10.25</td>
              <td align='center'>9.48</td>
              <td align='center'>9.68</td>
              <td class="table-warning" align='center'>9.6</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.5-2</th>
              <td>จำนวนเงินสนับสนุนโครงการวิจัยและนวัตกรรมที่ได้รับจากหน่วยงานภายในและภายนอก (ล้านบาท) </td>
              <td align='center'>9.8</td>
              <td align='center'>6.73</td>
              <td align='center'>12.7</td>
              <td align='center'>12.68</td>
              <td class="table-warning" align='center'>13</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.5-3</th>
              <td>รายได้จากนวัตกรรมของคณะ (แสนบาท)</td>
              <td align='center'>0.18</td>
              <td align='center'>1.6</td>
              <td align='center'>8.4</td>
              <td align='center'>18</td>
              <td class="table-warning" align='center'>15</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.5-4</th>
              <td>ร้อยละงบประมาณจากเงินรายได้ที่ใช้พัฒนานักศึกษา</td>
              <td align='center'>10.55</td>
              <td align='center'>18.93</td>
              <td align='center'>24.52</td>
              <td align='center'>27.27</td>
              <td class="table-warning" align='center'>25</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">7.5-5</th>
              <td>รายได้สุทธิจากการบริการวิชาการ (หน่วยวิเคราะห์+ห้องเรียนพิเศษ+(สอวน.เงินเหลือ))</td>
              <td align='center' class="table-secondary"></td>
              <td align='center' class="table-secondary"></td>
              <td align='center'>11</td>
              <td align='center'>6.98</td>
              <td class="table-warning" align='center'>12</td>
              <td>
                <button type="button" class="btn icon1" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-up"></i> </button>
                <button type="button" class="btn icon4" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bi bi-chevron-double-down"></i></button>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>
          <?php }  ?>
        </tbody>
      </table>

    </div>

</main><!-- End #main -->



<script>
  function get_edit(vid) {

    window.location = '<?php echo base_url(); ?>index.php/main/user_edit/' + vid
  }

  function cat_select(vval) {
    window.location = "<?php echo base_url(); ?>index.php/main/indicator_all/" + vval;
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