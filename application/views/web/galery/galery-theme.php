<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $headertitle; ?></title>

  <!-- icon -->
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/icon/kz-favicon2.png">

  <!-- fa icon -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/ace-master/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>css/startbootstrap-agency-gh-pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url(); ?>css/startbootstrap-agency-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <!--<link href="<?php echo base_url(); ?>css/startbootstrap-agency-gh-pages/css/agency.min.css" rel="stylesheet">-->
  <link href="<?php echo base_url(); ?>css/startbootstrap-agency-gh-pages/css/agency.css" rel="stylesheet">

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/loader.css">-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/css/main.css">
  <script src="<?php echo base_url();?>js/js/vendor/modernizr-2.6.2.min.js"></script>
  <style type="text/css">
    .email{
      color: grey;
    }
    .email:hover{
      font-size: 130%;
      color: grey;
      text-decoration: none; 
    }
    .account{
      color: #212529;
    }
    .account:hover{
      color: #212529;
    }
  </style>
</head>

<body id="page-top">
  <div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Mondayy</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('loginuser/login')?>" target="_blank">Sign In</a>
          </li>
          <li>
            <input class="form-control" name="search" placeholder="Search" id="search" />
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead" style="width: 100%;">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in" <?php if($this->agent->is_mobile()){ ?> style="font-size: 75px;" <?php } ?>>Mondayy</div>
        <!--<div class="intro-heading">Welcome to our site</div>-->
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Welcome to our site!</a>
      </div>
    </div>
  </header>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Mondayy</h2>
          <h3 class="section-subheading text-muted">Design, Wpap, etc.</h3>
        </div>
      </div>
      <div class="row">
        <?php
          foreach ($posted as $data) { ?>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <?php 
            $picture = $data->picture;
            $picture = explode('.', $picture);
            $picture1 = $picture[0].'_thumb';
            $picture2 = $picture[1];
            $picture = $picture1.'.'.$picture2;

            $judul = $data->judul;
            $judul = str_replace('_', ' ', $judul);
          ?>
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?php echo $data->id; ?>">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-image fa-2x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url().'images/thumbnail/'.$picture; ?>" width="100%" alt="<?php echo $judul; ?>">
          </a>
          <div class="portfolio-caption">
            <h4><?php echo $judul ?></h4>
            <p class="text-muted">by&nbsp;<?php echo $data->author; ?></p>
          </div>
        </div>
        <?php } ?>
      </div>
    
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Team</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>images/team/khai_zulfa.jpg" alt="Khai Zulfa">
            <h4>Khai Zulfa</h4>
            <p class="text-muted">Web Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/khaiz18_" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/xhai.zoelfa" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/khaiz.18_/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>       
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="text-muted">Contact us at &nbsp; <i class="ace-master fa fa-envelope"></i>&nbsp;khaizulfa18@gmail.com</a></p>
          <p class="large text-muted"><i class="ace-master fa fa-globe-asia"></i>&nbsp;Kendal, Central Java, Indonesia</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Indonesia</span>
        </div>
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Mondayy 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item js-scroll-trigger">
              <a href="#team">Team</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <div class="scrolltop">
    <div class="scroll icon"><i class="ace-master fa fa-angle-up"></i></div>
  </div>
  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <?php foreach ($posted as $data) { ?>
  <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $data->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <?php
                  $judul=$data->judul;
                  $judul= str_replace('_', ' ', $judul); 
                ?>
                <h2 class="text-uppercase"><?php echo $judul; ?></h2>
                <p class="item-intro text-muted"><?php echo $data->author; ?></p>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url().'images/posted/'.$data->picture; ?>" alt="<?php echo $judul; ?>">
                <ul class="list-inline">
                  <li>Design by&nbsp;<?php echo $data->author; ?></li>
                  <li><a href="<?php echo $data->link_acc; ?>" class="account" target="_blank"><i class="fab fa-instagram">&nbsp;: <?php echo $data->account; ?></i></a></li>
                  <li><i class="fab fa-whatsapp"></i>&nbsp;: +62 895-3830-63231</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Image
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>css/startbootstrap-agency-gh-pages/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>css/startbootstrap-agency-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>css/startbootstrap-agency-gh-pages/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="<?php echo base_url(); ?>css/startbootstrap-agency-gh-pages/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url(); ?>css/startbootstrap-agency-gh-pages/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>css/startbootstrap-agency-gh-pages/js/agency.min.js"></script>
  <script type="text/javascript">
    $(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
    });
    $(function(){$(".scroll").click(function(){$("html,body").animate({scrolltop:$("#").offset().top},"1000");return false})})
  </script>

  <!-- Loader -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo base_url();?>js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
  <script src="<?php echo base_url();?>js/js/main.js"></script>
  <script src="<?php echo base_url();?>js/galery.js"></script>
</body>

</html>