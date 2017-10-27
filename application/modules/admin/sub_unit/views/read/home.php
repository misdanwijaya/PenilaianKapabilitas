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
                <div class="icon"><i class="fa fa-caret-square-o-right"></i>
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
                <div class="icon"><i class="fa fa-comments-o"></i>
                </div>
                <?php $jumlah  = core::manualQuery("select count(id) as id from sub_unit","default")->result();
                    foreach ($jumlah as $key ) {
                      $jml = $key->id;
                  }
                  ?>
                
                <div class="count"><?php echo $jml?></div>

                <h3>Sub Unit</h3>
                <p>&nbsp;</p>
                <!-- <p>Lorem ipsum psdea itgum rixt.</p> -->
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                </div>
                <?php $jumlah  = core::manualQuery("select count(id_pertanyaan) as id from unsur","default")->result();
                    foreach ($jumlah as $key ) {
                      $jml = $key->id;
                  }
                  ?>                
                <div class="count"><?php echo $jml?></div>

                <h3>Unsur IKM</h3>
                <p>&nbsp;</p>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o"></i>
                </div>
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
                  $bulan = date('8');
                  $tahun = date('Y');
                  $report =  
                  core::manualQuery("
                  SELECT 
                    ROUND(SUM(total_IKM)*25,2) as IKM, sub_unit FROM
                  (
                    SELECT su.sub_unit, su.id, r.id_subunit, 
                    SUM(d.skor)/COUNT(d.type)*0.071 as NRR_Tertimbang, 
                    SUM(d.skor)/COUNT(d.type)*0.071 as total_nrr,
                    SUM(d.skor)/COUNT(d.type)*0.071 as total_IKM
                    FROM detail_survey d
                    INNER JOIN survey s on s.id = d.id_survey
                    INNER JOIN jadwal j on j.id = s.id_jadwal 
                    INNER JOIN responden r on r.email = s.email 
                    INNER JOIN sub_unit su on su.id = r.id_subunit 
                    where month(j.tanggal) = '$bulan' and year(j.tanggal)
                    = '$tahun' GROUP BY r.id_subunit, d.nomor_soal) 
                    as s GROUP BY id_subunit","default");
                    foreach($report->result() as $result){
                          $sub[] = $result->sub_unit;
                          $value[] = (float)$result->IKM;
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

                  <div class="col-md-3 col-sm-12 col-xs-12">
                    <div>
                      <div class="x_title">
                        <h2>Top Profiles</h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Settings 1</a>
                              </li>
                              <li><a href="#">Settings 2</a>
                              </li>
                            </ul>
                          </li>
                          <li><a href="#"><i class="fa fa-close"></i></a>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>

                      <ul class="list-unstyled top_profiles scroll-view">
                      <?php $jumlah  = core::manualQuery("select r.nama_responden, s.sub_unit from responden r INNER JOIN sub_unit s on s.id = r.id_subunit","default")->result();
                          foreach ($jumlah as $key ) {?>
                        <li class="media event">
                          <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                          </a>
                          <div class="media-body">
                            <a class="title" href="#"><?php echo $key->nama_responden?></a>
                            <p><strong></strong> <?php echo $key->sub_unit?>  </p>
                            <p> <small>5 menit yang lalu</small>
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
             text: 'Survey IKM',
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
                   return 'nilai Indeks Kepuasan Masyarakat <b>' + this.x + '</b> adalah <b>' + Highcharts.numberFormat(this.y,0) + '</b>';
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
                       return Highcharts.numberFormat(this.y, 0);
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