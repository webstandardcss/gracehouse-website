<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Our Team";
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
                &ldquo;&nbsp;But among you it will be different. Whoever wants to be a leader among you must be your servant&nbsp;&rdquo;
                &mdash; Matthew 20:26
            </h5>
        </div>
    </div>

    <div class="container bar-content p-centered page-width">    
        <div class="columns">
            <div class="column col-8 col-md-12 col-mx-auto">
                <!-- team.php -->
                <h2 class="text-center">
                    OUR TEAM
                </h2>

                <h3>
                    BOARD OF DIRECTORS
                </h3>

                <ul>
                    <li>Darrell Smith</li>
                    <li>Cherie Smith</li>
                    <li>Thomas McDaniels</li>
                    <li>Charlotte McDaniels</li>
                    <li>Edie Lockhart</li>
                </ul>
            </div>
            <div class="column col-4 col-md-12">
                <?php require(dirname(__FILE__) . "/inc/_nav_menu_about.php"); ?>
            </div>   
        </div> 
        <!-- end columns -->
    </div>
    <!-- end content -->  
    

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
