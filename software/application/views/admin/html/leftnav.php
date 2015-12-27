    <!--\\\\\\\ inner start \\\\\\--><div class="left_nav">

      <!--\\\\\\\left_nav start \\\\\\-->
      <div class="search_bar"> <i class="fa fa-search"></i>
        <input name="" type="text" class="search" placeholder="Search Dashboard..." />
      </div>
      <div class="left_nav_slidebar">
        <ul>
          <li class="left_nav_active theme_border"><a href="javascript:void(0);"><i class="fa fa-home"></i> Body And Soul <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul class="opened" style="display:block">
              <li> <a href="<?php echo site_url(); ?>/admin/page/add"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php if ( $page == 'add' ) { echo "theme_color"; } ?>">Add Diet Item</b> </a> </li>
              <li> <a href="<?php echo site_url(); ?>/admin/page/list"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php if ( $page == 'list' ) { echo "theme_color"; } ?>">List Diet</b> </a> </li>
              <li> <a href="<?php echo site_url(); ?>/admin/page/diet"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php if ( $page == 'diet' ) { echo "theme_color"; } ?>">Print Diet Chart</b> </a> </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
    <!--\\\\\\\left_nav end \\\\\\-->