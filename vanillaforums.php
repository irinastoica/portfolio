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
                <a href="projects.php"><i class="fa fa-th-large fa-fw"></i></a>
                <a href="intranet.php" rel="prev"><i class="fa fa-long-arrow-right fa-fw"></i></a>
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
                                <p> Vanilla Forums is a cloud-based customer community software.
                                    <br>Drive loyalty, grow sales, and improve customer service.</p>
                                 <p>I’ve been working on multiple projects at Vanilla.</p>
                                 <p>The Library where they are storing all their case studies, ebooks, webinars etc. 
                                    	<a href="https://pages.vanillaforums.com/learn" target="_blank">Click here</a> to see the live version.</p>
						<p>Another big project is the <a href="https://blog.vanillaforums.com/" target="_blank">Blog</a> </p>
						<p>
The branding is based on the Vanilla guideline, the illustrations are done in Sketch.</p>
                                    

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <div class="img-container">
    	<figure class="project-images main" style="margin-bottom:0px!important; ">
            <img style=" width: 600px!important; margin-top: 90px;" class="img-responsive" src="assets/images/enterprise.gif"></figure>
        <figure class="project-images main" style="margin-bottom:0px!important;">
            <img class="img-responsive" src="assets/images/vanillaforums.jpg"></figure>
    </div>
</div>
</body>
<?php include('scripts.php'); ?>
