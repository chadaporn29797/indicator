<section id="testimonials" class="testimonials">
  <div class="container position-relative">

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <br>
            <br>
            <br>
            <h3>รายงานผลการดำเนินการตัวชี้วัด</h3>
            <p>รายงานผลการดำเนินการตัวชี้วัดทั้งหมด</p>

          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->

<main id="main" onload="myFunction()">

  <!-- ======= Services Section ======= -->
  <section id="menu" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>ผลการดำเนินงานตัวชี้วัดประจำปี</h2>
        </p>
      </div>

      <?php
      $year1 = $year;
      $year2 = $year - 1;
      $year3 = $year - 2;
      $year4 = $year - 3;
      ?>

      <div class="ex-basic-2" style='padding-top:30px;'>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-container">
                <table cellpadding="0" cellspacing="0" width="100%">
                  <tbody>
                    <tr>
                      <td align="center" valign="middle" style="width: 20%;" class="topic_l1_block">
                        <span id="ContentPlaceHolder1_lbNumber0" class="topic_l1"><?php echo $indicator[0]->number_cat; ?></span>
                        &nbsp;<span id="ContentPlaceHolder1_lblNumber" class="topic_l1"></span>
                      </td>
                      <td align="left" valign="middle" style="width: 80%;" class="topic_l2_block">
                        <span id="ContentPlaceHolder1_lblTopic" class="topic_l2"> &nbsp; <?php echo $indicator[0]->indicator_title; ?></span>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <br>
                <div class="row content" align="center">

                  <div id="myChart" class="chart--container">
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>


      </div>

</main><!-- End #main -->
<script nonce="undefined" src="https://cdn.zingchart.com/zingchart.min.js"></script>
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script src="https://unpkg.com/file-saver@1.3.3/FileSaver.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript" src="jscript/graph.js"></script>
<script>
  ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"]; // CHART CONFIG
  // -----------------------------
  let chartConfig = {
    type: 'mixed',
    title: {
      text: '',
      align: 'left',
      marginLeft: '23%',
    },
    legend: {
      adjustLayout: true,
      verticalAlign: 'middle',
    },
    scaleX: {
      labels: [
        '2562',
        '2563',
        '2664',
      ], // one label for every datapoint
    },
    scaleY: {
      guide: {
        // dashed lines
        visible: false,
      },
      label: {
        text: 'จำนวน......',
        fontSize: '14px',
      },
    },
    crosshairX: {
      lineColor: '#424242',
      lineGapSize: '4px',
      lineStyle: 'dotted',
      plotLabel: {
        padding: '15px',
        backgroundColor: 'white',
        bold: true,
        borderColor: '#e3e3e3',
        borderRadius: '5px',
        fontColor: '#2f2f2f',
        fontFamily: 'Lato',
        fontSize: '12px',
        shadow: true,
        shadowAlpha: 0.2,
        shadowBlur: 5,
        shadowColor: '#a1a1a1',
        shadowDistance: 4,
        textAlign: 'left',
      },
      scaleLabel: {
        backgroundColor: '#424242',
      },
    },
    series: [{
        type: 'bar',
        text: 'ร้อยละ',
        values: [18, 30, 34],
        backgroundColor: '#365f93',
        scales: 'scale-x, scale-y',
      },
      {
        type: 'line',
        text: 'Linear (....)',
        ///a= 34-18 b=a/2 c=18+b **c**
        values: [18, 26, 34],
        lineColor: '#42a5f5',
        marker: {
          visible: false,
        },
        scales: 'scale-x, scale-y',
      },
      {
        type: 'line',
        text: 'เป้าหมาย',
        values: [35, 35, 35],
        lineColor: '#66bb6a',
        marker: {
          visible: false,
        },
        scales: 'scale-x, scale-y',
      },

    ],
  };

  // RENDER CHARTS
  // -----------------------------
  zingchart.render({
    id: 'myChart',
    data: chartConfig,
    height: '100%',
    width: '90%',
  });
</script>

<style>
  .zc-body {
    background-color: #fff;
  }

  .chart--container {
    height: 100%;
    width: 100%;
    min-height: 530px;
  }

  .zc-ref {
    display: none;
  }

  .topic_l1_block {
    background-color: #0d83b5;
    padding: 5px;
    border: 3px solid #999999;
    font-size: 22px;
    color: #EFEFEF;
  }

  .topic_l2_block {
    border: 3px solid #999999;
    padding: 5px;
    background-color: #EFEFEF;
    font-size: 22px;
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