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
        <h2>Form Update Jadwal Survey</h2>
        

        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <?php if($this->session->flashdata('success')){?>
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Update Jadwal Survey Berhasil
        </div>
        <?php }?>
        <?php 
        $query = core::get_wheres('jadwal','default',array('id' => $this->uri->segment(3)),1); 
        $row = $query->row_array();
        ?>
        <form method="post" action="<?php echo base_url('jadwal/update/'.$row['id']) ?>" charset='UTF-8' class="form-horizontal form-label-left" novalidate>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal Survey <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="tanggal" name="tanggal" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Enter......" value="<?php echo date('d-m-Y', strtotime($row['tanggal']))?>">
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
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jam">Jam<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="input-group bootstrap-timepicker">
                <span class="input-group-addon add-on"><i class="icon-time"></i></span>
                <input class="timepicker-24 form-control" type="text" id="start_time" name="start_time" value="<?php echo $row['start_time']?>" />
                <span class="input-group-addon add-on">s/d</span>
                <input class="timepicker-24 form-control" type="text" id="doe_time" value="<?php echo $row['doe_time']?>" name="doe_time" />
                <span class="input-group-addon add-on"><i class="icon-time"></i></span>
              </div>
            </div>
          </div>
          
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="durasi">Durasi<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="durasi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="durasi" placeholder="Enter......" required="required" type="text" value="<?php echo $row['durasi']?>">
            </div>
          </div>
                  
          <div class="ln_solid"></div>
          <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button type="submit"  name="send" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
            <a href="<?php echo base_url('jadwal');?>" class="btn btn-danger" tabindex="5"><i class="fa fa-remove"> </i> Batal</a>
          </div>
        </div>
      </form>
      
<?php //echo $this->load->view('js'); ?>
</html>
</body>