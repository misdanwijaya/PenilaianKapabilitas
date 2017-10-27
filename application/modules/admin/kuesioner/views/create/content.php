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
      <h2>Form Tambah Pertanyaan</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <?php if($this->session->flashdata('success')){?>
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Pertanyaan Berhasil Di Simpan
        </div>
      <?php }?>
    
      <form method="post" action="create" charset='UTF-8' class="form-horizontal form-label-left" novalidate>

      <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Area Proses Spesifik<span class="required">*</span></label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <select class="select_single form-control" tabindex="-1" style="width: 240px;" id="single2" name="single2">
                  <option value="empty">Pilih Area Proses Spesifik</option>
                  <?php foreach ($area_proses_spesifik->result_array() as $key) { ?>                           
                  <option value="<?php echo $key['id']?>">  <?php echo $key['nama'] ?>
                  </option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Kerja<span class="required">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="select3_single form-control" tabindex="-1" style="width: 240px;" id="single" name="single">
                <option value="empty">Pilih Unit Kerja</option>
                <?php foreach ($sub_unit->result_array() as $key) { ?>                           
                <option value="<?php echo $key['id']?>">  <?php echo $key['sub_unit'] ?>
                </option>
                <?php } ?>
              </select>
            </div>
            </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pertanyaan">Pertanyaan <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="pertanyaan" required="required" name="pertanyaan" class="form-control col-md-7 col-xs-12"></textarea>
            </div>
          </div>
        

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button id="send" type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Tambahkan Data</button>
            <a href="<?php echo base_url('kuesioner');?>" class="btn btn-danger" tabindex="5"><i class="fa fa-remove"> </i> Batal</a>
          </div>
        </div>
      </form>

<?php echo $this->load->view('js_foot'); ?>
</html>
</body>