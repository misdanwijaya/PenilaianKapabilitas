<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Masuk | Aplikasi Penilaian Kapabilitas</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/dashgum/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/dashgum/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/dashgum/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dashgum/css/style-responsive.css" rel="stylesheet">

      <!-- Bootstrap core CSS -->

	<link href="<?php echo base_url();?>assets/gantella/css/bootstrap.min.css" rel="stylesheet">

  	<link href="<?php echo base_url();?>assets/gantella/fonts/css/font-awesome.min.css" rel="stylesheet">
 	<link href="<?php echo base_url();?>assets/gantella/css/animate.min.css" rel="stylesheet">

  	<!-- Custom styling plus plugins -->
  	<link href="<?php echo base_url();?>assets/gantella/css/custom.css" rel="stylesheet">
  	<link href="<?php echo base_url();?>assets/gantella/css/icheck/flat/green.css" rel="stylesheet">

  	<!-- select2 -->
  	<link href="<?php echo base_url();?>assets/gantella/css/select/select2.min.css" rel="stylesheet">

  	<script src="<?php echo base_url();?>assets/gantella/js/jquery.min.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
          	  	<?php if($this->session->flashdata('success')){?>
                      <div class="alert alert-info alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <center>
                          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                          <span class="sr-only">Success:</span>
                          Registrasi Berhasil silahkan login dengan email dan password yang telah dibuat 
                          </center>
                      </div>        
                    <?php }?>
                  
                    <?php if($this->session->flashdata('error')){?>
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <center>
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        Registrasi gagal !! email sudah ada 
                        </center>
                    </div>        
                  <?php }?>

		      <form class="form-login" action="<?php echo base_url();?>login" method="post" style="height:440px">
		        <h2 class="form-login-heading">Silahkan Masuk</h2>
		        <div class="login-wrap">
		        <center>
					   <?php if($this->session->flashdata('login_error') OR form_error('username_email') == TRUE OR form_error('password') == TRUE) { ?>
            <div class="alert alert-danger">E-mail atau password salah</div>
          
            <?php } ?>
		        </center>
                <div class="form-group has-feedback">
                    <input type="text" name="username_email" class="form-control" placeholder="E-mail" autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>    
		            <br>
                <div class="form-group has-feedback">
                        <input type="password" name="passwords" class="form-control" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
		            <label class="checkbox">
		                <span class="pull-right">
		                    <!--<a data-toggle="modal" href="login.html#myModal"> lupa password ?</a>-->
		
		                </span>
		            </label>

		            <button data-loading-text="Please wait..." class="btn btn-primary btn-block" type="submit"><i class="glyphicon glyphicon-log-in"></i> MASUK</button>
		            <hr>
		            
		             <div class="registration" style="margin-top: 35px">
		                Belum mempunyai akun ?<br/>
                    <a data-toggle="modal" data-target=".bs-example-modal-lg" style="cursor: pointer;">
		                <!-- <a href="daftar/registrasi" style="cursor: pointer;"> -->
		                    Buat akun baru
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Lupa Password -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Lupa Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Masukan Alamat e-mail Anda.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-danger" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		      </form>	  	

		      		<!-- Registrasi Akun-->
              <div class="overlay"> 
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="width: 600px;margin-left: 160px">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Penilaian Kapabiltas Pelayanan</h4>
                      </div>
                      <div class="modal-body">
                  			<!-- page content -->
      <div class="right_col" role="main">

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><small> Form Registrasi Akun</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    
                  <form method="post" action="<?php echo site_url('login/daftar')?>" id="form_register" class="form-horizontal form-label-left" novalidate>


                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Lengkap <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="nama" placeholder="Masukan Nama" required="required" type="text">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat Lahir <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="tempat_lahir" class="form-control col-md-7 col-xs-12" name="tempat_lahir" placeholder="Masukan Tempat Lahir" required="required" type="text">
                      </div>
                    </div>

                         <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="birthday">Tanggal Lahir <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="birthday" name="birthday" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Masukan Tanggal Lahir">
                          </div>
                        </div>

                        <script type="text/javascript">
        		            $(document).ready(function() {
        		              $('#birthday').daterangepicker({
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
    				    	    	  var usia = $("#usia").val(years + " Tahun");

    					           });
    		              });
    		                </script>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usia">Usia <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="usia" class="form-control col-md-7 col-xs-12" name="usia" placeholder="Usia Anda Adalah..." required="required" type="text" value="">
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
                        <select class="select2_single form-control" tabindex="0" style="width: 240px;" id="single2" name="single2">
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
                        <button id="send" type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Daftar</button>
                        <button type="submit" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-remove"></i> Batal</button>
                      </div>
                    </div>
                  </form>

                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

                      </div>

                    </div>
                  </div>
                </div>
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/dashgum/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/dashgum/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/dashgum/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/dashgum/img/cool-background.jpg", {speed: 500});
    </script>
    <script type='text/javascript' src="<?php echo base_url();?>assets/core/js/jquery-2.0.3.min.js"></script>
	<script type='text/javascript' src="<?php echo base_url();?>assets/core/js/bootstrap.min.js"></script>
	<script>
  		$('.login').on('click', function(){
      		$(this).button('loading');
  		});
	</script>

  	<!-- bootstrap progress js -->
  	<script src="<?php echo base_url();?>assets/gantella/js/progressbar/bootstrap-progressbar.min.js"></script>
  	<script src="<?php echo base_url();?>assets/gantella/js/nicescroll/jquery.nicescroll.min.js"></script>

 	<script src="<?php echo base_url();?>assets/gantella/js/icheck/icheck.min.js"></script>
 	<script src="<?php echo base_url();?>assets/gantella/js/validator/validator.js"></script>
 	
 	<!-- pace -->
    <script src="<?php echo base_url();?>assets/gantella/js/pace/pace.min.js"></script>
  	<script src="<?php echo base_url();?>assets/gantella/js/custom.js"></script>


  <!-- select2 -->
  <script>
  	// $(document).ready(function() {
	  // $(".js-example-basic-single").select2();
	// });
    $(document).ready(function() {
      $(".select2_single").select2({
        placeholder: "Select a state",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        maximumSelectionLength: 4,
        placeholder: "With Max Selection limit 4",
        allowClear: true
      });
    });
  </script>
  <!-- /select2 -->


  	 <!-- select2 -->
  	<script src="<?php echo base_url();?>assets/gantella/js/select/select2.full.js"></script>
  	 
  	 <!-- parsely -->
 	<script type="text/javascript" src="<?php echo base_url();?>assets/gantella/js/parsley/parsley.min.js"></script>
 			            
 	
 	<!-- daterangepicker -->
  	<script type="text/javascript" src="<?php echo base_url();?>assets/gantella/js/moment/moment.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url();?>assets/gantella/js/datepicker/daterangepicker.js"></script>


 	<script type="text/javascript">
 
 	$(document).ready(function() {
      $(".select2_single").select2({
        placeholder: "Select a state",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        maximumSelectionLength: 4,
        placeholder: "With Max Selection limit 4",
        allowClear: true
      });
    });

 	 // <!-- form validation -->
    $(document).ready(function() {
      $.listen('parsley:field:validate', function() {
        validateFront();
      });
      $('#demo-form .btn').on('click', function() {
        $('#demo-form').parsley().validate();
        validateFront();
      });
      var validateFront = function() {
        if (true === $('#demo-form').parsley().isValid()) {
          $('.bs-callout-info').removeClass('hidden');
          $('.bs-callout-warning').addClass('hidden');
        } else {
          $('.bs-callout-info').addClass('hidden');
          $('.bs-callout-warning').removeClass('hidden');
        }
      };
    });

    $(document).ready(function() {
      $.listen('parsley:field:validate', function() {
        validateFront();
      });
      $('#demo-form2 .btn').on('click', function() {
        $('#demo-form2').parsley().validate();
        validateFront();
      });
      var validateFront = function() {
        if (true === $('#demo-form2').parsley().isValid()) {
          $('.bs-callout-info').removeClass('hidden');
          $('.bs-callout-warning').addClass('hidden');
        } else {
          $('.bs-callout-info').addClass('hidden');
          $('.bs-callout-warning').removeClass('hidden');
        }
      };
    });
    try {
      hljs.initHighlightingOnLoad();
    } catch (err) {}
  </script>

  <script type="text/javascript">
  // <!-- form validation -->

 	  // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('#form_register')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);


    $('.multi.required')
      .on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('#form_register').submit(function(e) {
      e.preventDefault();
      var submit = true;
      // evaluate the form using generic validaing
      if (!validator.checkAll($(this))) {
        submit = false;
      }
      else{

        this.submit();

      //   var jsonObj = {
      //     name          : $("#name").val(),
      //     tempat_lahir  : $("#tempat_lahir").val(),
      //     birthday      : $("#birthday").val(),
      //     usia          : $("#usia").val(),
      //     alamat        : $("#alamat").val(),
      //     jenis_kelamin : $("input[type='radio']:checked").val(),
      //     pendidikan    : $("#single1 option:selected").val(),
      //     pekerjaan     : $("input[type='checkbox']:checked").val(),
      //     sub_unit      : $("#single2 option:selected").val(),
      //     email         : $('#email').val(),
      //     password      : $('#password').val(),
      //     repeat        : $('#password2').val(),
      //     telepon       : $('#telephone').val()
      //   }

      // $.ajax({
      //   type : "POST",
      //   url  : "<?php echo base_url();?>login/daftar",
      //   data : {jsonObj : jsonObj},
      //   cache: false,
      //   beforeSend:function()
      //   {
      //     setTimeout($('.loader').show(),100000);
      //     $('.loader p').html("Loading");
      //   },
      //   success:function(data){
      //     // location.reload(true);
      //     alert(data);
      //   },
      //   error:function(data){
      //     alert("error");
      //   }
      //   // dataType : "json"
      // });
    }
     
      return false;
  
    });

    /* FOR DEMO ONLY */
    $('#vfields').change(function() {
      $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function() {
      validator.defaults.alerts = (this.checked) ? false : true;
      if (this.checked)
        $('form .alert').remove();
    }).prop('checked', false);
  </script>
  </body>
</html>
