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
                <a href="vanilla.php" rel="prev"><i class="fa fa-long-arrow-right fa-fw"></i></a>
            </div>
            <div class="scroller clearfix mCustomScrollbar _mCS_2" id="scroller"
                 style="height: 704px; overflow: hidden;">
                <div class="mCustomScrollBox mCS-light" id="mCSB_2"
                     style="position:relative; height:100%; overflow:hidden; max-width:100%;">
                    <div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
                        <div class="main-detail-content">
                            <h2>Branding & UX Design</h2>
                            <h3 class="buffalo">Réno Dépôt</h3>
                            <div class="description"><p>School project: redo the image of a company. Réno Dépôt is a
                                company of renovation /construction situated in Quebec. The deputy director of Réno
                                Dépôt NDG was my client for about 5 months. During this time, I redid the complete image
                                brand of this company, starting with the logo, the employer's business carts, their
                                uniforms and also their website (responsible on all devices). </p></div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <div class="img-container">
        <figure class="project-images main"><img class="img-responsive" src="assets/images/renodepotholepage.jpg">
        </figure>
        <figure class="project-images" style="width: 50%; margin: 0 auto;"><img
                class="img-responsive" src="assets/images/4cda5533209411.56a957876c333.gif"></figure>
    </div>
</div>
</body>
<?php include('scripts.php'); ?>
