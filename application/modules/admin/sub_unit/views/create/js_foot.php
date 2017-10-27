
  <!-- form validation -->
  <script src="<?php echo base_url();?>assets/gantella/js/validator/validator.js"></script>
  
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

  <script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
      .on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('form').submit(function(e) {
      e.preventDefault();
      var submit = true;
      // var jsonObj = $(this).serialize();
      // evaluate the form using generic validaing
      if (!validator.checkAll($(this))) {
        submit = false;
        // alert("gagal");
      }
      else{
        // if(submit)

        // (submit)
        this.submit();

      //   var jsonObj = {
      //     nama          : $("#nama").val(),
      //     alamat        : $("#alamat").val(),
      //     telepon       : $('#telephone').val(),
      //     koordinator   : $("#koordinator").val(),
      //     mesin         : $("#mesin_peralatan").val(),
      //     potensi_ikm   : $("#potensi_ikm").val(),
      //   }

      // $.ajax({
      //   type : "POST",
      //   url  : "<?php echo base_url('sub_unit/create');?>",
      //   data : {jsonObj : jsonObj},
      //   cache: false,
      //   beforeSend:function()
      //   {
      //     setTimeout($('.loader').show(),1000);
      //     $('.loader p').html("Loading");
      //   },
      //   success:function(data){
      //     // location.reload(true);
      //     // alert(data);
      //     // $('.notif').html("<div class='alert alert-success'></div>");
      //     // setTimeout($('.alert alert-success').show(),1000);

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
  