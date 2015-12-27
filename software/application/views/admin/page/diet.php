 <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <?php $this->load->view('admin/html/breadcrum', $this->data); ?> 
        <!--\\\\\\\ container  start \\\\\\-->
	<div class="container clear_both padding_fix">
      <div class="row">
        <div class="col-md-10">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Diet Sheet</h3>
            </div>
            <div class="porlets-content">
              <form action="" method='post' class="form-horizontal row-border">
			  <input type=hidden name='do' value="diet">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Morning</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" value="1/4 - Lemon + 400ml water" name="morning" >
                  </div>
                </div><!--/form-group-->
				<div class="form-group">
                  <label class="col-sm-3 control-label">Tiffin ( 8AM )</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="dc1" >
                  </div>
                </div><!--/form-group-->
				<div class="form-group">
                  <label class="col-sm-3 control-label">Juice ( 11AM )</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="dc2" >
                  </div>
                </div><!--/form-group-->
				<div class="form-group">
                  <label class="col-sm-3 control-label">Lunch ( 1PM )</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="dc3" >
                  </div>
                </div><!--/form-group-->
				<div class="form-group">
                  <label class="col-sm-3 control-label">Juice ( 4-5PM )</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="dc4" >
                  </div>
                </div><!--/form-group-->
				<div class="form-group">
                  <label class="col-sm-3 control-label">Dinner</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="dc5" >
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
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/admin/plugins/ckeditor/ckeditor.js"></script>