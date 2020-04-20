		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?php echo base_url(); ?>admin" class="navbar-brand">
						<small>
							<!-- <i class="fa fa-leaf"></i> -->
							<img src="<?php echo base_url() ?>images/kz-logo-trans.png" style="width: 25px;">
							Mondayy
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url() ?>images/user/DefaultMale.png" alt="Foto Admin" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $this->session->userdata('namaadmin')?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<!--<li>
									<a href="<?php echo base_url(); ?>adminsop/editprofil">
										<i class="ace-icon fa fa-user"></i>
										Edit Profil
									</a>
								</li>

								<li>
									<a href="<?php echo base_url(); ?>adminsop/ubahpassword">
										<i class="ace-icon fa fa-lock"></i>
										Ubah Password
									</a>
								</li>

								<li class="divider"></li> -->

								<li>
									<a href="<?php echo base_url(); ?>loginuser/logout">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>