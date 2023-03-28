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

  <!-- ======= Services Section ======= -->
  <section id="menu" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>ผู้ใช้งานในระบบ</h2>
        <p><a href="<?= site_url('main/user_add') ?>" class="btn btn-success" style="float:right;"><i class="bx bx-plus"></i> เพิ่ม</a>
          </p>
      </div>
      
      <table class="table table-hover" style=' width:100%;' id='data'>
        <thead>
          <tr>
            <th scope="col">ลำดับ</th>
            <th scope="col" align='center'> ชื่อผู้ใช้</th>
            <!-- <th scope="col" align='center'>username</th> -->
            <th scope="col" align='center'>หน้าที่</th>
            <th scope="col" align='center' style=' width:15%;'> แก้ไข/ลบ</th>

          </tr>
        </thead>
        <tbody>
          <?php
          $no = 0;
          $q_info = array();
          foreach ($users as $row) {

          ?>
            <tr>
              <th scope="row"><?php echo $no + 1; ?></th>
              <td><?php echo $row->name; ?></td>
              <!-- <td><?php echo $row->username; ?></td> -->
              <td><?php
                  if ($row->role == 0) {
                    echo "ผู้ดูและระบบ";
                  } elseif ($row->role == 1) {
                    echo "เจ้าหน้าที่";
                  } 
                  ?></td>
              <td>
                <button type="button" class="btn icon2" onclick='get_edit("<?php echo $row->userID; ?>");'><i class="bx bx-edit"></i> </button>
                <button type="button" class="btn icon3" onclick='del_user("<?php echo $row->userID; ?>");'><i class="bx bx-trash"></i></button>
              </td>
            </tr>

          <?php
            @$q_info[$row->article_group]++;
            $no++;
          }

          if ($no == 0) {
            echo "<tr><td align='center' colspan='6'><b>[==== ไม่พบข้อมูล ====]</b></td></tr>";
          }

          ?>
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
    var rowsShown = 10;
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
</style>