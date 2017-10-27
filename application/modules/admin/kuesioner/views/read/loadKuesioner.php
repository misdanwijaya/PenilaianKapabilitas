<?php error_reporting(0);?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php echo $this->load->view('config/css')?>
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/core/css/.css"> -->
  <style type="text/css">
.pagination {
  margin: 20px 0;
}
.pagination ul {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
  margin-left: 0;
  margin-bottom: 0;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}
.pagination ul > li {
  display: inline;
}
.pagination ul > li > a,
.pagination ul > li > span {
  float: left;
  padding: 4px 12px;
  line-height: 20px;
  text-decoration: none;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-left-width: 0;
}
.pagination ul > li > a:hover,
.pagination ul > li > a:focus,
.pagination ul > .active > a,
.pagination ul > .active > span {
  background-color: #f5f5f5;
}
.pagination ul > .active > a,
.pagination ul > .active > span {
  color: #999999;
  cursor: default;
}
.pagination ul > .disabled > span,
.pagination ul > .disabled > a,
.pagination ul > .disabled > a:hover,
.pagination ul > .disabled > a:focus {
  color: #999999;
  background-color: transparent;
  cursor: default;
}
.pagination ul > li:first-child > a,
.pagination ul > li:first-child > span {
  border-left-width: 1px;
  -webkit-border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
  border-top-left-radius: 4px;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  border-bottom-left-radius: 4px;
}
.pagination ul > li:last-child > a,
.pagination ul > li:last-child > span {
  -webkit-border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
  border-top-right-radius: 4px;
  -webkit-border-bottom-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
  border-bottom-right-radius: 4px;
}
.pagination-centered {
  text-align: center;
}
.pagination-right {
  text-align: right;
}
.pagination-large ul > li > a,
.pagination-large ul > li > span {
  padding: 11px 19px;
  font-size: 17.5px;
}
.pagination-large ul > li:first-child > a,
.pagination-large ul > li:first-child > span {
  -webkit-border-top-left-radius: 6px;
  -moz-border-radius-topleft: 6px;
  border-top-left-radius: 6px;
  -webkit-border-bottom-left-radius: 6px;
  -moz-border-radius-bottomleft: 6px;
  border-bottom-left-radius: 6px;
}
.pagination-large ul > li:last-child > a,
.pagination-large ul > li:last-child > span {
  -webkit-border-top-right-radius: 6px;
  -moz-border-radius-topright: 6px;
  border-top-right-radius: 6px;
  -webkit-border-bottom-right-radius: 6px;
  -moz-border-radius-bottomright: 6px;
  border-bottom-right-radius: 6px;
}
.pagination-mini ul > li:first-child > a,
.pagination-small ul > li:first-child > a,
.pagination-mini ul > li:first-child > span,
.pagination-small ul > li:first-child > span {
  -webkit-border-top-left-radius: 3px;
  -moz-border-radius-topleft: 3px;
  border-top-left-radius: 3px;
  -webkit-border-bottom-left-radius: 3px;
  -moz-border-radius-bottomleft: 3px;
  border-bottom-left-radius: 3px;
}
.pagination-mini ul > li:last-child > a,
.pagination-small ul > li:last-child > a,
.pagination-mini ul > li:last-child > span,
.pagination-small ul > li:last-child > span {
  -webkit-border-top-right-radius: 3px;
  -moz-border-radius-topright: 3px;
  border-top-right-radius: 3px;
  -webkit-border-bottom-right-radius: 3px;
  -moz-border-radius-bottomright: 3px;
  border-bottom-right-radius: 3px;
}
.pagination-small ul > li > a,
.pagination-small ul > li > span {
  padding: 2px 10px;
  font-size: 11.9px;
}
.pagination-mini ul > li > a,
.pagination-mini ul > li > span {
  padding: 0 6px;
  font-size: 10.5px;
}
.pager {
  margin: 20px 0;
  list-style: none;
  text-align: center;
  *zoom: 1;
}
.pager:before,
.pager:after {
  display: table;
  content: "";
  line-height: 0;
}
.pager:after {
  clear: both;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #f5f5f5;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #999999;
  background-color: #fff;
  cursor: default;
}
<style>
        .box-soal{
          border:1px solid #999;
          border-radius:5px;
          box-shadow: 0 2px 3px 1px #444;
          padding:20px;
          background:#fff;
          line-height:20px;
          margin-top:5px;
          
        }
        .pertanyaan{
          font-weight:bold;
          font-family:inherit;
          font-size:16px;
          text-align:justify;
        }
        .answer{
          font-family:inherit;
          font-size:15px;
          margin-left:10px;
        }
        </style>

  </style>
