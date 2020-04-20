<!DOCTYPE html>
	<html lang="en">
		<head>
				<?php $this->load->view('web/header'); ?>
		</head>
		<body>
			<hader class="page-header">
				<div class="page-header__inner">
					<div class="page-header__group">
						<a href="<?php echo base_url('galery/post'); ?>" class="page-header__title" >
							<h2>Mondayy</h2>
						</a>
						<h5 class="page-header__sub_title">Santuy santuy asal kelakon</h5>
					</div>
				</div>
			</hader>
		<div class="page-content">
			<main class="page-content__main">
				<section class="page-content__gallery">
					<div class="gallery">
						<div class="gallery__inner">
							<div class="gallery__flow">
								<?php foreach ($posted as $data) { ?>
								<div class="gallery__isle">
									<div class="gallery__isle-inner">
										<div class="gallery__isle-content">
											<figure class="gallery__preview">
												<div class="gallery__preview-image">
													<?php
														$picture = $data->picture;
														$picture = explode('.', $picture);
														$picture1 = $picture[0].'_thumb';
														$picture2 = $picture[1];
														$picture = $picture1.'.'.$picture2;
													?>
													<img src="<?php echo base_url().'images/thumbnail/'.$picture; ?>" width="100%" alt="<?php echo $data->judul; ?>">
												
												</div>
												<figcaption class="gallery__preview-caption">
													<div class="gallery__preview-info">
														<?php
															$judul = $data->judul;
															$judul = str_replace('_', ' ', $judul);
														?>	
														<h2 class="gallery__preview-title"><?php echo $judul; ?></h2>
														<div class="gallery__preview-links">	
															<a href="<?php echo base_url().'images/posted/'.$data->picture; ?>" data-fancybox data-caption="<?php echo $judul.' by '.'author'; ?>" class="gallery__preview-link gallery__preview-link" >
																<i class="ace master fa fa-picture-o"></i>&nbsp;
																<?php echo $judul; ?>
															</a>
															<a class="gallery__preview-link gallery__preview-link" href="<?php echo $data->link_acc; ?>" target="_blank">
																<i class="ace master fa fa-pencil"></i>&nbsp;
																<?php echo $data->author; ?>
															</a>
															<a class="gallery__preview-link gallery__preview-link" href="<?php echo $data->link_acc; ?>" target="_blank">
																<i class="ace master fa fa-instagram"></i>&nbsp;
																<?php echo $data->account; ?>
															</a>
														</div>
													</div>
												</figcaption>
											</figure>
										</div>
									</div>
								</div>
							<?php } ?>
							</div>
						</div>
					</div>
				</section>
			</main>
		</div>
		<footer class="page-footer">
			<div class="page-footer__inner">
				<div class="page-footer__group">
					<span class="page-footer__text">About Us
					</span>
					<p class="page-footer__text_two"> 
						<a class="page-footer__text-link" href="https://www.facebook.com/xhai.zoelfa" target="_blank">
							<i class="ace master fa fa-facebook-square"></i>&nbsp;Khai Zulfa |
						</a>
						<a class="page-footer__text-link" href="https://www.instagram.com/khaiz.18_/" target="_blank">
							<i class="ace master fa fa-instagram"></i>&nbsp;@khaiz.18_ |
						</a>
						<a class="page-footer__text-link" href="https://www.gmail.com/" target="_blank">
							<i class="ace master fa fa-envelope"></i>&nbsp;khaizulfa18@gmail.com
						</a>
					</p>
				</div>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url(); ?>plugins/fancybox-master/dist/jquery.fancybox.min.js"></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    	<!--<script src="<?php echo base_url(); ?>plugins/header-fade/js/index.js"></script>-->
	</body>
</html>