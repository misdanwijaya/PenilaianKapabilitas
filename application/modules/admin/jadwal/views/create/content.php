<?php error_reporting(0)?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <style type="text/css">
    /*#send{margin-left: 280px;position: relative;top: -49px;}
    #datatable-responsive{position: relative;top: -40px;}
    */.loaders {position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;background: url('../assets/loaders/ajax-loader1.gif') 50% 50% no-repeat #f2f2f2;opacity: 0.9;filter: alpha(opacity=90);
  }
  </style>

</head>
<body>
      <!-- loaders -->
        <div class="loaders"></div>
      <!-- /loaders -->

      <div class="x_title">
        <h2>Tambah Jadwal Survey</h2>
        

        <div class="clearfix"></div>
      </div>
      <div class="x_content">
      <div class="notif"></div>

        <form class="form-horizontal form-label-left" novalidate>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal Survey <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="tanggal" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Enter......">
            </div>
          </div>

          <script type="text/javascript">
            $(document).ready(function() {
              $('#tanggal').daterangepicker({
              // viewMode: "months", 
              // minViewMode: "months",
                singleDatePicker: true,
                showDropdowns: true,
                yearRange:"-100:+0",
                calender_style: "picker_1",
              }, 
               function(start, end, label) {
                 var years = moment().diff(start, 'years');
                 // alert("Usia Anda " + years + " Tahun.");
                console.log(start.toISOString(), end.toISOString(), label);

              });
            });
          </script>


        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jam">Jam (HH:MM:SS)<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="input-group bootstrap-timepicker">
                <span class="input-group-addon add-on"><i class="icon-time"></i></span>
                <input class="timepicker-24 form-control" type="text" id="start_time" />
                <span class="input-group-addon add-on">s/d</span>
                <input class="timepicker-24 form-control" type="text" id="doe_time" />
                <span class="input-group-addon add-on"><i class="icon-time"></i></span>
              </div>
            </div>
          </div>
          
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="durasi">Durasi (dalam Jam)<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="durasi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="durasi" placeholder="Enter......" required="required" type="text">
            </div>
          </div>
                  <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
            <a href="<?php echo base_url('jadwal');?>" class="btn btn-danger" tabindex="5"><i class="fa fa-remove"> </i> Batal</a>
          </div>
        </div>
      </form>
      <div class="details" style="display: none">
        
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead style="background-color: #1abb9c;color: white">
            <tr>
              <th>Tanggal</th>
              <th>Waktu Mulai</th>
              <th>Waktu Selesai</th>
              <th>Durasi</th>
              <th>Operasi</th>
            </tr>
          </thead>
          <tbody style="color: ">
            <tr class="baris"></tr>
          </tbody>
        </table> 

        <button id="send" type="submit" class="btn btn-success" onclick="kirim()"><i class="fa fa-send"></i> Simpan</button>
        

      </div>
<?php echo $this->load->view('js'); ?>
</html>
</body>