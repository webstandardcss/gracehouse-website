<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Homepage";
$pageTitleTag = $siteName . "  " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>


    <div class="container bar-content p-centered page-width">    
        <h2 class="text-center">Grace House is a faith-based transition home for women at risk.</h2>
        <p class="text-center">We provide a safe environment where our residents have the opportunity to establish an intimate relationship with Jesus Christ. They are taught to change their life-styles by making healthy choices for themselves and their families.</p>
        <div class="columns">
            <div class="column col-6 col-md-12">
                <h3>About Us</h3>
                <button class="btn p-centered mb-2 text-bold s-rounded">LEARN MORE</button>
            </div>
            <div class="column col-6 hide-md flex-centered">
                <img src="/assets/images/grace-about.jpg" alt="About Us" class="img-fit-contain">
            </div>
        </div> 
        <!-- end columns -->
        <div class="flex-centered p-24">
            <img src="/assets/images/video-placeholder.png" alt="Grace House Video">
        </div>
        <h3 class="text-center">Recent Updates</h3>
        <div class="columns mb-2">
            <div class="column col-12 col-md-12 bg-gray"></div>
            
            <div class="column col-4 col-md-12 bg-gray">
                <div class="card">
                    <div class="card-image"><img class="img-responsive img-fit-contain" src="" alt=""></div>
                    <div class="card-header">
                        <button class="btn btn-primary float-right"><i class="icon icon-more-horiz"></i></button>
                        <div class="card-title h5"></div>
                        <div class="card-subtitle text-gray"></div>
                    </div>
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
        <!-- end columns -->                        
        <button class="btn p-centered mb-2 text-bold s-rounded">VIEW ALL</button><br />
    </div>
    <!-- end content -->  
    

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
