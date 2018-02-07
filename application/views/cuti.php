<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Pretty-Header.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">

  <title>Data Pekerja</title>
 

  </head><body data-spy="scroll">
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>Crud Sederhana</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
 <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="<?php echo site_url('Index/Index'); ?>">Home</a>
            </li>
            <li>
              <a href="<?php echo site_url('Index/pekerja'); ?>">Pekerja</a>
            </li>
            <li  class="active">
              <a  href="<?php echo site_url('Index/cuti'); ?>">Cuti Kerja</a>
            </li>
          </ul>
		  </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <a class="btn btn-primary" id="add">Add Data</a>
          </div>
          <div class="col-md-4 text-center">
            <h2 class="text-danger text-center">Data Cuti Kerja</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
		  <div class="table-responsive">
            <table class="table table-responsive table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>id</th>
                  <th>nik</th>
                  <th>tgl_mulai</th>
                  <th>lama Cuti</th>
                  <th>Catatan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
			  <?php  foreach($data as $row){
					
				  ?>
                <tr>
                  <td><?php echo $row->id; ?></td>
                  <td><?php echo $row->nik; ?></td>
                  <td><?php echo $row->tgl_mulai; ?></td>
                  <td><?php echo $row->lama_cuti; ?></td>
                  <td><?php echo $row->catatan; ?></td>
                  <td>
                    <a href="<?php echo site_url('Index/del_cuti/'. $row->id .'' ); ?>" class="btn btn-danger">Hapus</a>
                    <a href="<?php echo site_url('Index/getdet_cuti/'. $row->id .''); ?>" class="btn btn-warning">Update</a>
                  </td>
                </tr>
               <?php } ?>
              </tbody>
            </table>
			</div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="md_add">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Inser Data Cuti</h4>
          </div>
          <div class="modal-body">
            <form role="form" method="post" action="<?php echo site_url('Index/add_cuti'); ?>">
              <div class="form-group">
                <label class="control-label">id</label>
                <input class="form-control" placeholder="insert id cuti" type="text" name="id">
              </div>
              <div class="form-group">
                <label class="control-label">nik</label>
                <input class="form-control" name="nik" placeholder="insert nik" type="text">
              </div>
              
              <div class="form-group">
                <label class="control-label">Tanggal Mulai Cuti</label>
                <input class="form-control" name="t_mulai" placeholder="insert Tanggal Lahir" type="text" id="t_mulai">
              </div>
			   <div class="form-group">
                <label class="control-label">lama cuti</label>
                <input class="form-control" name="l_cuti" placeholder="insert lama cuti" type="number">
              </div>
			  <div class="form-group">
                <label class="control-label">catatan</label>
                <textarea class="form-control" name="note"> </textarea>
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
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script>
	       $(document).ready(function() {
		   
           // $('#mhstbl').dataTable();	
             $('#add').click(function(){
				$('#md_add').modal('show');
             });
			
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