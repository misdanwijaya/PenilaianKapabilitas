<script type='text/javascript'>
$(function(){
 $("[data-confirm]").on("click submit", function(){
    return confirm($(this).data("confirm"));
 }); 
});
</script>

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
