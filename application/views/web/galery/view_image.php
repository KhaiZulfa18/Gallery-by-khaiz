<!DOCTYPE html>
	<html lang="en">
		<head>
				<?php $this->load->view('web/header'); ?>
		</head>
		<body>
			<hader class="page-header">
				<div class="page-header__inner">
					<div class="page-header__group">
						<a href="<?php echo base_url('gallery/post'); ?>" class="page-header__title">
							<h2>Mondayy</h2>
						</a>
						<h1 class="page-header__sub_title">Santuy santuy asal kelakon</h1>
					</div>
				</div>
			</hader>
		<div class="page-content">
			<main class="page-content__main">
				<section class="page-content__gallery">
					<div class="gallery">
						<div class="gallery__inner">
							<div class="gallery__flow">
								<!--<div class="gallery__isle">
									<div class="gallery__isle-inner">
										<div class="gallery__isle-content">-->
											<div class="title_image">
												<div class="title">
													<i class="ace master fa fa-picture-o"></i>
													<?php
													$judul = $judul;
													$judul = str_replace('_', ' ', $judul);	
													echo $judul 
													;?>
												</p>
											</div>
											<hr>
											<figure class="gallery__preview">
												<div class="gallery__preview-image">
													<?php	
														$picture = $picture;
														$picture = explode('.', $picture);
														$picture1 = $picture[0].'_thumb';
														$picture2 = $picture[1];
														$picture = $picture1.'.'.$picture2;
													?>
													<img src="<?php echo base_url().'images/thumbnail/'.$picture; ?>" width="100%" alt="<?php echo $judul; ?>">
												</div>
												<figcaption class="gallery__preview-caption">
													<div class="gallery__preview-info">
														<h2 class="gallery__preview-title"><?php echo $judul; ?></h2>
														<div class="gallery__preview-links">
															<a class="gallery__preview-link gallery__preview-link" href="<?php echo $link_acc; ?>" target="_blank">
																<i class="ace master fa fa-pencil"></i>&nbsp;
																<?php echo $author; ?>
															</a>
															<a class="gallery__preview-link gallery__preview-link" href="<?php echo $link_acc; ?>" target="_blank">
																<i class="ace master fa fa-instagram"></i>&nbsp;
																<?php echo $account; ?>
															</a>
															<a class="gallery__preview-link gallery__preview-link" href="" target="">
																<i class="ace master fa fa-whatsapp"></i>&nbsp;
																+62 895-3830-63231
															</a>
														</div>
													</div>
												</figcaption>
											</figure>
											<hr>
											<div class="description">
											</div>
											<div class="description_text">
												<p> Design by </p>
												<i class="ace master fa fa-paint-brush"></i>&nbsp;<?php echo $author; ?> |
												<a href="<?php echo $link_acc; ?>">
													<i class="ace master fa fa-instagram"></i>&nbsp;<?php echo $account; ?> |
												</a>
												<i class="ace master fa fa-whatsapp"></i>&nbsp;
											</div>
										<!--</div>
									</div>
								</div>-->
							</div>
						</div>
					</div>
				</section>
			</main>
		</div>
		<footer class="page-footer">
			<div class="page-footer__inner">
				<div class="page-footer__group">
					<p class="page-footer__text">Copyright by
						<a class="page-footer__text-link" href="https://www.instagram.com/khaiz.18_/" target="_blank">Khai Zulfa</a>
					</p>
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
	</body>
</html>