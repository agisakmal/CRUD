<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EkstraKu - Ekstrakurikuler</title>
<!--
Lumino Theme
http://www.templatemo.com/tm-483-lumino
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400">   <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap2/font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap2/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap2/css/magnific-popup.css">                                     <!-- Magnific pop up style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap2/css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>
<style>

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
.text {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

.text, .password {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
    <body id="top" class="home">

	<div class="container-fluid">
		<div class="row">

			<div class="tm-navbar-container">

				<!-- navbar   -->
				<nav class="navbar navbar-full navbar-fixed-top">

					<button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
						&#9776;
					</button>

					<div class="collapse navbar-toggleable-sm" id="tmNavbar">

						<ul class="nav navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="#top">Beranda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tm-section-2">Berita</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tm-section-3">Galeri</a>
							</li>
							<li class="nav-item dropdown">
								<a class=" nav-link dropdown-toggle" data-toggle="dropdown"href="#">Ekskul</a>
								<span type="text" class="caret"></span></a>
								<ul class="nav-item dropdown-menu">
									<li><a style="color:Tomato;" class="nav-link external" href="columns.html">Tari</a></li>
									<li><a style="color:Tomato;" class="nav-link external" href="columns.html">Sepak Bola</a></li>
									<li><a style="color:Tomato;" class="nav-link external" href="columns.html">Bola Voli</a></li>
									<li><a style="color:Tomato;" class="nav-link external" href="columns.html">Bulu Tangkis</a></li>
									<li><a style="color:Tomato;" class="nav-link external" href="columns.html">Pencak Silat</a></li>
									<li><a style="color:Tomato;" class="nav-link external" href="columns.html">Taekwondo</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tm-section-5">Kontak</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url() ?>index.php/auth2">Keluar</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>

		<div class="row">
			<div class="tm-intro">

				<section id="tm-section-1">
					<div class="tm-container text-xs-center tm-section-1-inner">
						<img src="<?php echo base_url() ?>assets/img/logo1.png" alt="Logo" class="tm-logo">
						<h1 class="tm-site-name">EkstraKu</h1>
						<p class="tm-intro-text">Ekstrakurikuler</p>
						<a href="#tm-section-2" class="tm-intro-link">Mulai</a>
					</div>
				</section>

			</div>
		</div>

		<div class="row gray-bg">

			<div id="tm-section-2" class="tm-section">
				<div class="tm-container tm-container-wide">
					<div class="tm-news-item">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-item-img-container">
							<img src="<?php echo base_url() ?>assets/img/spkbola.jpg" alt="Image" class="img-fluid tm-news-item-img">
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container">
							<h2 class="tm-news-title dark-gray-text">Porseni PGRI Sukabumi 2018, Kick Of Cabang Sepak Bola</h2>
							<p class="tm-news-text" align="justify">Kick Off atau tendangan pertama di lakukan oleh ketua PGRI di lapang Gumbira Nagrak, lapang Jilegong oleh Unsur Polsek, sementara di lapang Cibodas di lakukan oleh Camat Nagrak.</p>
							<a href="#" class="btn tm-light-blue-bordered-btn tm-news-link">Baca</a>
						</div>
					</div>

					<div class="tm-news-item">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 flex-order-2 tm-news-item-img-container">
							<img src="<?php echo base_url() ?>assets/img/bultang.jpg" alt="Image" class="img-fluid tm-news-item-img">
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container flex-order-1">
							<h2 class="tm-news-title dark-gray-text">Azmi Putri Sawali Masuk Semi Final Cabang Bulu Tangkis</h2>
							<p class="tm-news-text" align="justify">Dalam ajang O2SN tingkat Kabupaten Sukabumi di hari kedua, Azmi putri Awali lolos melangkah ke semi final di cabang pertandingan bulu tangkis, kegiatan tersebut di selenggarakan tepatnya di gedung serba guna Armed 315 Cikembang, Jalanraya Cikembang, Kabupaten Sukabumi, Jawa Barat.</p>
							<a href="#" class="btn tm-light-blue-bordered-btn tm-news-link">Baca</a>
						</div>
					</div>

					<div class="tm-news-item">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-item-img-container">
							<img src="<?php echo base_url() ?>assets/img/kar.jpg" alt="Image" class="img-fluid tm-news-item-img">
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container">
							<h2 class="tm-news-title dark-gray-text">Siswa BKC Cidahu, Baru Berlatih 4 Bulan Berhasil Meraih 10 Medali</h2>
							<p class="tm-news-text" align="justify">Bandung Karatek Club (BKC) yang berada di Cidahu, Kabupaten Sukabumi, berhasil meraih 2 medali emas dalam Kejuaraan Antar Dojo (Keando) BKC, yang digelar di gor Yasti Cisaat, Sukabumi, Jawa Barat pada tanggal 3 dan 4 Maret lalu.</p>
							<a href="#" class="btn tm-light-blue-bordered-btn tm-news-link">Baca</a>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- row -->

		<div class="row">
			<section id="tm-section-3" class="tm-section">
				<div class="tm-container text-xs-center">

					<h2 class="blue-text tm-title">Kegiatan - Kegiatan</h2>
					<p class="margin-b-5">Galeri Kegitan Ekstrakrikuler</p>

					<div class="tm-img-grid">
						<div class="tm-gallery-img-container">
							<a href=img/tm-450x300-01.jpg" class="tm-gallery-img-link">
								<img src="<?php echo base_url() ?>assets/img/tm-450x300-01.jpg" alt="Image" class="img-fluid tm-gallery-img"> <!-- 300x200 -->
							</a>
						</div>
						<div class="tm-gallery-img-container">
							<a href=img/tm-450x300-07.jpg" class="tm-gallery-img-link">
								<img src="<?php echo base_url() ?>assets/img/tm-450x300-07.jpg" alt="Image" class="img-fluid tm-gallery-img">
							</a>
						</div>
						<div class="tm-gallery-img-container">
							<a href=img/tm-450x300-02.jpg" class="tm-gallery-img-link">
								<img src="<?php echo base_url() ?>assets/img/tm-450x300-02.jpg" alt="Image" class="img-fluid tm-gallery-img">
							</a>
						</div>
						<div class="tm-gallery-img-container">
							<a href=img/tm-450x300-09.jpg" class="tm-gallery-img-link">
								<img src="<?php echo base_url() ?>assets/img/tm-450x300-09.jpg" alt="Image" class="img-fluid tm-gallery-img">
							</a>
						</div>
						<div class="tm-gallery-img-container">
							<a href=img/tm-450x300-03.jpg" class="tm-gallery-img-link">
								<img src="<?php echo base_url() ?>assets/img/tm-450x300-03.jpg" alt="Image" class="img-fluid tm-gallery-img">
							</a>
						</div>
						<div class="tm-gallery-img-container">
							<a href=img/tm-450x300-08.jpg" class="tm-gallery-img-link">
								<img src="<?php echo base_url() ?>assets/img/tm-450x300-08.jpg" alt="Image" class="img-fluid tm-gallery-img">
							</a>
						</div>
						<div class="tm-gallery-img-container">
							<a href="img/tm-450x300-10.jpg" class="tm-gallery-img-link">
								<img src="<?php echo base_url() ?>assets/img/tm-450x300-10.jpg" alt="Image" class="img-fluid tm-gallery-img">
							</a>
						</div>
						<div class="tm-gallery-img-container">
							<a href="img/tm-450x300-04.jpg" class="tm-gallery-img-link">
								<img src="<?php echo base_url() ?>assets/img/tm-450x300-04.jpg" alt="Image" class="img-fluid tm-gallery-img">
							</a>
						</div>
						<div class="tm-gallery-img-container">
							<a href="img/tm-450x300-05.jpg" class="tm-gallery-img-link">
								<img src="<?php echo base_url() ?>assets/img/tm-450x300-05.jpg" alt="Image" class="img-fluid tm-gallery-img">
							</a>
						</div>
						<div class="tm-gallery-img-container">
							<a href="img/tm-450x300-11.jpg" class="tm-gallery-img-link">
								<img src="<?php echo base_url() ?>assets/img/tm-450x300-11.jpg" alt="Image" class="img-fluid tm-gallery-img">
							</a>
						</div>
						<div class="tm-gallery-img-container">
							<a href="img/tm-450x300-06.jpg" class="tm-gallery-img-link">
								<img src="<?php echo base_url() ?>assets/img/tm-450x300-06.jpg" alt="Image" class="img-fluid tm-gallery-img">
							</a>
						</div>
						<div class="tm-gallery-img-container">
							<a href="img/tm-450x300-12.jpg" class="tm-gallery-img-link">
								<img src="<?php echo base_url() ?>assets/img/tm-450x300-12.jpg" alt="Image" class="img-fluid tm-gallery-img">
							</a>
						</div>
					</div>
				</div>
			</section>

		</div> <!-- row -->

		<div class="row gray-bg">

			<section id="tm-section-5" class="tm-section">
				<div class="tm-container">

					<h2 class="blue-text tm-title text-xs-center">Hubungi Kami</h2>

					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
						<form action="index.html" method="post" class="tm-contact-form">
							<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-form-group-left">
								<input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Nama"  required/>
							</div>
							<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-form-group-right">
								<input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
							</div>
							<div class="form-group">
								<input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Judul"  required/>
							</div>
							<div class="form-group">
								<textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Pesan" required></textarea>
							</div>

							<button type="submit" class="btn tm-light-blue-bordered-btn pull-xs-right">Submit</button>
						</form>
					</div> <!-- col -->

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 margin-top-xs-50">
						<h3 class="light-blue-text tm-subtitle">Administrator</h3>
						<p>Achmad Oky Efendi, Ahmad Faqih Ardinata, Bintang Anugrah Perdana</p>
						<p>
							Tel: <a href="tel:0100200340">085-331-051-257</a><br>
							Email: <a href="mailto:info@company.com">info@admin.com</a>
						</p>
					</div>
				</div>
			</section>

			<!-- footer -->
			<footer class="tm-footer">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<p class="text-xs-center tm-footer-text">Copyright &copy; 2018 Politeknik Negeri Banyuwangi</p>
				</div>
			</footer>

		</div> <!-- row -->

	</div> <!-- container-fluid -->

	<!-- load JS files -->
        
        <script src="<?php echo base_url() ?>assets/bootstrap2js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="<?php echo base_url() ?>assets/bootstrap2https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h -->
        <script src="<?php echo base_url() ?>assets/bootstrap2js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
        <script src="<?php echo base_url() ?>assets/bootstrap2js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="<?php echo base_url() ?>assets/bootstrap2js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        
        <!-- Templatemo scripts -->
        <script>     
       
            $(document).ready(function(){

                var mobileTopOffset = 54;
                var desktopTopOffset = 80;
                var topOffset = desktopTopOffset;

                if($(window).width() <= 767) {
                    topOffset = mobileTopOffset;
                }
                
                /* Single page nav
                -----------------------------------------*/
                $('#tmNavbar').singlePageNav({
                   'currentClass' : "active",
                    offset : topOffset,
                    'filter': ':not(.external)'
                }); 

                /* Handle nav offset upon window resize
                -----------------------------------------*/
                $(window).resize(function(){
                    if($(window).width() <= 767) {
                        topOffset = mobileTopOffset;
                    } 
                    else {
                        topOffset = desktopTopOffset;
                    }

                    $('#tmNavbar').singlePageNav({
                        'currentClass' : "active",
                        offset : topOffset,
                        'filter': ':not(.external)'
                    });
                });
                

                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');
                });

                /* Turn navbar background to solid color starting at section 2
                ---------------------------------------------------------------*/
                var target = $("#tm-section-2").offset().top - topOffset;

                if($(window).scrollTop() >= target) {
                    $(".tm-navbar-container").addClass("bg-inverse");
                }
                else {
                    $(".tm-navbar-container").removeClass("bg-inverse");
                }

                $(window).scroll(function(){
                   
                    if($(this).scrollTop() >= target) {
                        $(".tm-navbar-container").addClass("bg-inverse");
                    }
                    else {
                        $(".tm-navbar-container").removeClass("bg-inverse");
                    }
                });


                /* Smooth Scrolling
                 * https://css-tricks.com/snippets/jquery/smooth-scrolling/
                --------------------------------------------------------------*/
                $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
                        && location.hostname == this.hostname) {
                        
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        
                        if (target.length) {
                            
                            $('html, body').animate({
                                scrollTop: target.offset().top - topOffset
                            }, 1000);
                            return false;
                        }
                    }
                }); 

              
                /* Magnific pop up
                ------------------------- */
                $('.tm-img-grid').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery: {enabled:true}            
                });            
            });

        </script>             

</body>
</html>
