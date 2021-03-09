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
                <a href="projects.php"><i class="fa fa-th-large fa-fw buffalo"></i></a>
                <a href="roadkrome.php" rel="prev"><i class="buffalo fa fa-long-arrow-right fa-fw"></i></a>
            </div>
            <div class="scroller clearfix mCustomScrollbar _mCS_2 buffalo" id="scroller"
                 style="height: 704px; overflow: hidden;">
                <div class="mCustomScrollBox mCS-light" id="mCSB_2"
                     style="position:relative; height:100%; overflow:hidden; max-width:100%;">
                    <div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
                        <div class="main-detail-content">
                            <h2>Graphic Design</h2>
                            <h3 class="buffalo">Buffalo David Bitton</h3>
                            <div class="description"><p> Buffalo, an iconic brand offering multiple denim styles and a
                                full fashion collection. Using Photoshop, Illustrator and Indesign I was creating
                                solutions to communicate client messages withhigh visual impact. Design diferent
                                artworks, concepts and artboards for each season and prepare mockup-ups.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <div class="img-container" style="background-color:white!important">
        <figure class="project-images main" style="margin-bottom: 0px;">
            <img class="img-responsive" src="assets/images/buffaloholepage.jpg">
        </figure>
    </div>
</div>
</body>
<?php include('scripts.php'); ?>
