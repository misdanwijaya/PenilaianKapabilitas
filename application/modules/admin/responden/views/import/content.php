<?php error_reporting(0);?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php echo $this->load->view('config/css')?>
</head>
<body>
    <!-- loaders -->
      <div class="loaders"></div>
    <!-- /loaders -->                    
    <div class="x_title">
      <h2 style="margin-top: 10px" >Import Data Responden</h2>
      <div class="clearfix"></div>
    </div>
    <?php if($this->session->flashdata('success')){?>
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Hapus Data Respoden Berhasil 
        </div>        
        <!-- <div class="alert alert-success" role="alert">
           <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
          Hapus Data Respoden Berhasil 
        </div> -->
      <?php }?>
      
    <div class="x_content">
      <form action="<?php echo base_url();?>responden/import" method="post" accept-charset="utf-8" enctype="multipart/form-data">
          <table width="100%" class="table-form">
          
              <input name="hidden_input" value="hidden_val" type="hidden">
                   
              <tr>
                <td width="20%">File Data (*.xls)</td>
                <td><input type="file" name="userfile"  style="width: 300px" class="form-control" tabindex="3"></td>
              </tr>
                      <tr>
                        <td colspan=2>
                        <p style="margin-top: 20px">
                          * Berikut ini adalah format import data (*.xls) <br>
                          ** data dimulai dari baris ke 2 (baris pertama berisi header) <br>
                          ** berikut ini merupakan urutan kolom beserta nilainya
                        </p>  
                        </td>                        
                      </tr>
                      <tr>
                        <td bgcolor="mediumspringgreen" height="30">Urutan Kolom</td>
                        <td bgcolor="mediumspringgreen">Nama Kolom</td>
                        <td bgcolor="mediumspringgreen">Keterangan Nilai</td>
                      </tr>
                      <tr>
                        <td height="30">Kolom ke 1</td>
                        <td>Nama Responden</td>
                        <td>Nama Lengkap Responden</td>
                      </tr>
                      
                      <tr>
                        <td height="30">Kolom ke 2</td>
                        <td>Tempat Lahir</td>
                        <td>Tempat Lahir Responden</td>
                      </tr>
                      
                      <tr>
                        <td height="30">Kolom ke 3</td>
                        <td>Tanggal Lahir</td>
                        <td>Tanggal Lahir Responden dengan format (YYYY-MM-DD)</td>
                      </tr>
                      
                      <tr>
                        <td height="30">Kolom ke 4</td>
                        <td>Usia</td>
                        <td>Usia Responden</td>
                      </tr>
                      
                      <tr>
                        <td height="30">Kolom ke 5</td>
                        <td>Alamat</td>
                        <td>Alamat Lengkap Responden</td>
                      </tr>
                      
                      <tr>
                        <td height="30">Kolom ke 6</td>
                        <td>Jenis Kelamin</td>
                        <td>Jenis Kelamin Responden</td>
                      </tr>
                      
                      <tr>
                        <td height="30">Kolom ke 7</td>
                        <td>Jenjang (Jenjang pendidikan terakhir pengguna)</td>
                        <td>Pendidikan terakhir responden</td>
                      </tr>
                       
                      <tr>
                        <td height="30">Kolom ke 8</td>
                        <td>Sub Unit</td>
                        <td>
                        <?php 
                          $subunit = core::getAll("sub_unit","default");
                          foreach ($subunit->result() as $key) {
                            echo "(".$key->id.")" ." ". $key->sub_unit."<br>";
                          }
                        ?>* isi dengan angka sub unit</td>
                      </tr>
                    
                      <tr>
                        <td height="30">Kolom ke 9</td>
                        <td>Email</td>
                        <td>Email Responden</td>
                      </tr>  
                      
                      <tr>
                        <td height="30">Kolom ke 10</td>
                        <td>Password</td>
                        <td>Password email responden</td>
                      </tr>
                      
                      <tr>
                        <td colspan="2">
                        <br>
                        <button type="submit" class="btn btn-primary" name="upload" tabindex="4"><i class="fa fa-hdd-o"> </i> Upload</button>
                        <a href="<?php echo base_url('responden');?>" class="btn btn-success" tabindex="5"><i class="fa fa-arrow-circle-left"> </i> Kembali</a>
                        </td>
                      </tr>
        </table>        
      </form>  
       <!-- <p class="text-muted font-13 m-b-30">
        Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
      </p> -->
      
<?php echo $this->load->view('config/include'); ?>
</html>
</body>