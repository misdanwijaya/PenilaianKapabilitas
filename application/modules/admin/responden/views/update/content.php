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
      <h2>Form Update Data Responden </h2>
      

      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <?php if($this->session->flashdata('success')){?>
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Update Data Respoden Berhasil 
        </div>
      <?php }?>
      <?php if($this->session->flashdata('error')){?>
        <div class="alert alert-danger" role="alert">
           <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
          Enter a valid email address
        </div>
      <?php } ?>
      
      <?php $query = core::get_wheres('responden','default',array('id' => $this->uri->segment(3)),1); ?>
      <?php $row = $query->row_array();
        // print_r($row);
      ?>
    
      <form method="post" action="<?php echo site_url('responden/update/'.$row['id']) ?>" charset='UTF-8' class="form-horizontal form-label-left" novalidate>


        <input type="hidden" class="id_r" value=<?php echo $row['id'];?> >
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Lengkap <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="nama" placeholder="Enter......" required="required" type="text"  value="<?php echo $row['nama_responden']?>">
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat Lahir <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="tempat_lahir" class="form-control col-md-7 col-xs-12" name="tempat_lahir" placeholder="Enter......" required="required" type="text"  value="<?php echo $row['tempat_lahir']?>">
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="birthday">Tanggal Lahir <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="birthday" name="birthday" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Enter......"  value="<?php echo date("m/d/Y",strtotime($row['tanggal_lahir'])) ?>">
          </div>
        </div>

        <script type="text/javascript">
          $(document).ready(function() {
            $('#birthday').daterangepicker({
            // viewMode: "months", 
            // minViewMode: "months",
              singleDatePicker: true,
              showDropdowns: true,
              yearRange:"-100:+10",
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
            <input id="usia" class="form-control col-md-7 col-xs-12" name="usia" placeholder="Enter......"required="required" type="text" value="<?php echo $row['usia']?>">
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea id="alamat" required="required" name="alamat" class="form-control col-md-7 col-xs-12"><?php echo $row['alamat']?></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin<span class="required">*</span></label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <p style="margin-top: 10px">
            <input type="radio" class="flat" name="jenis_kelamin" id="genderL" value="Laki-Laki" <?php 
              if($row['jenis_kelamin'] == "Laki-Laki")
              {
                echo "checked";
              }
              ?> />
              Laki-Laki &nbsp;
             <input type="radio" class="flat" name="jenis_kelamin" id="genderP" value="Perempuan" 
             <?php 
              if($row['jenis_kelamin'] == "Perempuan")
              {
                echo "checked";
              }
              ?> />
             Perempuan    
          </p>
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="select">Pendidikan Terakhir<span class="required">*</span></label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <select class="select2_single form-control" tabindex="-1" style="width: 240px;" id="single1" name="single1">
              <option value="empty">Pilih Pendidikan Terakhir</option> 
              <option value="SD"
              <?php 
                if($row['pendidikan_terakhir']=="SD")
                {
                  echo "selected=selected";
                }
              ?>>SD ke bawah</option>
              <option value="SLTP"
              <?php 
                if($row['pendidikan_terakhir']=="SLTP")
                {
                  echo "selected=selected";
                }
              ?>>SLTP</option>
              <option value="SLTA"
              <?php 
                if($row['pendidikan_terakhir']=="SLTA")
                {
                  echo "selected=selected";
                }
              ?>>SLTA</option>
              <option value="D1-D3-D4" 
              <?php 
                if($row['pendidikan_terakhir']=="D1-D3-D4")
                {
                  echo "selected=selected";
                }
              ?>>D1-D3-D4</option>
              <option value="S1" 
              <?php 
                if($row['pendidikan_terakhir']=="S1")
                {
                  echo "selected=selected";
                }
              ?>>S1</option>
              <option value="S2"
              <?php 
                if($row['pendidikan_terakhir']=="S2")
                {
                  echo "selected=selected";
                }
              ?>>S2 ke atas</option>
            </select>
          </div>
        </div>

        
        <style type="text/css">
          /*box-shadow: 10px 1px 5px #888888;*/
        .loader{
          margin-left: 150px;
          border: 1px solid transparant;
          border-radius: 3px;
          box-sizing: 10px;
          box-shadow:inset 0 0 1em gold, 0 0 1em red;
          width: 220px;
          height: 100px;
          background-color: white;
          z-index: 3000;
          position: absolute;
          display: none;
        }
        .loader img{
          padding: 10px;
          height: 60px;
          width: 60px;
          color:white;
        }
        .loader p{
          /*color:white;*/
        }
        .overlay .loader{
          background-color: white;
          opacity: 0.9;
          z-index: 1;
          position: absolute;
        }

        </style>
        
        <div class="loader" style="">
        <center>
        <img src="<?php echo base_url()?>assets/loaders/indicator-big.gif" style=""><p></p>
        </center>
        </div>
        
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Kerja<span class="required">*</span></label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <select class="select2_single form-control" tabindex="-1" style="width: 240px;" id="single2" name="single2">
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
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value=<?php echo $row['email'] ?> readonly>
          </div>
        </div>

        <div class="item form-group">
          <label for="password" class="control-label col-md-3">Ubah Password</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required" placeholder="Masukan Password Baru" value=<?php echo $row['password'] ?> >
          </div>
        </div>

        <div class="item form-group">
          <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Ulangi Password</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required" placeholder="Ulangi Password Baru" value=<?php echo $row['password'] ?>>
          </div>
        </div>
        
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button id="send" type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
            <a href="<?php echo base_url('responden');?>" class="btn btn-danger" tabindex="5"><i class="fa fa-remove"> </i> Batal</a>
          </div>
        </div>
      </form>
<?php echo $this->load->view('js'); ?>
</html>
</body>