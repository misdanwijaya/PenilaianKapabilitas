<?php error_reporting(0);?>
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
        <h2>Form Update Area Proses</h2>

        <div class="clearfix"></div>
      </div>      
      <div class="x_content">
        <?php 
            $query = core::get_wheres('area_proses','default',array('id' => $this->uri->segment(3)),1); 
            $row = $query->row_array();
        ?>
        <?php if($this->session->flashdata('success')){?>
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Update Data Area Proses Berhasil
        </div>
        <?php }?>
        <form method="post" action="<?php echo site_url('area_proses/update/'.$row['id']) ?>" charset='UTF-8' class="form-horizontal form-label-left" novalidate>

          <input type="hidden" class="id_r" value=<?php echo $row['id'];?> >


          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Area Proses <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nama" class="form-control col-md-7 col-xs-12" name="nama" placeholder="Enter......" required="required" type="text" value="<?php echo $row['area_proses']?>">
            </div>
          </div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button id="send" type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
            <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i> Batal</button>
          </div>
        </div>
        </form>

<?php echo $this->load->view('js'); ?>
</html>
</body>