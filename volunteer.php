<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Volunteers";
$pageTitleTag = $siteName . "  " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>

    <!-- volunteer.php -->
    <div class="home-banner flex-centered">
        <div class="home-banner-inner">
            <h5>
                &ldquo;&nbsp;God is not unjust; he will not forget your work and the love you have shown him as you have helped his people and continue to help them.&nbsp;&rdquo;
                &mdash; Hebrews 6:10
            </h5>
        </div>
    </div>

    <div class="container bar-content p-centered page-width">    
        <div class="columns">
            <div class="column col-8 col-md-12">
                <h2 class="text-center">VOLUNTEERING</h2>
                <p>
                    Grace House is dependent upon volunteers in several roles:
                </p>

                <h3>Instructors and Bible Study Leaders:</h3>
                <p>
                    Individuals who have expertise in the various field of the Grace House curriculum or have a desire to lead in home bible studies and discussions.
                </p>

                <h3>Mentors:</h3>
                <p>
                    Mentors play an important role with each Grace House resident. We will need strong christian women who will dedicate time and energy into seeing that their assigned resident receives one on one emotional and spiritual support.
                </p>

                <h3>Drivers:</h3>
                <p>
                    Women who would assist in driving residents to church functions, court appointments, volunteering events and classes.
                </p>

                <blockquote>Contact Cherie Smith to volunteer or call 
                <a href="tel:+19037460632">(903)&nbsp;746-0632</a></blockquote> or email us at: <a herf="mailto:gracehouselongview@yahoo.com">Gracehouselongview@yahoo.com</a>
            </div>
            <div class="column col-4 col-md-12">
                <?php require(dirname(__FILE__) . "/inc/_nav_menu_involved.php"); ?>
            </div>
            <p>&nbsp;</p>
        </div> 
        
        <!-- end columns -->
    </div>
    <!-- end content -->  
    

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
