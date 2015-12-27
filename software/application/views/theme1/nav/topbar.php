<body>
<div class="fix-header" id="home">
<div class="w-container">
  <div class="w-nav" data-collapse="medium" data-animation="default" data-duration="400"></div>
</div>
</div>
<div class="fixed-header">
<div class="w-container container">
  <div class="w-row">

   <!--///////////////////////////////////////////////////////
   // Logo section 
   //////////////////////////////////////////////////////////-->


	<div class="w-col w-col-3 logo">
	  <a href="#"><img class="logo" src="<?php echo base_url(); ?>/assets/theme1/images/logo.png" alt="Elegance"></a>
	</div>

	<!--///////////////////////////////////////////////////////
   // End Logo section 
   //////////////////////////////////////////////////////////-->

	<div class="w-col w-col-9">

   <!--///////////////////////////////////////////////////////
   // Menu section 
   //////////////////////////////////////////////////////////-->


	  <div class="w-nav navbar" data-collapse="medium" data-animation="default" data-duration="400" data-contain="1">
		<div class="w-container nav">
		  <nav class="w-nav-menu nav-menu" role="navigation">
			<?php for ( $i = 0; $i < $rows[0]['NROWS']; $i++ ) { ?>
				<a class="w-nav-link menu-li" href="#<?php echo $rows[$i]['name']; ?>"><?php echo $rows[$i]['title']; ?></a>
			<?php } ?>
		  </nav>
		  <div class="w-nav-button">
			<div class="w-icon-nav-menu"></div>
		  </div>
		</div>
	  </div>


	  <!--///////////////////////////////////////////////////////
   // End Menu section 
   //////////////////////////////////////////////////////////-->


	</div>
  </div>
</div>
</div>