<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>eStartup Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?=base_url('public/img/favicon.png')?>" rel="icon">
  <link href="<?=base_url('public/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="<?=base_url('public/lib/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?=base_url('public/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/lib/owlcarousel/assets/owl.theme.default.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/lib/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/lib/animate/animate.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/lib/modal-video/css/modal-video.min.css')?>" rel="stylesheet">
  
	<link href="<?=base_url('public/lib/datatable/css/datatables.bootstrap4.min.css')?>" rel="stylesheet">
    <!--<link href="<?=base_url('public/lib/datatable/css/jquery.datatables.min.css')?>" rel='stylesheet'>-->
    <link href="<?=base_url('public/lib/datatable/css/buttons.bootstrap.min.css')?>" rel="stylesheet" />
    <link href="<?=base_url('public/lib/datatable/css/buttons.dataTables.min.css')?>" rel="stylesheet" />

  <!-- Main Stylesheet File -->
  <link href="<?=base_url('public/css/style.css')?>" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span>e</span>Startup</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="public/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about-us">About</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#screenshots">Screenshots</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>Welcome to eStartups</h1>
      <h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2>
      <img src="<?=base_url('public/img/hero-img.png')?>" alt="Hero Imgs">
      <a href="#get-started" class="btn-get-started scrollto">Get Started</a>
      <div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div>
    </div>
  </section><!-- #hero -->

  <!--==========================
    Get Started Section
  ============================-->
  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>simple systeme fordiscount </h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="<?=base_url('public/img/svg/cloud.svg')?>" alt="img" class="img-fluid">
            <h4>introducing whatsapp</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="#">read more</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="<?=base_url('public/img/svg/planet.svg')?>" alt="img" class="img-fluid">
            <h4>user friendly interface</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="#">read more</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="public/img/svg/asteroid.svg" alt="img" class="img-fluid">
            <h4>build the app everyone love</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="#">read more</a>

          </div>
        </div>

      </div>
    </div>

  </section>

  <!--==========================
    About Us Section
  ============================-->
  <section id="about-us" class="about-us padd-section wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-5 col-lg-3">
          <img src="public/img/about-img.png" alt="About">
        </div>

        <div class="col-md-7 col-lg-5">
          <div class="about-content">

            <h2><span>eStartup</span>UI Design Mobile </h2>
            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
            </p>

            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i>Creative Design</li>
              <li><i class="fa fa-angle-right"></i>Retina Ready</li>
              <li><i class="fa fa-angle-right"></i>Easy to Use</li>
              <li><i class="fa fa-angle-right"></i>Unlimited Features</li>
              <li><i class="fa fa-angle-right"></i>Unlimited Features</li>
            </ul>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Features Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Amazing Features.</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="public/img/svg/paint-palette.svg" alt="img" class="img-fluid">
            <h4>creative design</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="public/img/svg/vector.svg" alt="img" class="img-fluid">
            <h4>Retina Ready</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="public/img/svg/design-tool.svg" alt="img" class="img-fluid">
            <h4>easy to use</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="public/img/svg/asteroid.svg" alt="img" class="img-fluid">
            <h4>Free Updates</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="public/img/svg/asteroid.svg" alt="img" class="img-fluid">
            <h4>Free Updates</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="public/img/svg/cloud-computing.svg" alt="img" class="img-fluid">
            <h4>App store support</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="public/img/svg/pixel.svg" alt="img" class="img-fluid">
            <h4>Perfect Pixel</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="public/img/svg/code.svg" alt="img" class="img-fluid">
            <h4>clean codes</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Screenshots Section
  ============================-->
  <section id="screenshots" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>App Gallery</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel owl-theme">

        <div><img src="public/img/screen/1.jpg" alt="img"></div>
        <div><img src="public/img/screen/2.jpg" alt="img"></div>
        <div><img src="public/img/screen/3.jpg" alt="img"></div>
        <div><img src="public/img/screen/4.jpg" alt="img"></div>
        <div><img src="public/img/screen/5.jpg" alt="img"></div>
        <div><img src="public/img/screen/6.jpg" alt="img"></div>
        <div><img src="public/img/screen/7.jpg" alt="img"></div>
        <div><img src="public/img/screen/8.jpg" alt="img"></div>
        <div><img src="public/img/screen/9.jpg" alt="img"></div>

      </div>
    </div>

  </section>

  <!--==========================
    Video Section
  ============================-->

  <section id="video" class="text-center wow fadeInUp">
    <div class="overlay">
      <div class="container-fluid container-full">

        <div class="row">
          <a href="#" class="js-modal-btn play-btn" data-video-id="s22ViV7tBKE"></a>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Team Section
  ============================-->
  <section id="team" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Team Member</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="public/img/team/1.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

       <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="public/img/team/2.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="public/img/team/3.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="public/img/team/4.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!--==========================
    Datatables Section
  ============================-->
	<section id="datatable" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Meet With Price</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">
	  <div class="col-12">
	  <div class="card">
	  <div class="card-body">
                                    <div class="table-responsive">
                                        <!--<table id="expendable-data-table" class="table display nowrap table-bordered table-hover" style="width:100%">-->
                                        <table id="expendable-data-table" class="table display nowrap table-hover" >
                                            <thead>
                                              <tr>
                                                <th colspan="10" class="heading"></th>
                                              </tr>
                                                <tr class="bg-warning">
                                                    <th></th>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td class="details-control"><i class="fa fa-play fa-3x"></i></td>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>5421</td>
                                                    <td>t.nixon@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Garrett</td>
                                                    <td>Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>8422</td>
                                                    <td>g.winters@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>9608</td>
                                                    <td>h.chandler@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Rhona</td>
                                                    <td>Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>6200</td>
                                                    <td>r.davidson@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Colleen</td>
                                                    <td>Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                    <td>2360</td>
                                                    <td>c.hurst@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Sonya</td>
                                                    <td>Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>1667</td>
                                                    <td>s.frost@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Jena</td>
                                                    <td>Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                    <td>3814</td>
                                                    <td>j.gaines@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Quinn</td>
                                                    <td>Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>9497</td>
                                                    <td>q.flynn@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Charde</td>
                                                    <td>Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                    <td>6741</td>
                                                    <td>c.marshall@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Haley</td>
                                                    <td>Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                    <td>3597</td>
                                                    <td>h.kennedy@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Tatyana</td>
                                                    <td>Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>1965</td>
                                                    <td>t.fitzpatrick@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Michael</td>
                                                    <td>Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>1581</td>
                                                    <td>m.silva@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Paul</td>
                                                    <td>Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>3059</td>
                                                    <td>p.byrd@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Gloria</td>
                                                    <td>Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                    <td>1721</td>
                                                    <td>g.little@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Dai</td>
                                                    <td>Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                    <td>2290</td>
                                                    <td>d.rios@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Jenette</td>
                                                    <td>Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                    <td>1937</td>
                                                    <td>j.caldwell@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Yuri</td>
                                                    <td>Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>6154</td>
                                                    <td>y.berry@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Doris</td>
                                                    <td>Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                    <td>3023</td>
                                                    <td>d.wilder@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Gavin</td>
                                                    <td>Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                    <td>8822</td>
                                                    <td>g.joyce@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Jennifer</td>
                                                    <td>Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                    <td>9239</td>
                                                    <td>j.chang@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Fiona</td>
                                                    <td>Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                    <td>2947</td>
                                                    <td>f.green@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Shou</td>
                                                    <td>Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                    <td>8899</td>
                                                    <td>s.itou@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Michelle</td>
                                                    <td>House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                    <td>2769</td>
                                                    <td>m.house@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Suki</td>
                                                    <td>Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                    <td>6832</td>
                                                    <td>s.burks@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Prescott</td>
                                                    <td>Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                    <td>3606</td>
                                                    <td>p.bartlett@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Gavin</td>
                                                    <td>Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                    <td>2860</td>
                                                    <td>g.cortez@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Martena</td>
                                                    <td>Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>8240</td>
                                                    <td>m.mccray@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Unity</td>
                                                    <td>Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                    <td>5384</td>
                                                    <td>u.butler@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Howard</td>
                                                    <td>Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                    <td>7031</td>
                                                    <td>h.hatfield@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Hope</td>
                                                    <td>Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                    <td>6318</td>
                                                    <td>h.fuentes@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Vivian</td>
                                                    <td>Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>9422</td>
                                                    <td>v.harrell@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Timothy</td>
                                                    <td>Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>7580</td>
                                                    <td>t.mooney@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Jackson</td>
                                                    <td>Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                    <td>1042</td>
                                                    <td>j.bradshaw@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Olivia</td>
                                                    <td>Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>2120</td>
                                                    <td>o.liang@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Sakura</td>
                                                    <td>Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>9383</td>
                                                    <td>s.yamamoto@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Thor</td>
                                                    <td>Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>8327</td>
                                                    <td>t.walton@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Finn</td>
                                                    <td>Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                    <td>2927</td>
                                                    <td>f.camacho@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Serge</td>
                                                    <td>Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>8352</td>
                                                    <td>s.baldwin@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Zenaida</td>
                                                    <td>Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>7439</td>
                                                    <td>z.frank@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Zorita</td>
                                                    <td>Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>4389</td>
                                                    <td>z.serrano@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Jennifer</td>
                                                    <td>Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>3431</td>
                                                    <td>j.acosta@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Hermione</td>
                                                    <td>Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                    <td>1016</td>
                                                    <td>h.butler@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                    <td>l.greer@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                    <td>j.alexander@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                    <td>s.decker@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                    <td>m.bruce@datatables.net</td>
                                                </tr>

                                                <tr>
                                                    <td class="details-control"></td>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                    <td>d.snider@datatables.net</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
	  </div>
	  </div>
	  </div>
	</div>
	</section>
  <!--==========================
    Pricing Table Section
  ============================-->
  <section id="pricing" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Meet With Price</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>basic</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>PERSONAL</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>BUSINESS</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>profeesional</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
    Blog Section
  ============================-->
  <section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Latest posts</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="public/img/blog/blog-image-1.jpg" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="public/img/blog/blog-image-2.jpg" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="public/img/blog/blog-image-3.jpg" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Newsletter Section
  ============================-->
  <section id="newsletter" class="newsletter text-center wow fadeInUp">
    <div class="overlay padd-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-6">
            <form class="form-inline" method="POST" action="#">

              <input type="email" class="form-control " placeholder="Email Adress" name="email">
              <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Subscribe</button>

            </form>

          </div>
        </div>

          <ul class="list-unstyled">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>


      </div>
    </div>
  </section>

  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Contact</h2>
        <p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-4">

          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>
          </div>

          <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->

  <!--==========================
    Footer
  ============================-->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">eStartup</a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Support</h4>

            <ul class="list-unstyled">
              <li><a href="#">faq</a></li>
              <li><a href="#">Editor help</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights eStartup. All rights reserved.</p>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="public/lib/jquery/jquery.min.js"></script>
  <script src="public/lib/jquery/jquery-migrate.min.js"></script>
  <script src="public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/lib/superfish/hoverIntent.js"></script>
  <script src="public/lib/superfish/superfish.min.js"></script>
  <script src="public/lib/easing/easing.min.js"></script>
  <script src="public/lib/modal-video/js/modal-video.js"></script>
  <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="public/lib/wow/wow.min.js"></script>
  
  
	<script src="public/lib/datatable/js/jquery.datatables.min.js"></script>
    <script src="public/lib/datatable/js/datatables.bootstrap4.min.js"></script>
	<script src="public/lib/datatable/js/dataTables.buttons.min.js"></script>
    <script src="public/lib/datatable/js/buttons.flash.min.js"></script>
    <script src="public/lib/datatable/js/jszip.min.js"></script>
    <script src="public/lib/datatable/js/pdfmake.min.js"></script>
    <script src="public/lib/datatable/js/vfs_fonts.js"></script>
    <script src="public/lib/datatable/js/buttons.html5.min.js"></script>
    <script src="public/lib/datatable/js/buttons.print.min.js"></script>
	
	
  <!-- Contact Form JavaScript File -->
  <script src="public/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="public/js/main.js"></script>
  
  <!--<script>
        /* Formatting function for row details - modify as you need */
        function format() {
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                '<tr>' +
                '<td>Full name:</td>' +
                '<td>Name...</td>' +
                '</tr>' +
                '<tr>' +
                '<td>Extension number:</td>' +
                '<td>123</td>' +
                '</tr>' +
                '<tr>' +
                '<td>Extra info:</td>' +
                '<td>And any further details here (images etc)...</td>' +
                '</tr>' +
                '</table>';
        };

        $(document).ready(function() {
            //$.noConflict();
            var table = $('#expendable-data-table').DataTable({
                deferRender: true,
                pageLength: 10,
                responsive: true,
                order: [],
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                },
                dom: 'Bfrtip',
                buttons: ['copy', 'pdf', {
                    extend: 'excelHtml5',
                    customize: function(xlsx) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];
                        $('row c[r^="C"]', sheet).attr('s', '2');
                    }
                }]
            });

            // Add event listener for opening and closing details
            $('#expendable-data-table tbody').on('click', 'td.details-control', function() {
                var tr = $(this).closest('tr');
                var row = table.row(tr);

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                }
            });
        });
    </script>-->
    <script>
        //document.addEventListener("DOMContentLoaded", function() {
        // Datatables Responsive
        // https://datatables.net/reference/button/excelHtml5

        //https://www.youtube.com/watch?v=j59H9xnyCBs
        $(document).ready(function() {
            //$.noConflict();
            var mytable = $("#expendable-data-table").DataTable({
                deferRender: true,
                responsive: true,
                pageLength: 5,
                lengthMenu: [5, 10, 25, 50],
                scrollH: true,
                scrollX: true,
                order: [],
                stateSave: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json'
                }
            });

            new $.fn.dataTable.Buttons(mytable, {
                language: {
                    paginate: {
                        "previous": "<",
                        "next": ">",
                        "first": "<<",
                        "last": ">>"
                    },
                },
                buttons: [
                    'copy', 'pdf',
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        customize: function(xlsx) {
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            //Para ver los estilos de formato https://datatables.net/reference/button/excelHtml5
                            $('row c[r^="B"]', sheet).attr('s', '57');
                            //Para que la columna se muestre como texto https://datatables.net/forums/discussion/73814/export-to-excel-with-format-text-for-column-b-c-and-d
                            $('row c[r^="C"]', sheet).attr('s', '50');
                        }
                    }
                ]
            });

            mytable.buttons().container().appendTo($('tr th.heading', mytable.table().container()));

        });
    </script>
</body>
</html>
