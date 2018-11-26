<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Homepage";
$pageTitleTag = $siteName . "  " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>

<style scoped>
  .about-image img {
    max-width: 600px;
  }
</style>

<div class="container home-header">
        <div class="columns">
            <div class="home-banner flex-centered">
                <div class="home-banner-inner">
                    <h5>
                        &ldquo;&nbsp;Being confident of this very thing, that he which hath begun a good in which you will perform it until the day of Jesus Christ.&nbsp;&rdquo;
                        &mdash; Philippians 1:6
                    </h5>
                </div>
            </div>
            <div class="column col-4 col-md-12 grace-menu grace-apply flex-centered">
                <a href="apply.php" class="btn s-rounded" tabindex="6">
                    Apply               
                    <i class="icon icon-mail text-white ml-2"></i>
                </a>
            </div>
            <div class="column col-4 col-md-12 grace-menu grace-story flex-centered">
                <a href="our-story.php" class="btn s-rounded" tabindex="7">
                    Our Story                
                    <i class="icon icon-message text-white ml-2"></i>
                </a>
            </div>
            <div class="column col-4 col-md-12 grace-menu grace-volunteer flex-centered">
                <a href="volunteer.php" class="btn s-rounded" tabindex="8">
                    Volunteer                
                    <i class="icon icon-people text-white ml-2"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="container bar-content p-centered page-width">    
        <h2 class="text-center">Grace House is a faith-based transition home for women at risk.</h2>
        <p class="text-center">We provide a safe environment where our residents have the opportunity to establish an intimate relationship with Jesus Christ. They are taught to change their life-styles by making healthy choices for themselves and their families.</p>
        <div class="columns">
            <div class="column col-6 col-md-12">
                <h3>About Us</h3>
                <p>Grace House was established to train, support and give hope to women following incarceration, or those in the midst of perilous lifestyles. The Grace House setting and training affords an opportunity for women to overcome the addictive and destructive lifestyles that have kept them from becoming productive citizens.</p>
                <p>Applicants must submit an application, and be interviewed and evaluated to determine their desire and potential for participating in the Grace House program. The ministry’s objective is to educate, encourage and care for selected women until they are prepared to re-enter everyday life in a productive and confident manner.</p>
                <button class="btn p-centered mb-2 text-bold s-rounded">LEARN MORE</button>
            </div>
            <div class="column col-6 hide-md flex-centered about-image">
                <img src="/assets/images/grace-about.jpg" alt="About Us" class="img-fit-contain">
            </div>
        </div> 
        <!-- end columns -->
        <div class="flex-centered p-24">
            <img src="/assets/images/video-placeholder.png" alt="Grace House Video">
        </div>
        <h3 class="text-center">Recent Blogs and Updates</h3>
        <div class="columns grace-blog mb-2">
            <div class="column col-4 col-md-12 bg-gray">
                <div class="card">
                    <div class="card-image"><img class="img-responsive img-fit-cover" src="/assets/images/blog-1-sm.jpg" alt="Ina"></div>
                    <div class="card-header">
                        <button class="btn btn-primary float-right"><i class="icon icon-more-horiz"></i></button>
                        <div class="card-title h5">State Representative, Ina Minajarez, visits Grace House</div>
                        <div class="card-subtitle text-gray">August 25, 2018</div>
                    </div>
                    <div class="card-body">An immersive, three-day experience focused on exploring the next generation of technology, mobile and beyond.</div>
                </div>
            </div>
            <div class="column col-4 col-md-12 bg-gray">
                <div class="card">
                    <div class="card-image"><img class="img-responsive img-fit-cover" src="/assets/images/blog-2-maria.jpg" alt="Maria"></div>
                    <div class="card-header">
                        <button class="btn btn-primary float-right"><i class="icon icon-more-horiz"></i></button>
                        <div class="card-title h5">Maria's Testimony</div>
                        <div class="card-subtitle text-gray">August 2, 2018</div>
                    </div>
                    <div class="card-body">An immersive, three-day experience focused on exploring the next generation of technology, mobile and beyond.</div>
                </div>
            </div>
            <div class="column col-4 col-md-12 bg-gray">
                <div class="card">
                    <div class="card-image"><img class="img-responsive img-fit-contain" src="/assets/images/blog-3-sm.jpg" alt="Panida"></div>
                    <div class="card-header">
                        <button class="btn btn-primary float-right"><i class="icon icon-more-horiz"></i></button>
                        <div class="card-title h5">Panida's Testimony</div>
                        <div class="card-subtitle text-gray">July 5, 2018</div>
                    </div>
                    <div class="card-body">An immersive, three-day experience focused on exploring the next generation of technology, mobile and beyond.</div>
                </div>
            </div>
        </div>
        <!-- end columns -->                        
        <button class="btn p-centered mb-2 text-bold s-rounded">VIEW ALL POSTS</button><br />
    </div>
    <!-- end content -->  
    

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
