<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
	<title>Update Pekerja</title>
  </head><body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Update Pekerja</h3>
              </div>
              <div class="panel-body">
                <form role="form" method="post" action="<?php echo site_url('Index/up_pekerja'); ?>">
              <div class="form-group">
                <label class="control-label">Nik</label>
                <input class="form-control" placeholder="insert NIK" type="text" name="nik" value="<?php echo $nik;?>">
				 <input class="form-control" placeholder="insert NIK" type="text" name="nik2" value="<?php echo $nik;?>" style="display:none">
              </div>
              <div class="form-group">
                <label class="control-label">Nama</label>
                <input class="form-control" name="nama" placeholder="insert nama" type="text" value="<?php echo $nama;?>">
              </div>
              <div class="form-group">
                <label class="control-label">Alamat</label>
                <input class="form-control" name="alamat" placeholder="insert alamat" type="text" value="<?php echo $alamat;?>">
              </div>
              <div class="form-group">
                <label class="control-label">Tanggal Lahir</label>
                <input class="form-control" name="t_lahir" placeholder="insert Tanggal Lahir" type="text" id="t_lahir" value="<?php echo $tgl_lahir;?>">
              </div>
              <div class="form-group">
                <label class="control-label">tanggal Masuk</label>
                <input class="form-control" name="t_masuk" placeholder="Tanggal Masuk" type="text" id="t_msk" value="<?php echo $tgl_msk;?>">
              </div>
             
          
          </div>
          <div class="modal-footer">
            <a class="btn btn-default" data-dismiss="modal" onclick="window.history.back()">Back</a>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
		    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
<script>
	       $(document).ready(function() {
		   
           
		   $('#t_lahir').datepicker({
      	format: "yyyy-mm-dd",
      	autoclose: true,
      	todayHighlight: true,
		minDate:'-1d',
		disabled: true
      });  
	  
	   $('#t_msk').datepicker({
      	format: "yyyy-mm-dd",
      	autoclose: true,
      	todayHighlight: true,
		minDate:'-1d',
		disabled: true
      });  
		   });
		   
		 
	</script>
</body></html>