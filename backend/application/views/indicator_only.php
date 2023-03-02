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
            <p> กรอกข้อมูลตัวชี้วัดที่ได้รับมอบหมาย</p>

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

      <table class="table table-hover table table-bordered" style=' width:100%;' id='data'>
        <thead>
          <tr class="table-primary" align='center'>
            <th scope="col" style=' width:5%;'>ลำดับ</th>
            <th scope="col" align='center' style=' width:60%;'>ตัววัด</th>
            <th scope="col" class="table-active" align='center' style=' width:10%;'>แก้ไข</th>
          </tr>
        </thead>
        <tbody class="table-light">
          <?php
          $no = 0;
          foreach ($indicator_user as $row) {
            $idca = $row->indicator_id;
          ?>

            <?php
            foreach ($indicator1 as $row1) {
              if ($row1->indicatorID == $idca) {
                $cid = $row1->cid

            ?>
                <tr name="tr">
                  <th scope="row"><?php echo $row1->number_cat; ?></th>
                  <td title="<?php echo $row1->description; ?>"><?php echo $row1->indicator_title; ?></td>
                  <td align='center'>
                    <button type="button" class="btn icon2" onclick='get_edit("<?php echo $cid; ?>","<?php echo $idca; ?>");'><i class="bx bx-edit"></i> </button>
                  </td>
                </tr>
            <?php
              }
            }
            ?>

            <?php
            foreach ($indicator2 as $row2) {
              if ($row2->indicatorID == $idca) {
                $cid = $row2->cid

            ?>
                <tr name="tr">
                  <th scope="row"><?php echo $row2->number_cat; ?></th>
                  <td title="<?php echo $row2->description; ?>"><?php echo $row1->indicator_title; ?></td>
                  <td align='center'>
                    <button type="button" class="btn icon2" onclick='get_edit("<?php echo $cid; ?>","<?php echo $idca; ?>");'><i class="bx bx-edit"></i> </button>
                  </td>
                </tr>
            <?php
              }
            }
            ?>

            <?php
            foreach ($indicator3 as $row3) {
              if ($row3->indicatorID == $idca) {
                $cid = $row3->cid

            ?>
                <tr name="tr">
                  <th scope="row"><?php echo $row3->number_cat; ?></th>
                  <td title="<?php echo $row3->description; ?>"><?php echo $row1->indicator_title; ?></td>
                  <td align='center'>
                    <button type="button" class="btn icon2" onclick='get_edit("<?php echo $cid; ?>","<?php echo $idca; ?>");'><i class="bx bx-edit"></i> </button>
                  </td>
                </tr>
            <?php
              }
            }
            ?>

            <?php
            foreach ($indicator4 as $row4) {
              if ($row4->indicatorID == $idca) {
                $cid = $row4->cid

            ?>
                <tr name="tr">
                  <th scope="row"><?php echo $row4->number_cat; ?></th>
                  <td title="<?php echo $row4->description; ?>"><?php echo $row1->indicator_title; ?></td>
                  <td align='center'>
                    <button type="button" class="btn icon2" onclick='get_edit("<?php echo $cid; ?>","<?php echo $idca; ?>");'><i class="bx bx-edit"></i> </button>
                  </td>
                </tr>
            <?php
              }
            }
            ?>

            <?php
            foreach ($indicator5 as $row5) {
              if ($row5->indicatorID == $idca) {
                $cid = $row5->cid

            ?>
                <tr name="tr">
                  <th scope="row"><?php echo $row5->number_cat; ?></th>
                  <td title="<?php echo $row5->description; ?>"><?php echo $row1->indicator_title; ?></td>
                  <td align='center'>
                    <button type="button" class="btn icon2" onclick='get_edit("<?php echo $cid; ?>","<?php echo $idca; ?>");'><i class="bx bx-edit"></i> </button>
                  </td>
                </tr>
            <?php
              }
            }
            ?>




          <?php
            $no++;
          }

          if ($no == 0) {
            echo "<tr><td align='center' colspan='8'><b>[==== ไม่พบข้อมูล ====]</b></td></tr>";
          }

          ?>

        </tbody>
      </table>

    </div>

</main><!-- End #main -->



<script>
  function get_edit(vcat,vid) {
    window.location = '<?php echo base_url(); ?>index.php/main/edit_indicator/'+ vcat +'/' + vid + "#edit"
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