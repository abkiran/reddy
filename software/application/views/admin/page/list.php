	<div class="contentpanel">
	  <!--\\\\\\\ contentpanel start\\\\\\-->
	<?php $this->load->view('admin/html/breadcrum', $this->data); ?>
	  <div class="container clear_both padding_fix">
		<!--\\\\\\\ container  start \\\\\\-->
	  <!-- <div class="alert alert-success"> <strong>Well done!</strong> You successfully read <a class="alert-link" href="#">this important alert message</a>. </div> -->
	  <div id="main-content">
	<div class="page-content">
	  
	  
	  <div class="row">
		<div class="col-md-12">
		  <div class="block-web">
		   <div class="header">
			  <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="refresh" href="#"><i class="fa fa-repeat"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
			  <h3 class="content-header">Page List</h3>
			</div>
		 <div class="porlets-content">
			<div class="table-responsive">
				<table  class="display table table-bordered table-striped" id="dynamic-table">
				  <thead>
					<tr>
					  <th>Page Name</th>
					  <th>Title</th>
					  <th></th>
					</tr>
				  </thead>
				  <tbody>
				  <?php for ( $i = 0; $i < $rows[0]['NROWS']; $i++ ) { ?>
					<tr class="gradeX" id="row-<?php echo $rows[$i]['page_id']; ?>">
					  <td><a href="<?php echo site_url(); ?>/admin/index/modify/<?php echo $rows[$i]['page_id']; ?>"><?php echo $rows[$i]['name']; ?></a></td>
					  <td><?php echo $rows[$i]['title']; ?></td>
					  <td><a class="close-down remove" id="<?php echo $rows[$i]['page_id']; ?>" href="#"><i class="fa fa-times"></i></a> </td>
					</tr>
					<?php } ?>
				  </tfoot>
				</table>
			  </div><!--/table-responsive-->
			</div><!--/porlets-content-->
			
			
		  </div><!--/block-web--> 
		</div><!--/col-md-12--> 
	  </div><!--/row-->
	  
		</div><!--/page-content end--> 
	</div><!--/main-content end--> 
	</div>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery-2.1.0.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/data-tables/jquery.dataTables.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/data-tables/DT_bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jPushMenu.js"></script> 
	
<script>
$(document).ready(function(){   

    $(".remove").click(function()
    {
	var id=$(this).attr('id');
     $.ajax({
         type: "POST",
         url: "<?php echo site_url(); ?>/admin/removepage/", 
         data: {id: id},
         success: 
              function(data){
                alert(data);  //as a debugging message.
				$("#row-"+id).fadeOut("slow");
              }
          });// you have missed this bracket
     return false;
 });
 });
</script>