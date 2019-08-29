<?php $title = 'Home'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'index'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<body style="overflow-x:hidden;" class="">
<div id="preloader">
    <div id="status">
    </div>
</div>
<div class="home-content page-container">
    <div class="home-welcomeText-mobile col-sm-12 col-xs-12 visible-xs visible-sm" style="display:none;">
        <span class="title">Well, hello! Salut, bonjour.</span>
        <span class="description">
                 I seek to create impactful, user-centered and simple designs.
                </span>
        <a href="projects.html" class="sim-button button"><span>Expore my Universe</span></a>
    </div>
    <div class="home-welcomeText hidden-xs hidden-sm">
        <span class="title">Well, hello! Salut, bonjour.</span>
        <span class="description">
                 I'm Irina. I'm a UX Designer, based in Montreal. I seek to create impactful, user-centered and simple designs.
                </span>
        <a href="projects.html" class="sim-button button"><span>Expore my Universe</span></a>
    </div>
    <div class="animation-outer">
        <div class="animation-sprite"></div>
    </div>
</div>
</body>
<?php include('scripts.php'); ?>
