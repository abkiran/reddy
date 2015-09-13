 <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Components</h1>
          <h2 class="">Subtitle goes here...</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">FORMS</a></li>
            <li class="active">Components</li>
          </ol>
        </div>
      </div>
 <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
      <div class="row">
        <div class="col-md-10">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Default Form Elements</h3>
            </div>
            <div class="porlets-content">
              <form action="" class="form-horizontal row-border">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Simplest Input</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control">
                  </div>
                </div><!--/form-group-->
				<div class="form-group">
                  <label class="col-sm-3 control-label">Textarea</label>
                  <div class="col-sm-9">
                    <textarea class="form-control"></textarea>
                  </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-2 col-sm-2">CKEditor</label>
                    <div class="col-sm-10">
                      <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                    </div>
                  </div>
				<div class="bottom center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </div>
			</form>
		</div><!--/porlets-content-->
	  </div><!--/block-web--> 
	</div><!--/col-md-6-->
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/admin/plugins/ckeditor/ckeditor.js"></script>