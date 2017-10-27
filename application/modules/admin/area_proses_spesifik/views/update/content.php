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
            $query = core::get_wheres('area_proses_spesifik','default',array('id' => $this->uri->segment(3)),1); 
            $row = $query->row_array();
        ?>
        <?php if($this->session->flashdata('success')){?>
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Update Data Area Proses Spesifik Berhasil
        </div>
        <?php }?>
        <form method="post" action="<?php echo site_url('area_proses_spesifik/update/'.$row['id']) ?>" charset='UTF-8' class="form-horizontal form-label-left" novalidate>

          <input type="hidden" class="id_r" value=<?php echo $row['id'];?> >

          <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Area Proses<span class="required">*</span></label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <select class="select1_single form-control" tabindex="-1" style="width: 240px;" id="single2" name="single2">
              <option value="empty">Pilih Area Proses</option>
              <?php foreach ($area_proses->result_array() as $key) { ?>                           
              <option value="<?php echo $key['id']?>" 
                <?php 
                if($row['id_area_proses']==$key['id'])
                {
                  echo "selected=selected";
                }
            ?>> <?php echo $key['area_proses'] ?>
              </option>
              <?php } ?>
            </select>
          </div>
          </div>

          <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Spesific Goal<span class="required">*</span></label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <select class="select1_single form-control" tabindex="-1" style="width: 240px;" id="single" name="single">
              <option value="empty">Pilih Area Proses</option>
              <?php foreach ($spesific_goal->result_array() as $key) { ?>                           
              <option value="<?php echo $key['id']?>" 
                <?php 
                if($row['id_spesific_goal']==$key['id'])
                {
                  echo "selected=selected";
                }
            ?>> <?php echo $key['nama_spesific_goal'] ?>
              </option>
              <?php } ?>
            </select>
          </div>
          </div>


          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Area Proses <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nama" class="form-control col-md-7 col-xs-12" name="nama" placeholder="Enter......" required="required" type="text" value="<?php echo $row['nama']?>">
            </div>
          </div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button id="send" type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
            <a href="<?php echo base_url('area_proses_spesifik');?>" class="btn btn-danger" tabindex="5"><i class="fa fa-remove"> </i> Batal</a>
          </div>
        </div>
        </form>

<?php echo $this->load->view('js'); ?>
</html>
</body>