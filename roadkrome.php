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
                <a href="vanilla.php" rel="next"><i class="fa fa-long-arrow-left fa-fw"></i></a>
                <a href="projects.php"><i class="fa fa-th-large fa-fw"></i></a>
                <a href="maxime.php" rel="prev"><i class="fa fa-long-arrow-right fa-fw"></i></a>
            </div>
            <div class="scroller clearfix mCustomScrollbar _mCS_2" id="scroller"
                 style="height: 704px; overflow: hidden;">
                <div class="mCustomScrollBox mCS-light" id="mCSB_2"
                     style="position:relative; height:100%; overflow:hidden; max-width:100%;">
                    <div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
                        <div class="main-detail-content" style="padding-top: 15px;">
                            <h2>Ux Design</h2>
                            <h3>Roadkrome</h3>
                            <p>New identity for the Roadkrome.
                                Roadkrome is a brand of high-quality motorcycle accessories and leather appeal.
                                The purpose of the new identity is to modernize the identity of the whole brand. Along
                                with the new logo, I created a new website and packaging to fit well with the modern and
                                masculine look.
                            <p style="margin-top: 25px;">
                                <a href="http://irinastoica.github.io/roadkrome"
                                   style="text-decoration:none; color: black; text-transform: uppercase;"
                                   target="_blank">Click here to see the
                                    prototype</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <div class="img-container" style="background-color:#0b0b0b!important;">
        <figure class="project-images main" style="margin-bottom:0!important;">
            <img src="assets/images/roadkrome.jpg">
            <img src="assets/images/roadkrome.gif">
            <img src="assets/images/packagingroadkrome.jpg">
        </figure>
    </div>
</div>
</body>
<?php include('scripts.php'); ?>
