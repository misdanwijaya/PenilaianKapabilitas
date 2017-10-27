<?php error_reporting(0);?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php echo $this->load->view('config/css')?>
</head>
<body>
    <!-- loaders -->
      <div class="loaders"></div>
    <!-- /loaders -->                    
    <div class="x_title">
      <h2>Jadwal Survei</h2><br>
      <p style="margin-top: 20px">
      * Silakan Pilih Jadwal Survei yang tersedia pada kolom jadwal<br>
      ** Setiap jawaban pada pertanyaan akan masuk langsung kepada sistem<br>
      *** Apabila telah menyelesaikan kuesioner silakan tekan tombol Selesai<br>
      <br>
      <br>
      Hasil dari kuesioner ini hanya digunakan untuk keperluan ilmiah, sehingga semua jawaban akan dijamin kerahasiaannya.<br>
      Semoga partisipasi dan bantuan Bapak/Ibu/Saudara/I dapat berguna dan memberi masukan yang berarti dalam penelitian ini. 
      </p>  
      <ul class="nav navbar-right panel_toolbox">
      </ul>
      <div class="clearfix"></div>
    </div>
    
    <div class="x_content">
       <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead style="background-color: #34495e;color: white">
        <!-- #34495e
        #1abb9c -->

          <tr class="headings">
            <th>No</th>
            <th>Tanggal</th>
            <th>Mulai</th>
            <th>Selesai</th>
            <th>Durasi (Jam)</th>
            <th>Operasi</th>
          </tr>
        </thead>
       
        <tbody style="color: ">
          <?php 
            $no =1;
            foreach ($jadwal->result() as $key ) {
            ?>
            <tr>
              <td><?php echo $no++?></td>
              <td><?php
              $tanggal2     = date("d-m-Y",strtotime($key->tanggal));
              echo $tanggal2?></td>
              <td><?php echo $key->start_time?></td>
              <td><?php echo $key->doe_time?></td>
              <td><?php echo $key->durasi?></td>
              <td>
              <?php 
                $tanggal     = date("Y-m-d",strtotime($key->tanggal));
                $start_time  = date("H:i",strtotime(substr($key->start_time, "0","5")));
                $doe_time    = date("H:i",strtotime(substr($key->doe_time, "0","5")));
                $tanggal_now = date("Y-m-d");
                $waktuNow    = date("H:i");

                
                
                if($tanggal== $tanggal_now){?>
                  <a href="<?php echo base_url();?>kuesioner/insertSurvey/<?php echo $key->tanggal?>"><button class="btn btn-primary" name="submit"><i class="fa fa-edit"></i> Mulai Pengisian</button></a>
                
                <?php } else{?>

                  <!-- <a href="<?php //echo base_url();?>kuesioner/insertSurvey/<?php //echo $key->tanggal?>"><button class="btn btn-primary" name="submit"><i class="fa fa-edit"></i> Mulai Pengisian</button></a> -->
                  <button class="btn btn-primary" disabled="true"><i class="fa fa-edit"></i> Mulai Pengisian</button>
                
               <?php } ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    
<?php echo $this->load->view('config/include'); ?>
</html>
</body>