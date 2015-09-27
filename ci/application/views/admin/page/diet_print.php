 <div class="contentpanel" style="margin-left:50px; min-height:0px;">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <?php $this->load->view('admin/html/breadcrum', $this->data); ?> 
        <!--\\\\\\\ container  start \\\\\\-->
<div id="main-content">
    <div class="page-content">
      
      
      <div class="row">
        <div class="col-md-12">
          <div class="block-web">
           <div class="header">
              <!--<div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="refresh" href="#"><i class="fa fa-repeat"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div> -->
              <h3 class="content-header">Diet List</h3>
            </div>
         <div class="porlets-content">
            <div class="table-responsive">
                <table  class="display table table-bordered table-striped" id="dynamic-table">
                  <thead>
                    <tr>
                      <th>Timings</th>
                      <th>Diet</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="gradeX">
                      <td><h2>Morning</h2></td>
                      <td><h4><?php echo get_arg($diet,'morning'); ?></h4></td>
                    </tr>
					<tr class="gradeX">
                      <td><h2>Tiffin</h2></td>
                      <td><h4><?php echo get_arg($diet['dc1'][0],'diet_name'); ?></h4></td>
                    </tr>
					<tr class="gradeX">
                      <td><h2>Juice [11AM]</h2></td>
                      <td><h4><?php echo get_arg($diet['dc2'][0],'diet_name'); ?></h4></td>
                    </tr>
					<tr class="gradeX">
                      <td><h2>Lunch</h2></td>
                      <td><h4><?php echo get_arg($diet['dc3'][0],'diet_name'); ?></h4></td>
                    </tr>
					<tr class="gradeX">
                      <td><h2>Juice [4PM]</h2></td>
                      <td><h4><?php echo get_arg($diet['dc4'][0],'diet_name'); ?></h4></td>
                    </tr>
					<tr class="gradeX">
                      <td><h2>Dinner</h2></td>
                      <td><h4><?php echo get_arg($diet['dc5'][0],'diet_name'); ?></h4></td>
                    </tr>
                  </tfoot>
                </table>
				<div class="bottom center">
                  <button type="button" onClick="window.print();" class="btn btn-primary">Print</button>
                  <!-- <a href="<?php echo site_url(); ?>" type="button" class="btn btn-default">Cancel</a> -->
                </div>

              </div><!--/table-responsive-->
            </div><!--/porlets-content-->
            
            
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 
      </div><!--/row-->
R. Subba Reddy
        </div><!--/page-content end--> 
  </div><!--/main-content end--> 
  </div>
  <script src="<?php echo base_url(); ?>assets/admin/js/jquery-2.1.0.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/common-script.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/data-tables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/data-tables/DT_bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/data-tables/dynamic_table_init.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/edit-table/edit-table.js"></script>
