<?php error_reporting(0)?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php echo $this->load->view('css_top')?>
</head>
<body>
    <!-- loaders -->
      <div class="loaders"></div>
    <!-- /loaders -->
      
    <div class="x_title">
      <h2 style="margin-top: 10px">Data Area Proses</h2>
      <a href="<?php echo base_url('area_proses/upload');?>"><button class="btn btn-info" style="float: right;"><i class="fa fa-upload"></i> Impor</button></a>
      <a href="<?php echo base_url('area_proses/download');?>"><button class="btn btn-success" style="float: right;"><i class="fa fa-download"></i> Ekspor</button></a>    
      <a href="<?php echo base_url('area_proses/create');?>"><button type="submit" name="tambah" class="btn btn-primary" style="float: right;"><i class="fa fa-plus-square"></i> Tambah</button></a>  
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <?php if($this->session->flashdata('success')){?>
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Proses Berhasil Dilakukan
        </div>        
      <?php } ?>
     <!-- <p class="text-muted font-13 m-b-30">
        Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
      </p> -->
       <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead style="background-color: #1abb9c;color: white">
        <!-- #34495e
        #1abb9c -->
          <tr class="headings">
            <th>No</th>
            <th>Area Proses</th>
            <th>SG1</th>
            <th>SG2</th>
            <th>SG3</th>
            <th>Nilai Karakteristik(SCAMPI)</th>
            <th>Nilai Karakteristik(Fuzzy)</th>
            <th>Perhitungan</th>
            <th>Operasi</th>
          </tr>
        </thead>
        
        <tbody style="color: ">
        <?php 
        ?>
          <?php
          $no = 1;  
          foreach ($area_proses->result() as $key ){?>
            <tr>
              <td><?php echo $no++?></td>
              <td><?php echo $key->area_proses?></td>
              <td><?php echo $key->sg1?></td>
              <td><?php echo $key->sg2?></td>
              <td><?php echo $key->sg3?></td>
              <td><?php echo $key->avg?></td>
              <td><?php echo $key->fuzzy?></td>
              <td>
              <a href="<?php echo base_url();?>area_proses/hitung/<?php echo $key->id?>"><button class="btn btn-primary"><i class="fa fa-calculator"></i> Hitung Nilai Area Proses</button> </a>
              <a href="<?php echo base_url();?>area_proses/fuzzy/<?php echo $key->id?>"><button class="btn btn-info"><i class="fa fa-calculator"></i> Hitung dengan Fuzzy</button> </a>
              </td>
              <td>
              <a href="<?php echo base_url();?>area_proses/update/<?php echo $key->id?>"><button class="btn btn-warning"><i class="fa fa-edit"></i> Perbarui</button></a>
              <a href="<?php echo base_url();?>area_proses/delete/<?php echo $key->id?>"><button class="btn btn-danger" onclick="javascript: return confirm('Apakah yakin akan dihapus?')"><i class="fa fa-trash"></i> Hapus</button> </a>
              <a href="<?php echo base_url();?>area_proses_spesifik/cari/<?php echo $key->id?>"><button class="btn btn-info"><i class="fa fa-search"></i> Telusuri Detail</button> </a>
              </td>
            </tr>
          <?php }?>
        </tbody>
      </table>
<?php echo $this->load->view('js_foot'); ?>
</html>
</body>