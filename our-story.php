<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Our Story";
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
                &ldquo;&nbsp;She embraced the opportunity to enter Grace House of San Antonio and spent the full 9 months allowing God to show her a new way.&nbsp;&rdquo;
            </h5>
        </div>
    </div>

    <div class="container bar-content p-centered page-width">    
        <div class="columns">
            <div class="column col-8 col-md-12">
                <!-- our-story.php -->
                <h2 class="text-center">
                    Ashley’s Story
                </h2>

                <blockquote>
                    After watching our daughter Ashley struggle for years with drug and alcohol addiction along with making poor life choices, we encouraged her to try Grace House of San Antonio.
                </blockquote>

                <em>After a stint in jail, Ashley began to see God had better plans for her life.</em>

                <p>
                    She embraced the opportunity to enter Grace House of San Antonio and spent the full 9 months allowing God to show her a new way.  
                </p>    

                <p>    
                    After seeing the results that were brought on by this ministry and the burning desire Ashley has to help others, we felt Longview could use a faith based transition home here.
                </p>

                <p>
                    We are blessed by this community as the owners of McDaniel’s Quality Body Works and are proud to say that a portion of our profits will go to help fund Grace House of Longview.
                </p>
            </div>
            <div class="column col-4 col-md-12">
                <?php require(dirname(__FILE__) . "/inc/_nav_menu_about.php"); ?>
            </div>    
        </div> 
        <!-- end columns -->
    </div>
    <!-- end content -->  
    

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