</head>
<body>
    <!-- loaders -->
      <div class="loaders"></div>
    <!-- /loaders -->
    <div class="x_title">
      <h2>Daftar Pertanyaan</h2>
      
      <div class="clearfix"></div>
    </div>
    
    <div class="x_content">
      
      <div class="box-soal">
      <?php 
        $no=1; 
        foreach ($kuesioner->result() as $key) {
          //$data['sub'] = core::getJoin("kuesioner k","sub_unit s","s.id = k.id_subunit","default",array("k.id_subunit" => $key->id_subunit));
          //foreach ($data['sub']->result() as $isi) {
          //}
        $A = $key->A;
        $B = $key->B;
        $C = $key->C;
        $D = $key->D;
        $E = $key->E;
        $detailSurvey = core::getWhere("detail_survey","default",array(
            'id_survey'=>$id_max,
            'nomor_soal'=>$key->id,
            'spesific_goal' =>$key->id_area_proses_spesifik,
            ));
            foreach ($detailSurvey->result() as $row) {
                $jawaban = $row->jawaban;          
            };
      ?>   
        <div class="pertanyaan">
          <!--<?php echo "Kode unit kerja ".$key->id_subunit; ?>
          </br>-->
          <?php echo $no++.".".$key->pertanyaan;?>
        </div>

        <div class="answer">
          <div class="radio">A
            <label>
              <input type="radio" value="<?php echo $key->A?>" sg= "<?php echo $key->id_area_proses_spesifik?>" pk="<?php echo $key->id ?>" tipe="A" name="q<?php echo $key->id?>" required <?php if($jawaban==$A) echo "checked";?>><?php echo $A?>
            </label>
          </div>

          <div class="radio">B
            <label>
              <input type="radio" value="<?php echo $key->B?>" sg= "<?php echo $key->id_area_proses_spesifik?>" pk="<?php echo $key->id ?>" tipe="B" name="q<?php echo $key->id?>" required <?php if($jawaban==$B) echo "checked";?>><?php echo $B?>
            </label>
          </div>

          <div class="radio">C
            <label>
              <input type="radio" value="<?php echo $key->C?>" sg= "<?php echo $key->id_area_proses_spesifik?>" pk="<?php echo $key->id ?>" tipe="C" name="q<?php echo $key->id?>" required <?php if($jawaban==$C) echo "checked";?>><?php echo $C?>
            </label>
          </div>

          <div class="radio">D
            <label>
              <input type="radio" value="<?php echo $key->D?>" sg= "<?php echo $key->id_area_proses_spesifik?>" pk="<?php echo $key->id ?>" tipe="D" name="q<?php echo $key->id?>" required <?php if($jawaban==$D) echo "checked";?>><?php echo $D?>
            </label>
          </div>

          <div class="radio">E
            <label>
              <input type="radio" value="<?php echo $key->E?>" sg= "<?php echo $key->id_area_proses_spesifik?>" pk="<?php echo $key->id ?>" tipe="E" name="q<?php echo $key->id?>" required <?php if($jawaban==$E) echo "checked";?>><?php echo $E?>
            </label>
          </div>


        </div><br>    
      <?php }; ?>
    <?php echo $this->pagination->create_links(); ?>
        </div>
    
    <?php 
        //$xa = core::getAll('kuesioner','default');
        $xa = core::selectWhere('kuesioner','default',array('id_subunit'=>$unit));
        $jml_soal= ceil(($xa->num_rows()/10)*2);
        $pg = ($this->uri->segment(3)/5)+1;
        if($pg<$jml_soal){

        }else{?>
          <a href="<?php echo base_url();?>kuesioner/submited/"><button class="btn btn-primary" style="float: right;position: relative;top:-50px"><i class="fa fa-check-square"></i> Selesai</button></a>

        <?php } ?>
          
        <script type="text/javascript">
        $(document).ready(function(){
          $('input[type="radio"]').change(function(){
            var jsonObj = {
                id_survey : <?php echo $id_max?>,
                nomor_soal: $(this).attr("pk"),
                spesific_goal:$(this).attr("sg"),
                jawaban   : $(this).val(),
                tipe : $(this).attr("tipe"),
            }

            $.ajax({
              type : "post",
              url  : "<?php echo base_url('kuesioner/simpanjawaban')?>",
              data : {
                  jsonObj:jsonObj
              },
              success: function(data){
                // alert(data);
              },
              error:function(data){
                alert('eror');
              },      
          });
        });
      });
      </script>
                      
<?php echo $this->load->view('js'); ?>
</html> 
</body>