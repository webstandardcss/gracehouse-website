<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "";
$pageTitleTag = $siteName . "  " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>

    <!-- blank.php -->
    <div class="home-banner flex-centered">
        <div class="home-banner-inner">
            <h5>
                &ldquo;&nbsp;The one who calls you is faithful, and he will do it.&nbsp;&rdquo;
                &mdash; 1 Thessalonians 5:24
            </h5>
        </div>
    </div>

    <div class="container bar-content p-centered page-width">    
        <div class="columns">
            <div class="column col-8 col-md-12 col-mx-auto">
                <!-- contact.php -->    
                <h2 class="text-center">CONTACT US</h2>
                <dl>
                    <dt>
                    Darrell Smith
                    </dt>
                    <dd>
                    <a href="mailto:Darrell@gracehouselongview.com">Darrell@gracehouselongview.com</a>
                    <a href="tel:+19037464145">(903) 746-4145</a>
                    </dd>

                    <dt>
                    Cherie Smith
                    </dt>
                    <dd>
                    <a href="mailto:Cherie@gracehouselongview.com">Cherie@gracehouselongview.com</a>
                    <a href="tel:+19037460632">(903) 746-0632</a>
                    </dd>


                    <dt>
                    Ashley Smith
                    </dt>
                    <dd>
                    <a href="mailto:Ashley@gracehouselongview.com">Ashley@gracehouselongview.com</a>
                    </dd>
                </dl>
            </div>
        </div> 
        <!-- end columns -->
    </div>
    <!-- end content -->  
    

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
