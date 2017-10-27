<?php error_reporting(0)?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
  .loaders {position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;background: url('../assets/loaders/ajax-loader1.gif') 50% 50% no-repeat #f2f2f2;opacity: 0.9;filter: alpha(opacity=90);
  }
  </style>
</head>
<body>
    <!-- loaders -->
      <div class="loaders"></div>
    <!-- /loaders -->

    <div class="x_title">
      <h2>Form Tambah Responden</h2>

        <div class="clearfix"></div>
      </div>
      <div class="x_content">
      <?php if($this->session->flashdata('success')){?>
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Data Respoden Berhasil Di Simpan
        </div>
      <?php }?>
      <?php if($this->session->flashdata('error')){?>
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            Email sudah digunakan
        </div>
      <?php }?>
      
    
      <form method="post" action="create" charset='UTF-8' class="form-horizontal form-label-left" novalidate>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Lengkap <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  name="nama" placeholder="Enter......" required="required" type="text">
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat Lahir <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="tempat_lahir" class="form-control col-md-7 col-xs-12" name="tempat_lahir" placeholder="Enter......" required="required" type="text">
          </div>
        </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="birthday">Tanggal Lahir <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="birthday" name="birthday" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Enter......">
            </div>
          </div>

          <script type="text/javascript">
            $(document).ready(function() {
              $('#birthday').daterangepicker({
              // viewMode: "months", 
              // minViewMode: "months",
                singleDatePicker: true,
                showDropdowns: true,
                // yearRange:"-100:+0",
                yearRange:"100:+0",
                calender_style: "picker_1",
              }, 
               function(start, end, label) {
                 var years = moment().diff(start, 'years');
                 // alert("Usia Anda " + years + " Tahun.");
                console.log(start.toISOString(), end.toISOString(), label);
                var usia = $("#usia").val(years + " Tahun");

              });
            });
          </script>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usia">Usia <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="usia" class="form-control col-md-7 col-xs-12" name="usia" placeholder="Enter......"required="required" type="text" >
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="alamat" required="required" name="alamat" class="form-control col-md-7 col-xs-12"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <p style="margin-top: 10px">
              <input type="radio" class="flat" name="jenis_kelamin" id="genderL" value="Laki-Laki" checked="" required />
                Laki-Laki &nbsp;
               <input type="radio" class="flat" name="jenis_kelamin" id="genderP" value="Perempuan" />
               Perempuan    
            </p>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="select">Pendidikan Terakhir<span class="required">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="select2_single form-control" tabindex="-1" style="width: 240px;" id="single1" name="single1">
                <option value="empty">Pilih Pendidikan Terakhir</option>
                <option value="SD">SD ke bawah</option>
                <option value="SLTP">SLTP</option>
                <option value="SLTA">SLTA</option>
                <option value="D1-D3-D4">D1-D3-D4</option>
                <option value="S1">S1</option>
                <option value="S2">S2 ke atas</option>
              </select>
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Kerja<span class="required">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="select2_single form-control" tabindex="-1" style="width: 240px;" id="single2" name="single2">
                <option value="empty">Pilih Unit Kerja</option>
                <?php foreach ($sub_unit->result_array() as $key) { ?>                           
                <option value="<?php echo $key['id']?>">  <?php echo $key['sub_unit'] ?>
                </option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="Enter......">
            </div>
          </div>

          <div class="item form-group">
            <label for="password" class="control-label col-md-3">Password</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required" placeholder="Enter......">
            </div>
          </div>

          <div class="item form-group">
            <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Ulangi Password</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required" placeholder="Enter......">
            </div>
          </div>

          
          
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button id="send" name="send" type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Tambahkan Data</button>
              <a href="<?php echo base_url('responden');?>" class="btn btn-danger" tabindex="5"><i class="fa fa-remove"> </i> Batal</a>
            </div>
          </div>
        </form>

<?php echo $this->load->view('js'); ?>
</html>
</body>