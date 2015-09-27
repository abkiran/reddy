 <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <?php $this->load->view('admin/html/breadcrum', $this->data); ?> 
        <!--\\\\\\\ container  start \\\\\\-->
	<?php if ( $page == 'add' ) { ?>
	<div class="container clear_both padding_fix">
      <div class="row">
        <div class="col-md-10">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Add a Diet item</h3>
            </div>
            <div class="porlets-content">
              <form action="" method='post' class="form-horizontal row-border">
			  <input type=hidden name='do' value="save">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Diet Code</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="diet_code" >
                  </div>
                </div><!--/form-group-->
				<div class="form-group">
                  <label class="col-sm-3 control-label">Diet Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="diet_name" >
                  </div>
                </div><!--/form-group-->
				<div class="form-group">
                  <label class="col-sm-3 control-label">Add One More Item</label>
                  <div class="col-sm-9">
                    <input type="checkbox" class="form-control" name="add_more" > 
                  </div>
                </div><!--/form-group-->
				<div class="bottom center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </div>
			</form>
		</div><!--/porlets-content-->
	  </div><!--/block-web--> 
	</div><!--/col-md-6-->
	</div>
</div>
<?php } else {
	if ( $rows['NROWS'] > 0 ) {
  ?>
	<div class="container clear_both padding_fix">
      <div class="row">
        <div class="col-md-10">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Update a Diet item</h3>
            </div>
            <div class="porlets-content">
              <form action="" method='post' class="form-horizontal row-border">
			  <input type=hidden name='do' value="update">
			  <input type=hidden name='id' value="<?php echo $id; ?>">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Diet Code</label>
                  <div class="col-sm-9">
                    <input type="text" name="diet_code" value="<?php echo $rows[0]['diet_code']; ?>" class="form-control">
                  </div>
                </div><!--/form-group-->
				<div class="form-group">
                  <label class="col-sm-3 control-label">Diet Name</label>
                  <div class="col-sm-9">
                    <input type="text" name="diet_name" class="form-control" value="<?php echo $rows[0]['diet_name']; ?>" >
                  </div>
                </div><!--/form-group-->
				<div class="bottom center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </div>
			</form>
		</div><!--/porlets-content-->
	  </div><!--/block-web--> 
	</div><!--/col-md-6-->
	</div>
</div>
<?php }else {
	echo "invalid Item";
}
 } ?>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/admin/plugins/ckeditor/ckeditor.js"></script>