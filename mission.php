<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Our Mission";
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
            &ldquo;&nbsp;and provide for those who 
              grieve in Zion 
              to bestow on them a crown of beauty 
              instead of ashes,
              the oil of joy 
              instead of mourning,
              and a garment of praise
              instead of a spirit of despair.
              They will be called oaks of righteousness,
              a planting of the Lord
              for the display of his splendor.
            &nbsp;&rdquo;
                &mdash; Isaiah 61:3
            </h5>
        </div>
    </div>

    <div class="container bar-content p-centered page-width">    
        <div class="columns">
            <div class="column col-8 col-md-12">
                <!-- mission.php -->
                <h2 class="text-center">MISSION</h2>

                <p>
                     Our mission with Grace House of Longview
                     is to provide this community with a faith
                     based transition home for young women 
                     who have struggled with incarceration due 
                     to addictions and other poor living choices. 
                     each woman will be interviewed to
                     determine her desire to commit to 9 months  
                     of spiritual training to help lead them to a 
                     Christ centered and addiction free life.

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
