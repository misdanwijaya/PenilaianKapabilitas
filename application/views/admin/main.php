<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Penilaian Kapabilitas Pelayanan Jasa</title>
  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
  <?php echo $this->load->view("admin/style")?>
</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>
          </div>
          <div class="clearfix"></div>


          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <?php //if($level == 2){?>
              <img src="<?php echo base_url();?>assets/gantella/images/icon.png" alt="..." class="img-circle profile_img">
              <?php//}//else if($level ==2){?>
              <!-- <img src="<?php //echo base_url();?>assets/gantella/images/user.png" alt="..." class="img-circle profile_img"> -->
              <?php //}else{} ?>
            </div>
            <div class="profile_info">
              <span>Selamat Datang</span>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>Menu</h3>
              <ul class="nav side-menu">
                <li>
                  <?php if($level == 1){?>
                    <a class= "home" href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Beranda</a>
                  
                  <?php }else if($level ==2){?>
                    <!--<a class= "home" href="<?php echo base_url('sub_unit/home') ?>"><i class="fa fa-home"></i> Home</a>-->
                  
                  <?php }else{ ?>
                    <!--<a class= "home" href="<?php echo base_url('responden/home') ?>"><i class="fa fa-home"></i> Home</a>-->
                  <?php }?>
                </li>
                <!--Menu Admin-->
                <?php if($level == 1){?>
                <li><a><i class="fa fa-edit"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo base_url('responden')?>"> Data Responden</a>
                    </li>
                    <li><a href="<?php echo base_url('sub_unit')?>">Data Unit Kerja</a>
                    </li>
                  </ul>
                </li>


                <li><a><i class="fa fa-list-alt"></i> Data Survei <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                  <!--Untuk melihat area proses-->
                  <li><a href="<?php echo base_url('area_proses')?>">Area Proses</a>
                    </li>
                    <!--Untuk melihat area proses spesifik-->
                  <li><a href="<?php echo base_url('area_proses_spesifik')?>">Area Proses Spesifik</a>
                    </li>
                    <!--Untuk melihat Kuisoner-->
                    <li><a href="<?php echo base_url('kuesioner')?>">Kuesioner</a>
                    </li>
                  </ul>
                </li>

                <li><a><i class="fa fa-calendar"></i> Kelola Jadwal <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <!--<li><a href="<?php echo base_url('jadwal/viewCalendar')?>">Kalender</a>
                    </li>-->
                    <li><a href="<?php echo base_url('jadwal')?>">Jadwal Survei</a>
                    </li>
                    <li><a href="<?php echo base_url('jadwal/log_responden')?>">Log Survei Responden</a>
                    </li>
                  </ul>
                </li>

              </ul>
            </div>
            <div class="menu_section">
              
              <!--Menu Responden-->
                <?php }else{?>

                <li><a href="<?php echo base_url('kuesioner/submited') ?>"><i class="fa fa-edit"></i> Kuesioner</span></a>
                </li>

               <!-- <li><a><i class="fa fa-desktop"></i> Profil <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo base_url();?>responden/update2/<?php echo $email?>">Perbarui Profil</a>
                    </li>
                  </ul>
                </li>
                -->
            </div>
            <div class="menu_section">
             
                <?php } ?>
            </div>

          </div>
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url()?>assets/gantella/images/icon.png" alt=""><?php echo $email;?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="<?php echo base_url()?>login/logout"><i class="fa fa-sign-out pull-right"></i>Keluar</a>
                  </li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <?php $jml = core::manualQuery("select count(status) AS jml, status, id from jadwal where status = '0'","default"); ?>
                  <span class="badge bg-green">
                  <?php 
                  if($level == 2){                        
                  foreach($jml->result() as $key){
                      echo $key->jml;
                      $status = $key->status; 
                      $id = $key->id; 
                    }
                  }
                  else{
                    echo "0";
                  } ?>
                  
                  </span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <?php 
                    if($status == 0){
                      if($level ==2){?>
                  <li>
                    <a href="<?php echo base_url('jadwal/pemberitahuan/'.$id)?>">
                      <span class="image">
                          <img src="<?php echo base_url()?>assets/gantella/images/icon.png" alt="Profile Image" />
                      </span>
                      <span>
                      <span>admin@gmail.com</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                          Silakan mengisi kuesioner, apabila ada pertanyaan terkait bisa menghubungi Admin
                      </span>
                    </a>
                  </li>
                  <?php }else{?>
                    <li>
                    <a>
                      <span class="image">
                      </span>
                      <span>
                      <span></span>
                      <span class="time"></span>
                      </span>
                      <span class="message">
                      tidak ada pemberitahuan
                      </span>
                    </a>
                  </li>
                  
                    <?php } ?>
                  <?php }else{?>
                  <li>
                    <a>
                      <span class="image">
                      </span>
                      <span>
                      <span></span>
                      <span class="time"></span>
                      </span>
                      <span class="message">
                      tidak ada pemberitahuan
                      </span>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      
      <!-- main content -->
              
      <!-- page content -->
      <div class="right_col" role="main"><br />
        <div class="row top_tiles">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <?php echo $content;?>                    
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
        
        
        <!-- /main content -->

        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>


  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <?php echo $this->load->view('admin/config')?>

</body>

</html>
