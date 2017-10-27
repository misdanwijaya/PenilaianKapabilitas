<?php error_reporting(0)?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>
      <!-- loaders -->
        <div class="loaders"></div>
      <!-- /loaders -->
          <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i>
                </div>
                <?php $jumlah  = core::manualQuery("select count(id) as id from responden","default")->result();
                    foreach ($jumlah as $key ) {
                      $jml = $key->id;
                  }
                  ?>
                <div class="count"><?php echo $jml?></div>

                <h3>Responden</h3>
                <p>&nbsp;</p>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-university"></i>
                </div>
                <?php $jumlah  = core::manualQuery("select count(id) as id from sub_unit","default")->result();
                    foreach ($jumlah as $key ) {
                      $jml = $key->id;
                  }
                  ?>
                
                <div class="count"><?php echo $jml?></div>

                <h3>Unit Kerja</h3>
                <p>&nbsp;</p>
               
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-calendar-check-o"></i>
                </div>
                <!--Untuk jumlah aturan Fuzzy-->
                <?php $jumlah  = core::manualQuery("select count(id) as id from jadwal","default")->result();
                    foreach ($jumlah as $key ) {
                      $jml = $key->id;
                  }
                  ?> 
                        
                <div class="count"><?php echo $jml?></div>

                <h3>Jadwal Survei</h3>
                <p>&nbsp;</p>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-question-circle"></i>
                </div>
                <!--Untuk jumlah Pertanyaan-->
                <?php $jumlah  = core::manualQuery("select count(id) as id from kuesioner","default")->result();
                    foreach ($jumlah as $key ) {
                      $jml = $key->id;
                  }
                  ?>                
                <div class="count"><?php echo $jml?></div>

                <h3>Pertanyaan</h3>
                <p>&nbsp;</p>
              </div>
            </div>
          </div>

          <div class="row">
          <div class="col-md-12">
            <!-- <div class="x_panel"> -->
              <div class="x_title">
                <!-- <h2>Transaction Summary</h2> -->
                <div class="filter">
                  <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    <!-- <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b> -->
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-9 col-sm-12 col-xs-12">
                <?php 
                $bulan = date('10');
                $tahun = date('Y');
                $report =  
                core::manualQuery("
                SELECT 
                AVG(rataan) as nilai, area_proses
                FROM area_proses_spesifik
                INNER JOIN area_proses
                ON area_proses.id=area_proses_spesifik.id_area_proses
                GROUP BY id_area_proses","default");
                  foreach($report->result() as $result){
                        $sub[] = $result->area_proses;
                        $value[] = (float)$result->nilai;
                 /* end mengambil query*/             
                }?>

                    <div id="report"></div>
                  <!-- <div class="demo-container" style="height:280px">
                    <div id="placeholder33x" class="demo-placeholder"></div>
                  </div>
                   -->
                  
                  <div class="tiles">
                    <!-- <div class="col-md-4 tile">
                      <span>Total Sessions</span>
                      <h2>231,809</h2>
                      <span class="sparkline11 graph" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                    </div> -->
                    <!-- <div class="col-md-4 tile">
                      <span>Total Revenue</span>
                      <h2>$231,809</h2>
                      <span class="sparkline22 graph" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                    </div> -->
                    <!-- <div class="col-md-4 tile">
                      <span>Total Sessions</span>
                      <h2>231,809</h2>
                      <span class="sparkline11 graph" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                    </div> -->
                  </div>

                </div>

                  <!--Daftar Responden-->
                  <div class="col-md-3 col-sm-12 col-xs-12">
                    <div>
                      <div class="x_title">
                        <h2>Responden Baru</h2>
                        <div class="clearfix"></div>
                      </div>
                      <ul class="list-unstyled top_profiles scroll-view">
                      <?php $jumlah  = core::manualQuery("select r.nama_responden, s.sub_unit from responden r INNER JOIN sub_unit s on s.id = r.id_subunit ORDER BY r.id DESC","default")->result();
                          foreach ($jumlah as $key ) {?>
                        <li class="media event">
                          <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                          </a>
                          <div class="media-body">
                            <a class="title" href="#"><?php echo $key->nama_responden?></a>
                            <p><strong></strong> <?php echo $key->sub_unit?>  </p>
                            
                            </p>
                          </div>
                        </li>
                        <?php } ?>                
                      </ul>
                    </div>
                  </div>

                <!-- </div> -->
              <!-- </div> -->
            </div>
          </div>
        
      <!-- /page content -->
<!-- load library jquery dan highcharts -->
<script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url();?>assets/js/highcharts-3d.js"></script>
<script src="<?php echo base_url();?>assets/js/exporting.js"></script>
<!-- end load library -->

<script type="text/javascript">
  $(function () {
    // Highcharts.setOptions({
    //       chart: {
    //           backgroundColor: {
    //               linearGradient: [0, 0, 500, 500],
    //               stops: [
    //                   [0, 'rgb(255, 255, 255)'],
    //                   [1, 'rgb(240, 240, 255)']
    //                   ]
    //           },
    //           borderWidth: 2,
    //           borderHeight: 5,
    //           plotBackgroundColor: 'rgba(255, 255, 255, .9)',
    //           plotShadow: true,
    //           plotBorderWidth: 1,
    //       }
    //   });
      $('#report').highcharts({
          chart: {
              type: 'column',
              options3d: {
              }
          },
          title: {
              text: 'Grafik Bulan <?php echo bulan($bulan).' '.$tahun ;?>',
              style: {
                      fontSize: '18px',
                      fontFamily: 'Verdana, sans-serif'
              }
          },
          subtitle: {
             text: 'Survei Kapabilitas',
             style: {
                      fontSize: '15px',
                      fontFamily: 'Verdana, sans-serif'
              }
          },
          xAxis: {
              categories:  <?php echo json_encode($sub);?>,
          },
          yAxis: {
              title: {
                  text: 'Nilai'
              },
          },
          tooltip: {
               formatter: function() {
                   return 'Nilai Kapabilitas<b> ' + this.x + '</b> adalah <b>' + Highcharts.numberFormat(this.y,2) + '</b>';
               }
            },
          legend: {
              enabled:false
            },
          series: [{
              // name: 'true',
              colorByPoint: true,
              data: <?php echo json_encode($value);?>,
              shadow : true,
              dataLabels: {
                  enabled: true,
                  color: '#045396',
                  align: 'center',
                  formatter: function() {
                       return Highcharts.numberFormat(this.y, 2);
                  }, // one decimal
                  y: 0, // 10 pixels down from the top
                  style: {
                      fontSize: '13px',
                      fontFamily: 'Verdana, sans-serif'
                  }
              }
          }]
      });
  });
  </script>
<?php echo $this->load->view('config/js'); ?>

</html>
</body>