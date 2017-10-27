       
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
      }
      else{
        add_item();
      
      return false;
    }     
  
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
  

  <script type="text/javascript">
        
        $(document).ready(function(){
          $(document).on('click', '#hapus', function(e) {
            var index = $('#hapus').index(this);  
            $('.baris').eq(index).remove();
            // alert("haha");
          });
        });

        function add_item()
        {         
          $(".details").show();
          var tanggal = $('#tanggal');         
          var start_time = $('#start_time');         
          var doe_time = $('#doe_time');         
          var durasi = $('#durasi');         
          var count = $('.pk[nilai="'+tanggal.val()+'"]').length;

          if (count==0){
            $('#datatable-responsive tbody').append(
              "<tr class='baris'>" +
              "<td style='display:none' class='pk' nilai="+tanggal.val()+" >" + tanggal.val() + "</td>" +
              "<td class='tanggal'>" + "<input type='text' value=" + tanggal.val() +" id='tgl' class='form-control'>" + "</td>" +
              "<td class='start_time'>" + "<input type='text' value=" + start_time.val() +" id='start' class='form-control'>" + "</td>" +
              "<td class='doe_time'>" + "<input type='text' value=" + doe_time.val() +" id='doe' class='form-control'>" + "</td>" +
              "<td class='durasi'>" + "<input type='text' value=" + durasi.val() +" id='duras' class='form-control' >" + "</td>" +
              "<td class='hapus'><center><button class='btn btn-danger' id='hapus'>X</button></center></td>" +
              "</tr>"
            );
            tanggal.val("").focus;
            durasi.val("");
          }
          else{
              alert("jadwal sudah ada");  
          }
        }

        function kirim(){
          var jml = $('.baris').length;
          var jsonObj = [];
          
          $(".baris").each(function() {
          var tanggal = $(this).find('#tgl').val();
          var start_time = $(this).find('#start').val();
          var doe_time = $(this).find('#doe').val();
          var durasi = $(this).find('#duras').val();
          item = {}
          item ["tanggal"] = tanggal;
          item ["start_time"] = start_time;
          item ["doe_time"] = doe_time;
          item ["durasi"] = durasi;
          jsonObj.push(item);
          });
             
             $.ajax({
              type : "post",
              url  : "<?php echo base_url('jadwal/create') ?>", 
              data : {
                jsonObj :jsonObj,
                // head : head
              },
              cache : false,
              // dataType : "json",
              success: function(msg){
                  // alert(msg);
                  document.location = "<?php echo base_url('jadwal')?>"; 
              },
              error:function(msg){
                alert("error js");
                // alert('Harus Diisi!!');
              }
            });
          }
        </script>

        <script type="text/javascript">
          $(function(){
            $("#send").click(function(){
              document.location = "<?php echo base_url('jadwal')?>"; 
            });
          });

        </script>

        <!-- datetimePicker -->
        <script src="<?php echo base_url()?>assets/assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo base_url()?>assets/assets/js/formsInit.js"></script>
        <script>
            $(function () { formInit(); });
        </script>
              
     <!--END PAGE LEVEL SCRIPT-->
