<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="<?= base_url('images/users/'.$user->user_img)?>" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo $user->username ?></span>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="<?php echo base_url('users/update/'.$user->id) ?>"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="<?php echo base_url('dashboard.html') ?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
<?php if ($this->ion_auth->is_admin()): ?>
								<li><a href="<?php echo base_url('data_tes.html') ?>"><i class="fa fa-sitemap"></i> <span>Histori Klasifikasi</span></a></li>
								<li><a href="<?php echo base_url('desa.html') ?>"><i class="icon-home4"></i> <span>Data Desa</span></a></li>
								<li>
									<a href="<?php echo base_url('users.html') ?>"><i class="icon-users"></i> <span>Kelola Users</span></a>
								</li>

<?php else: ?>
								<li>
									<a href="#"><i class="icon-users"></i> <span>Klasifikasi</span></a>
									<ul>
										<li><a href="<?php echo base_url('klasifikasi.html') ?>"><i class="fa fa-users"></i> <span>Klasifikasi</span></a></li>
										<li><a href="<?php echo base_url('data_set.html') ?>"><i class="fa fa-users"></i> <span>Data Set</span></a></li>
										<li><a href="<?php echo base_url('data_tes.html') ?>"><i class="fa fa-sitemap"></i> <span>Histori</span></a></li>
									</ul>
								</li>
<?php endif ?>

								<!-- /main -->
							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->

			<script type="text/javascript">
				var url = window.location;
				// Will only work if string in href matches with location
				$('ul.navigation a[href="'+ url +'"]').parent().addClass('active');

				// Will also work for relative and absolute hrefs
				$('ul.navigation a').filter(function() {
				    return this.href == url;
				}).parent().addClass('active');
			</script>