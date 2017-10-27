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
      <h2 style="margin-top: 10px">Log Survei Responden</h2>
      <div class="clearfix"></div>
    </div>
    
    <div class="x_content">
    <?php if($this->session->flashdata('success')){?>
      <div class="alert alert-info alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
          </button><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Success:</span>
          Jadwal Survey Berhasil Dihapus
      </div>
    <?php }?>
        
       <!-- <p class="text-muted font-13 m-b-30">
        Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
      </p> -->
       <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead style="background-color: #1abb9c;color: white">
        <!-- #34495e
        #1abb9c -->
          <tr class="headings">
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>e-mail</th>
          </tr>
        </thead>
       
        <tbody style="color: ">
          <?php 
            $no =1;
            foreach ($survey->result() as $key ) {
                $data['jadwal'] = core::getJoin("survey s","jadwal j","s.id_jadwal = j.id","default",array("s.id_jadwal" => $key->id_jadwal));
                foreach ($data['jadwal']->result() as $value) {
                }
            ?>
            <tr>
              <td><?php echo $no++?></td>
              <td><?php
              $tanggal2=date("d-m-Y",strtotime($value->tanggal));
              echo $tanggal2?>
              </td>
              <td><?php echo $key->nama_responden?></td>
              <td><?php echo $key->email?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    
<?php echo $this->load->view('config/include'); ?>
</html>
</body>