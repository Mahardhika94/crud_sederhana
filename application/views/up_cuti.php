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
                <h3 class="panel-title">Update Data Cuti</h3>
              </div>
              <div class="panel-body">
                <form role="form" method="post" action="<?php echo site_url('Index/up_cuti'); ?>">
              <div class="form-group">
                <label class="control-label">id</label>
                <input class="form-control" placeholder="insert id cuti" type="text" name="id" value="<?php echo $id; ?>">
				<input class="form-control" placeholder="insert id cuti" type="text" name="id2" style="display:none" value="<?php echo $id; ?>">
              </div>
              <div class="form-group">
                <label class="control-label">nik</label>
                <input class="form-control" name="nik" placeholder="insert nik" type="text" value="<?php echo $nik; ?>">
              </div>
              
              <div class="form-group">
                <label class="control-label">Tanggal Mulai Cuti</label>
                <input class="form-control" name="t_mulai" placeholder="insert Tanggal Lahir" type="text" id="t_mulai" value="<?php echo $tgl_cuti; ?>">
              </div>
			   <div class="form-group">
                <label class="control-label">lama cuti</label>
                <input class="form-control" name="lama_cuti" placeholder="insert lama cuti" type="number" value="<?php echo $lama_cuti; ?>">
              </div>
			  <div class="form-group">
                <label class="control-label">catatan</label>
                <textarea class="form-control" name="note"> <?php echo $catatan; ?></textarea>
              </div>
             
             
          
          </div>
          <div class="modal-footer">
            <a class="btn btn-default" data-dismiss="modal">Close</a>
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
		   
			
		   $('#t_mulai').datepicker({
      	format: "yyyy-mm-dd",
      	autoclose: true,
      	todayHighlight: true,
		minDate:'-1d',
		disabled: true
      });  
	  
	  
		   });
		   
		 
	</script>
  

</body></html>