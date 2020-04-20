			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<ul class="nav nav-list">

					<li class="<?php if($menu=='home'){ echo 'active'; } ?>">
						<a href="<?php echo base_url(); ?>admin">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> Home </span>
						</a>
					</li>
					<!-- Kelompok Menu Pengaturan -->
					<li class="<?php if($menu_induk=='web'){ echo 'active open'; } ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-globe"></i>
							<span class="menu-text"> Web </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="<?php if($menu=='upload'){ echo 'active'; } ?>">
								<a href="<?php echo base_url(); ?>admin/v_upload">
									<i class="menu-icon fa fa-caret-right"></i>
									Upload
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
						<ul class="submenu">
							<li class="<?php if($menu=='data'){ echo 'active'; } ?>">
								<a href="<?php echo base_url(); ?>admin/v_data">
									<i class="menu-icon fa fa-caret-right"></i>
									Data
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="<?php if($menu_induk=='author'){ echo 'active open'; } ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text"> Author </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="<?php if($menu=='input_author'){ echo 'active'; } ?>">
								<a href="<?php echo base_url(); ?>admin/input_author">
									<i class="menu-icon fa fa-caret-right"></i>
									Input Author
								</a>

								<b class="arrow"></b>
							</li>
						</ul>

						<ul class="submenu">
							<li class="<?php if($menu=='data_author'){ echo 'active'; } ?>">
								<a href="<?php echo base_url(); ?>admin/data_author">
									<i class="menu-icon fa fa-caret-right"></i>
									Data Author
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<!--<li class="<?php if($menu_induk=='tools'){ echo 'active open'; } ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-wrench"></i>
							<span class="menu-text"> Tools </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="<?php if($menu=='input_author'){ echo 'active'; } ?>">
								<a href="<?php echo base_url(); ?>admin/input_author">
									<i class="menu-icon fa fa-caret-right"></i>
									Input Author
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>-->			
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>