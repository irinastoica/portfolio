<?php $title = 'Home'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'index'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<body class="page_about">
<div id="preloader">
    <div id="status">
    </div>
</div>
<div class="about-content page-container col-lg-12">
    <div class="col-lg-5 profil-animation" style="
            position: fixed;
            right: 10px;
            bottom: 0;
            overflow: hidden;
            ">
        <figure style="position:relative;margin: 0;">
            <img alt="Irina Stoica" class="img-responsive objects" src="assets/images/portrait.png"
                 style="bottom: 0;margin-left: 0; max-width: 90%;">
            <a class="btn-cv" href="assets/files/cv.pdf" target="_blank">
                <span class="download">download</span>
                <span class="cv">cv</span>
                <i></i>
            </a>
        </figure>
    </div>
    <div class="Services-wrapper">
        <h1 class="about-title">About Irina</h1>
        <ul>
            <li>
                <h2>Ux & UI design</h2>
                <p>With over 5 years of experience, I enjoy creating new human-centered design that not only looks good but provides easy and accessible solutions. </p>
            </li>
            <li class="service">
                <h2>Branding</h2>
                <p>A correct branding changes everything. I worked with a few brands like: <strong>Slasher Performance, Zox Helmets, Olympia Motosports, Roadkrome</strong>
                I love to fresh-up a brand in order to have consistency and a clean modern look.</p>
            </li>
            <li class="service">
                <h2>Marketing</h2>
                <p>I worked in the marketing department for over 2 years and I need to say that I love the energy of this department, the constant
                movement and team work required to promotes businesses.</p>
            </li>
        </ul>
    </div>
</div>
</body>
<?php include('scripts.php'); ?>
