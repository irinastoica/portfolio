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
                <a href="maxime.php" rel="next"><i class="fa fa-long-arrow-left fa-fw buffalo"></i></a>
                <a href="projects.php"><i class="fa fa-th-large fa-fw"></i></a>
                <a href="renodepot.php" rel="prev"><i class="fa fa-long-arrow-right fa-fw"></i></a>
            </div>
            <div class="scroller clearfix mCustomScrollbar _mCS_2" id="scroller"
                 style="height: 704px; overflow: hidden;">
                <div class="mCustomScrollBox mCS-light" id="mCSB_2"
                     style="position:relative; height:100%; overflow:hidden; max-width:100%;">
                    <div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
                        <div class="main-detail-content">
                            <h2>Marketing & Graphic Design</h2>
                            <h3 style="font-size:28px;">Motovan</h3>
                            <div class="description"><p> Multiples prints for magasins and events. Working on different
                                sizes and materials in order to succesfully communicate the brands identities. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <div class="img-container" style="background-color:#d7d9db!important">
            <figure class="project-images main mcc"><img class="img-responsive" src="assets/images/marketing.jpg">
            </figure>
        </div>
    </div>
</div>
</body>
<?php include('scripts.php'); ?>
