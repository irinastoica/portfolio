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
                <a href="lyftnote.php" rel="prev"><i class="fa fa-long-arrow-right fa-fw"></i></a>
            </div>
            <div class="scroller clearfix mCustomScrollbar _mCS_2" id="scroller"
                 style="height: 704px; overflow: hidden;">
                <div class="mCustomScrollBox mCS-light" id="mCSB_2"
                     style="position:relative; height:100%; overflow:hidden; max-width:100%;">
                    <div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
                        <div class="main-detail-content">

                            <h2>UX Design</h2>
                            <h3 style="font-size:28px;">Motovan Community</h3>
                            <time class="buffalo" datetime="{({datetime}}"><span>DATE: </span> 2018 - 2019
                            </time>
                            <div class="description">
                                <p> The Motovan - MTA Intranet Platform is enabling representives and vendors to
                                    exchange information on this easy, user
                                    friendly web / mobile platform. The sales team will have a much easier time viewing
                                    information and communicating on the Intranet Platform using
                                    features like tagging, “liking”, rating and commenting, subscription features and
                                    push notifications through the app.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <div class="img-container" style="background-color:#d7d9db!important">
        <figure class="project-images main mcc"><img class="img-responsive" src="assets/images/intranet.jpg">
        </figure>
    </div>
</div>
</body>
<?php include('scripts.php'); ?>
