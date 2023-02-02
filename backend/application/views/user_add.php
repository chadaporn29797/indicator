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
        <h2>เพิ่มผู้ใช้งาน</h2>
        <!-- <p></p> -->
      </div>

      <div class="row">
        <div class="col-lg-3 mt-5 mt-lg-0 d-flex align-items-stretch">
        </div>

        <div class="col-lg-6 d-flex align-items-stretch">
          <div class="info">
            <form action="<?= site_url('main/add_user_todb') ?>" method="post" role="form">

              <div class="address">
                <i class="bi bi-card-text"></i>
                <h4>ชื่อ-สกุล:</h4>
                <!-- <p><input id='name' name='name' type="text" class="form-control" required></p> -->
                <p><input id='name' name='name' type="text" class="form-control" required>
                  <br>
                  <button type="button" id="sh" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ค้นหาบุคลากร</button>
                </p>
              </div>

              <div class="email">
                <i class="bi bi-file-person"></i>
                <h4>Username:</h4>
                <p><input id='username' name='username' type="text" class="form-control" required></p>
              </div>

              <div class="phone">
                <i class="bi bi-gear-fill"></i>
                <h4>หน้าที่:</h4>
                <p><select class="form-control" id='role' name='role' required>
                    <option value="">----เลือก----</option>
                    <option value="1">เจ้าหน้าที่</option>
                    <option value="0">ผู้ดูแลระบบ</option>
                  </select></p>
              </div>
              <br>
              <div class="log">
                <h4><input type="submit" value="บันทึก" class="btn btn-block btn-success"></h4>
              </div>

            </form>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">แบบฟอร์มค้นหาบุคลากร</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">ป้อนข้อมูล</span>
                  </div>
                  <input id='sign_name' name='sign_name' type="text" class="form-control" required>
                  <button type="button" id='konha' class="btn btn-success">ค้นหา</button>
                </div>
                <div id='head'></div>
                <ul id='show'></ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 mt-5 mt-lg-0 d-flex align-items-stretch">
        </div>

      </div>

    </div>

  </section><!-- End Contact Section -->

</main><!-- End #main -->

<script>
  $("#konha").click(function(e) {
    		e.preventDefault();
    		var url = "http://dataservice.sci.ubu.ac.th/1.2/index.php/StaffInfo/findPerson/" + $("#sign_name").val();


    		$.get(url, function(data) {
    			console.log(data);
    			$("#show").html(" ");
    			$("#show").html(' <table cellspacing="0" id="customers" style="border-width:0px;width:100%;border-collapse:collapse;"> <tbody> ');

    			$.each(data, function(i, item) {
    				console.log(data[i].firstName);

    				// $("#show").append("<br>" + data[i].firstName + "</br>");
    				$("#show").append('<tr id="sh' + i + '"><td> <input type="image" src="http://www.e-manage.sci.ubu.ac.th/picture/person/unknow.png" style="width:30px;"> </td><td align="left" style="width:100%;"><div style="font-weight: bold"><input type="hidden"  value="3445"><a href="#" style="color:Blue;" data-bs-dismiss="modal"> &nbsp;' + " " + data[i].forName + data[i].firstName + " " + data[i].lastName + '</a> </div> </td> </tr>');

    				$("#sh"+i).click(function(e) {
    					e.preventDefault();
    					$("#name").val(data[i].forName + data[i].firstName + " " + data[i].lastName);
    					$("#username").val(data[i].username);
						
    				});
    			});


    			$("#show").append('</tbody> </table> ');


    		}, "json");
    	});
</script>