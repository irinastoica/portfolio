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
                <a href="intranet.php" rel="next"><i class="fa fa-long-arrow-left fa-fw"></i></a>
                <a href="projects.php"><i class="fa fa-th-large fa-fw"></i></a>
                <a href="marketing.php" rel="prev"><i class="fa fa-long-arrow-right fa-fw"></i></a>
            </div>
            <div class="scroller clearfix mCustomScrollbar _mCS_2" id="scroller"
                 style="height: 704px; overflow: hidden;">
                <div class="mCustomScrollBox mCS-light" id="mCSB_2"
                     style="position:relative; height:100%; overflow:hidden; max-width:100%;">
                    <div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
                        <div class="main-detail-content">
                            <h2>UX & UI Designer</h2>
                            <h3>Lyftnote</h3>
                            <div class="description"><p>Co-Founder at Lyftnote, a platform for students who are looking
                                to buy or sell used textbooks in their community. A powerful platform that allows fellow
                                students to connect within campus grounds or a localized area. My main implication in
                                this projects was the UX and UI design of the whole app. How to make the app as easy as
                                possible to use, student friendly.
                                My second implication was the Front-End Development : The development of the user
                                interface and
                                the user experience of the app. Languages used: CSS3 with Bootstrap, Javascript / Jquery
                                and HTML5.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <div class="img-container">
        <video autoplay="autoplay" class="lyftnote" loop poster="eh5v.files/html5video/animationnew.jpg"
               style="width:100%;margin-bottom: -6px;" title="animationnew">
            <source src="eh5v.files/html5video/animationnew.m4v" type="video/mp4"/>
            <source src="eh5v.files/html5video/animationnew.webm" type="video/webm"/>
            <object data="eh5v.files/html5video/flashfox.swf" height="1777" style="position:relative;"
                    type="application/x-shockwave-flash" width="2669">
            </object>
        </video>
        <figure class="project-images main" style="margin-bottom:0!important;">
            <img src="assets/images/lyftnoteholepage.jpg"></figure>
    </div>
</div>
<script src='assets/js/jquery-1.11.3.min.js' type='text/javascript'></script>
<script src='assets/bootstrap/bootstrap.min.js' type='text/javascript'></script>
<script src="assets/js/index.js"></script>
</body>
<?php include('scripts.php'); ?>
