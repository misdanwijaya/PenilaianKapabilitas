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
      <h2 style="margin-top: 10px" >Import Data Karakteristik</h2>
      <div class="clearfix"></div>
    </div>
    <?php if($this->session->flashdata('success')){?>
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Hapus Data Respoden Berhasil 
        </div>       
      <?php }?>
      
    <div class="x_content">
      <form action="<?php echo base_url();?>area_proses/upload" method="post" accept-charset="utf-8" enctype="multipart/form-data">
          <table width="100%" class="table-form">
          
              <input name="hidden_input" value="hidden_val" type="hidden">
                   
              <tr>
                <td width="20%">File Data (*.csv)</td>
                <td><input type="file" name="userfile"  style="width: 300px" class="form-control" tabindex="3"></td>
              </tr>

              <tr>
                <td colspan="2">
                <br>
                    <button type="submit" class="btn btn-primary" name="UPLOAD" tabindex="4"><i class="fa fa-hdd-o"> </i> Upload</button>
                    <a href="<?php echo base_url('area_proses');?>" class="btn btn-success" tabindex="5"><i class="fa fa-arrow-circle-left"> </i> Kembali</a>
                </td>
              </tr>              
      </form>  
      
<?php echo $this->load->view('config/include'); ?>
</html>
</body>