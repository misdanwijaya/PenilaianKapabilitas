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
      <h2 style="margin-top: 10px">Data Unit Kerja</h2>
      <a href="<?php echo base_url('sub_unit/create');?>"><button type="submit" name="tambah" class="btn btn-primary" style="float: right;"><i class="fa fa-plus-square"></i> Tambah</button></a>  
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <?php if($this->session->flashdata('success')){?>
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Hapus Data Unit Kerja Berhasil 
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
            <th>Unit Kerja</th>
            <th>Operasi</th>
          </tr>
        </thead>
        
        <tbody style="color: ">
        <?php 
        ?>
          <?php
          $no = 1;  
          foreach ($sub_unit->result() as $key ){?>
            <tr>
              <td><?php echo $no++?></td>
              <td><?php echo $key->sub_unit?></td>
              <td>
              <a href="<?php echo base_url();?>sub_unit/update/<?php echo $key->id?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
                <a href="<?php echo base_url();?>sub_unit/delete/<?php echo $key->id?>"><button class="btn btn-danger" onclick="javascript: return confirm('Apakah yakin akan dihapus?')"><i class="fa fa-trash"></i></button></a>
              </td>
            </tr>
          <?php }?>
        </tbody>
      </table>
<?php echo $this->load->view('js_foot'); ?>
</html>
</body>