<?php $title = 'Home'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'index'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<body class="single single-portfolio">
<div class="p-detail">
    <div class="detail-container" id="detail-container">
        <aside class="project-details">
            <div class="oi_port_nav">
                <a href="marketing.php" rel="next"><i class="fa fa-long-arrow-left fa-fw"></i></a>
                <a href="projects.php"><i class="fa fa-th-large fa-fw"></i></a>
                <a href="roadkrome.php" rel="prev"><i class="fa fa-long-arrow-right fa-fw"></i></a>
            </div>
            <div class="scroller clearfix mCustomScrollbar _mCS_2" id="scroller"
                 style="height: 704px; overflow: hidden;">
                <div class="mCustomScrollBox mCS-light" id="mCSB_2"
                     style="position:relative; height:100%; overflow:hidden; max-width:100%;">
                    <div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
                        <div class="main-detail-content">
                            <h2>Front End Development</h2>
                            <h3>Vanilla Forums</h3>
                            <div class="description">
                                <p>Theme customisation for clients like: Asus, Niantic, Smartsheet, Pennfoster, Juul, etc.
                                    <br>My role as a Front End Developer was to implement user interfaces for Vanilla's
                                    clients, contribute to improving usability
                                    and produce code that can support and withstand millions of users.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <div class="img-container">
        <figure class="project-images main" style="margin-bottom:0px!important;">
            <img class="img-responsive" src="assets/images/asus.jpg"></figure>
        <div class="hp-video">
            <video autoplay loop muted poster="assets/images/hp/hp.jpg" id="hp-video">
                <source src="assets/images/hp/hp.mp4" type="video/mp4">
                <source src="assets/images/hp/hp.webm" type="video/webm">
                <source src="assets/images/hp/hp.ogv" type="video/ogg">
            </video>
            <video autoplay loop muted poster="assets/images/hp/asus.jpg" id="asus-video">
                <source src="assets/images/hp/asus.mp4" type="video/mp4">
                <source src="assets/images/hp/asus.webm" type="video/webm">
                <source src="assets/images/hp/asus.ogv" type="video/ogg">
            </video>
        </div>
    </div>
</div>
</body>
<?php include('scripts.php'); ?>
