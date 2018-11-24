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
                &ldquo;&nbsp;&nbsp;&rdquo;
                &mdash; 
            </h5>
        </div>
    </div>

    <div class="container bar-content p-centered page-width">    
        <div class="columns">
            <div class="column col-8 col-md-12 col-mx-auto">
                <h2 class="text-center">Application for Residency</h2>
                <p>Click on the link below to print the application.</p>

                <h4>
                  APPLICATION SCREENING SURVEY
                </h4>
                <ul>
                  <li>For mobile or printing. <a href="/application.pdf" target="_blank">(pdf&nbsp;format)</a></li>
                  <li>Fill out and print with MS Office or Google Docs. <a href="/application.docx" target="_blank">(Microsoft&nbsp;Word&nbsp;docx&nbsp;format)</a></li>
                </ul>

                <h4>
                  Applications can be mailed to:
                </h4>
                <div>
                    Grace House of Longview
                </div>
                <address>P.O. Box 761<br />
                Longview, TX 75606</address>

            </div>
        </div> 
        <!-- end columns -->
    </div>
    <!-- end content -->  
    

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
