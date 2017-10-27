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
        <h2>Form Update Pertanyaan</h2>

        <div class="clearfix"></div>
      </div>      
      <div class="x_content">
        <?php 
            $query = core::get_wheres('kuesioner','default',array('id' => $this->uri->segment(3)),1); 
            $row = $query->row_array();
        ?>
        <?php if($this->session->flashdata('success')){?>
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Update Data Pertanyaan Berhasil
        </div>
        <?php }?>
        <form method="post" action="<?php echo site_url('kuesioner/update/'.$row['id']) ?>" charset='UTF-8' class="form-horizontal form-label-left" novalidate>

          <input type="hidden" class="id_r" value=<?php echo $row['id'];?> >

          <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Area Proses Spesifik<span class="required">*</span></label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <select class="select1_single form-control" tabindex="-1" style="width: 240px;" id="single" name="single">
              <option value="empty">Pilih Area Proses Spesifik</option>
              <?php foreach ($area_proses_spesifik->result_array() as $key) { ?>                           
              <option value="<?php echo $key['id']?>" 
                <?php 
                if($row['id_area_proses_spesifik']==$key['id'])
                {
                  echo "selected=selected";
                }
            ?>> <?php echo $key['nama'] ?>
              </option>
              <?php } ?>
            </select>
          </div>
          </div>

          <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Kerja<span class="required">*</span></label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <select class="select3_single form-control" tabindex="-1" style="width: 240px;" id="single2" name="single2">
              <option value="empty">Pilih Unit Kerja</option>
              <?php foreach ($sub_unit->result_array() as $key) { ?>                           
              <option value="<?php echo $key['id']?>" 
                <?php 
                if($row['id_subunit']==$key['id'])
                {
                  echo "selected=selected";
                }
            ?>> <?php echo $key['sub_unit'] ?>
              </option>
              <?php } ?>
            </select>
          </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Pertanyaan<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="pertanyaan" class="form-control col-md-7 col-xs-12" name="pertanyaan" placeholder="Enter......" required="required" type="text" value="<?php echo $row['pertanyaan']?>">
            </div>
          </div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button id="send" type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
            <a href="<?php echo base_url('kuesioner');?>" class="btn btn-danger" tabindex="5"><i class="fa fa-remove"> </i> Batal</a>
          </div>
        </div>
        </form>

<?php echo $this->load->view('js'); ?>
</html>
</body>